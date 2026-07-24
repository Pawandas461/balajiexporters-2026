<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ActivityLog;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $data = Enquiry::orderBy('created_at', 'ASC');
        if ($req->filled('source'))
            $data->where('source', $req->source);
        if ($req->filled('name'))
            $data->where('name', 'like', '%' . $req->name . '%');
        if ($req->filled('email'))
            $data->where('email', 'like', '%' . $req->email . '%');
        if ($req->filled('phone'))
            $data->where('phone', 'like', '%' . $req->phone . '%');
        if ($req->filled('start'))
            $data->whereDate('created_at', '>=', $req->start);
        if ($req->filled('end'))
            $data->whereDate('created_at', '<', $req->end);
        $data = $data->paginate(30);
        return view('enquiries.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Enquiry::find($id);
        return view('enquiries.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'follow_up_msg' => 'nullable|string|max:5000',
            'is_contacted'  => 'nullable|boolean',
        ]);

        // Track if any contact field state is changing
        if ($request->has('is_contacted') && $request->input('is_contacted') == 1) {
            $enquiry->is_contacted = 1;
            $enquiry->last_contacted_at = Carbon::now();
        }

        // Save the follow-up text field if present in request
        if ($request->has('follow_up_msg')) {
            $enquiry->follow_up_msg = $request->input('follow_up_msg');
        }

        // Persist changes to the database
        $enquiry->save();

        // Redirect back with your custom dynamic flash layout notifications
        return redirect()
            ->route('enquiries.show', $enquiry->id)
            ->with('global', 'Enquiry updated successfully.')
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()
            ->route('enquiries.index')
            ->with('global', 'Enquiry deleted successfully.')
            ->with('type', 'success');
    }
}