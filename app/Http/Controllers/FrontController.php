<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use App\Mail\EnquiryConfirmationMail;
use App\Mail\EnquiryNotificationMail;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Razorpay\Api\Api;
// use App\Helpers\PdfGenerate;

class FrontController extends Controller
{
    protected $api = '';
    public function __construct()
    {
        $this->api =  new Api(config('services.razorpay.test.razorpayId'), config('services.razorpay.test.razorpayKey'));
    }
    public function home()
    {
        $products = [];
        return view('front.index', ['products' => $products]);
    }

    public function services()
    {
        return view('front.static.services');
    }

    public function listing()
    {
        $countries = \App\Models\Country::all();
        return view('front.listing', ['countries' => $countries]);
    }
    public function contact()
    {
        $countries = Country::all();
        return view('front.static.contact', ['countries' => $countries]);
    }
    public function contactPost(Request $req)
    {
        $req->validate([
            'name' => ['required', 'regex:/^[A-Za-z ]{3,150}$/'],
            'location' => 'nullable|string|max:200',
            'country' => 'required|string',
            'phone' => ['required', 'string', 'min:7', 'max:20'],
            'email' => 'required|string|email|max:100',
            'subject' => 'nullable|string|max:200',
            'business_type' => 'required|string|max:100',
            'categories' => 'required|array',
            'order_quantity' => 'nullable|string|max:100',
            'message' => 'required|string|max:500',
            'g-recaptcha-response' => 'required',
            'source' => 'nullable|max:30|string'
        ]);

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $req->{'g-recaptcha-response'},
                'remoteip' => $req->ip(),
            ]
        );

        $result = $response->json();

        if (!($result['success'] ?? false)) {
            return back()
                ->withErrors([
                    'g-recaptcha-response' => 'reCAPTCHA verification failed.'
                ])
                ->withInput();
        } else {
            // Save enquiry
            $enquiry = Enquiry::create([
                'name' => $req->name,
                'location' => $req->location ?? '',
                'country' => $req->country,
                'phone' => $req->phone,
                'email' => $req->email,
                'subject' => $req->subject ?? 'Export Enquiry',
                'business_type' => $req->business_type,
                'product_categories' => $req->categories,
                'order_quantity' => $req->order_quantity,
                'message' => $req->message,
                'source' => $req->source,
            ]);

            // Mail to Admin
            Mail::to(env('NOTIFICATION_EMAIL'))
                ->queue(new EnquiryNotificationMail($enquiry));

            Mail::to($enquiry->email)
                ->queue(new EnquiryConfirmationMail($enquiry));

            return redirect()
                ->back()
                ->with('success', 'Thank you! Your enquiry has been submitted successfully.');
        }
    }

    public function whatsapp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'phone' => ['required', 'string', 'min:7', 'max:20'],
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save enquiry
        Enquiry::create([
            'name' => $request->name,
            'location' => $request->location,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'source' => 'whatsapp',
        ]);

        // Create WhatsApp message
        $whatsappMessage = "Hello,\n\n";
        $whatsappMessage .= "I am interested in your export services. Please find my enquiry details below:\n\n";
        $whatsappMessage .= "Name: {$request->name}\n";
        $whatsappMessage .= "Email: {$request->email}\n";
        $whatsappMessage .= "Phone: {$request->phone}\n";
        $whatsappMessage .= "Location: {$request->location}\n";
        $whatsappMessage .= "Country: {$request->country}\n\n";
        $whatsappMessage .= "Subject:\n";
        $whatsappMessage .= "{$request->subject}\n\n";
        $whatsappMessage .= "Message:\n";
        $whatsappMessage .= "{$request->message}\n\n";
        $whatsappMessage .= "I would appreciate it if your team could contact me with more information.\n\n";
        $whatsappMessage .= "Thank you!";

        $url = "https://wa.me/" .
            config('services.whatsapp.number') .
            "?text=" .
            urlencode($whatsappMessage);

        return response()->json([
            'status' => true,
            'message' => 'Enquiry submitted successfully.',
            'url' => $url,
        ]);
    }

    public function getBlogs(Request $req, $slug = null)
    {
        if ($slug != null) {
            $blogs = Blog::where('status', 1)->where('slug', $slug)->with(['brackets'])->first();
            if ($blogs) {
                $brackets = $blogs->brackets()->pluck('brackets.id')->all();
                $related = Blog::where('status', 1)->where('id', '!=', $blogs->id)->whereHas('brackets', function (Builder $query) use ($brackets) {
                    $query->whereIn('brackets.id', $brackets);
                })->get()->take(3);
                return view('front.blog', ['blog' => $blogs, 'related' => $related]);
            } else return view('front.404');
        }
        $category = [];
        $blogs = Blog::where('status', 1);
        if ($req->filled('blog_category')) {
            $blogs->whereHas('brackets', function (Builder $query) use ($req) {
                $query->where('slug', $req->blog_category);
            });
        }
        $blogs = $blogs->with(['brackets'])->orderBy('created_at', 'DESC')->paginate(15);
        return view('front.blogs', ['blogs' => $blogs, 'category' => $category]);
    }
    public function about()
    {
        return view('front.static.about');
    }

    public function refund()
    {
        return view('front.static.refund');
    }
    public function faq()
    {
        return view('front.static.faq');
    }
    public function privacy()
    {
        return view('front.static.privacy');
    }
    public function terms()
    {
        return view('front.static.terms');
    }
}
