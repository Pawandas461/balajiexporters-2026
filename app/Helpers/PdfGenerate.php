<?php
     
namespace App\Helpers;

use App\Models\Order;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PdfGenerate {
    static function generate($id)
    {
        $order = Order::where('id',$id)->with('orderedProducts')->first();
        if($order){
            $order->formatted_date = Carbon::parse($order->created_at)->format('d M Y');
            $order->formattedDateString = Carbon::parse($order->created_at)->toFormattedDateString();
            $order->all_discount = $order->cart_discount + $order->cart_discount1 + $order->coupon_discount;
            
            $order->show_currency = "INR"; $order->c_code = "in";
            $number = $order->final_amt;

            $decimal = round($number - ($no = floor($number)), 2) * 100;
            $hundred = null;
            $digits_length = strlen($no);
            $i = 0;
            $str = array();
            $words = array(0 => '', 1 => 'One', 2 => 'Two',
                3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
                7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
                10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
                13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
                16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
                19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
                40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
                70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
            $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
            while( $i < $digits_length ) {
                $divider = ($i == 2) ? 10 : 100;
                $number = floor($no % $divider);
                $no = floor($no / $divider);
                $i += $divider == 10 ? 1 : 2;
                if ($number) {
                    $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                    $hundred = ($counter == 1 && $str[0]) ? ' ' : null;
                    $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
                } else $str[] = null;
            }
            $Rupees = implode('', array_reverse($str));
            $paise = ($decimal) ? " And " . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
            if($order->final_amt == 0) $order->price_word =  'Zero Rupees';
            else $order->price_word =  ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;

            return $pdf = PDF::loadView('orders.demo2',['order' => $order]);
        }
        return 0;
    }
}