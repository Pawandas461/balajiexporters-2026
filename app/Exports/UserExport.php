<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class UserExport implements FromCollection , WithHeadings ,ShouldAutoSize
{
    use Exportable;
    private $req;

    public function __construct($request)
    {
        $this->req = $request;
    }
  
    public function collection()
    {
        $users = User::orderBy('id','desc')->with(['orders'])->withCount(['orders'])->get(['id','name','email','phone','business_name','profession','country'])->makeHidden(['email_verified_at','email_otp','email_change','phone_verified_at','phone_otp','bill_name', 'bill_phone', 'bill_country', 'bill_state', 'bill_city', 'bill_addr_line1', 'bill_addr_line2', 'bill_landmark', 'bill_pin', 'bill_addr_line3','gst_no','block','created_at','updated_at','orders']);
        if($this->req->from_date || $this->req->to_date)
        {
            $start = Carbon::parse(@$this->req->from_date)->format('Y/m/d');
            $end = Carbon::parse(@$this->req->to_date)->format('Y/m/d');
            $users = User::orderBy('id','desc')->whereDate('created_at', '>=',@$start)->whereDate('created_at','<=',@$end)->with(['orders'])->withCount(['orders'])->get(['id','name','email','phone','business_name','profession','country'])->makeHidden(['email_verified_at','email_otp','email_change','phone_verified_at','phone_otp','bill_name', 'bill_phone', 'bill_country', 'bill_state', 'bill_city', 'bill_addr_line1', 'bill_addr_line2', 'bill_landmark', 'bill_pin', 'bill_addr_line3','gst_no','block','created_at','updated_at','orders']);
        }
        foreach($users as $u){
            $u->foreign_total_spent = $u->orders()->where('currency','US$')->sum('final_amt');
            $u->indian_total_spent = $u->orders()->where('currency','₹')->sum('final_amt');
            $u->order_c = $u->orders_count;
            $u->discount = $u->discount.' '.$u->discount_type;
            unset($u->discount_type);unset($u->orders_count);
        }
        return collect($users);

    }
    public function headings(): array
    {
        return [
            'ID',
            'NAME',
            'EMAIL',
            'PHONE',
            'BUSINESS NAME',
            'PROFESSION',
            'COUNTRY',
            'FIXED DISCOUNT',
            'TOTAL SPENT US$',
            'TOTAL SPENT INR',
            'ORDER COUNT',
        ];
    }
}
