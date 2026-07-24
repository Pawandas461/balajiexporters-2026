<?php

namespace App\Exports;

use App\Models\OrderPending;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class PendingOrdersExport implements FromCollection , WithHeadings ,ShouldAutoSize
{
    use Exportable;
    private $req;

    public function __construct($request)
    {
        $this->req = $request;
    }
    public function collection()
    {
        $users = OrderPending::orderBy('order_pendings.id','desc')->whereNull('corresponding_order_id')->join('order_pending_products', 'order_pendings.id', '=', 'order_pending_products.order_pending_id')->get(['order_pendings.id','order_pendings.currency','delivery_partner','total_qty','cart_discount','cart_discount1','coupon_discount','shipping','shipping_tax','shop_tax','final_amt','order_pendings.total_weight as order_weight','email','order_pendings.name AS user_name','phone','company','house_no','area','city','country','region','pin','gstin','apartment_name','landmark','address_type','bill_email','bill_name','bill_phone','bill_company','bill_house_no','bill_area','bill_city','bill_country','bill_region','bill_pin','bill_gstin','bill_apartment_name','bill_landmark','bill_address_type','order_note','order_pending_products.name','order_pending_products.size','order_pending_products.sku','order_pending_products.currency','order_pending_products.offer_price','order_pending_products.piece','order_pending_products.total_weight','order_pending_products.weight_unit','order_pending_products.qty','order_pending_products.total','order_pending_products.discounted_total'])->makeHidden(['user_id','subtotal1','subtotal2','subtotal3','online_order_no','invoice_no','payment_remarks','payment_type','corresponding_order_id','payment_detail','payment_link','order_pendings.created_at','order_pendings.updated_at','order_pending_products.order_pending_id','order_pending_products.product_id', 'order_pending_products.stock_id','order_pending_products.size_id','order_pending_products.url','order_pending_products.img','order_pending_products.regular_price','order_pending_products.weight','order_pending_products.tax','order_pending_products.discount','order_pending_products.info']);
        if($this->req->from_date || $this->req->to_date)
        {
            $start = Carbon::parse(@$this->req->from_date)->format('Y/m/d');
            $end = Carbon::parse(@$this->req->to_date)->format('Y/m/d');
            $users = OrderPending::orderBy('order_pendings.id','desc')->whereNull('corresponding_order_id')->whereDate('order_pendings.created_at', '>=',@$start)->whereDate('order_pendings.created_at','<=',@$end)->join('order_pending_products', 'order_pendings.id', '=', 'order_pending_products.order_pending_id')->get(['order_pendings.id','order_pendings.currency','delivery_partner','total_qty','cart_discount','cart_discount1','coupon_discount','shipping','shipping_tax','shop_tax','final_amt','order_pendings.total_weight as order_weight','email','order_pendings.name AS user_name','phone','company','house_no','area','city','country','region','pin','gstin','apartment_name','landmark','address_type','bill_email','bill_name','bill_phone','bill_company','bill_house_no','bill_area','bill_city','bill_country','bill_region','bill_pin','bill_gstin','bill_apartment_name','bill_landmark','bill_address_type','order_note','order_pending_products.name','order_pending_products.size','order_pending_products.sku','order_pending_products.currency','order_pending_products.offer_price','order_pending_products.piece','order_pending_products.total_weight','order_pending_products.weight_unit','order_pending_products.qty','order_pending_products.total','order_pending_products.discounted_total'])->makeHidden(['user_id','subtotal1','subtotal2','subtotal3','online_order_no','invoice_no','payment_remarks','payment_type','corresponding_order_id','payment_detail','payment_link','order_pendings.created_at','order_pendings.updated_at','order_pending_products.order_pending_id','order_pending_products.product_id', 'order_pending_products.stock_id','order_pending_products.size_id','order_pending_products.url','order_pending_products.img','order_pending_products.regular_price','order_pending_products.weight','order_pending_products.tax','order_pending_products.discount','order_pending_products.info']);
        }
        return collect($users);

    }
    public function headings(): array
    {
        return [
            'ID',
            'CURRENCY',
            'DELIVERY PARTNER',
            'TOTAL QTY',
            'CART DISCOUNT',
            'CART DISCOUNT2',
            'COUPON DISCOUNT',
            'SHIPPING',
            'TAX ON SHIPPING',
            'TAX ON FINAL AMT',
            'FINAL AMT',
            'ORDER WEIGHT',
            'EMAIL',
            'NAME',
            'PHONE',
            'COMPANY',
            'HOUSE NO',
            'AREA',
            'CITY',
            'COUNTRY',
            'REGION',
            'PIN',
            'GSTIN',
            'APARTMENT',
            'LANDMARK',
            'ADDRESS TYPE',
            'BILL EMAIL',
            'BILL NAME',
            'BILL PHONE',
            'BILL COMPANY',
            'BILL HOUSE NO',
            'BILL AREA',
            'BILL CITY',
            'BILL COUNTRY',
            'BILL REGION',
            'BILL PIN',
            'BILL GSTIN',
            'BILL APARTMENT',
            'BILL LANDMARK',
            'BILL ADDRESS TYPE',
            'ORDER NOTE',
            'PRODUCT NAME',
            'PRODUCT SIZE',
            'PRODUCT SKU',
            'OFFER PRICE',
            'PIECES',
            'PRODUCT WEIGHT',
            'PRODUCT WEIGHT UNIT',
            'PRODUCT QTY',
            'PRODUCT TOTAL AMT',
            'PRODUCT DISCOUNTED TOTAL'
        ];
    }
}
