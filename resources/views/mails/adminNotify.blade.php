@extends('layouts.mail')
@section('head')
    Order Confirmation
@endsection
@section('content')
                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="25" border="0" align="center" width="550" class="container" style="background-color: #ffffff; border: 1px solid #f1f1f1;">
                    <td style="font-size: 28px;line-height: 1.4;font-family: 'Roboto', sans-serif;color: #ffffff;padding: 22px 50px;margin-bottom: 32px;background: #11ca79;text-align: center; font-weight: 400;" class="padding-copy">Order Received
                    </td>
                    <tr>
                      <td style="padding-bottom:0px;">
                        <p>
                          <strong>Order note: </strong> {{$order->order_note}}
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td cellspacing="0" cellpadding="0" style="padding:0px 25px;">
                        <hr>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-top:0px;">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" style="padding: 0;" class="mobile-wrapper">
                              <!-- LEFT COLUMN -->
                                <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                  <tbody>
                                    <tr>
                                      <td style="padding: 0px 0 0px 0;">
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px 0px 0px 0px" class="padding-copy">
                                                  <p>
                                                    <strong>Summay:</strong> <br> 
                                                    Order Id: {{$order->id}} <br>
                                                    Order Date: {{\Carbon\Carbon::parse($order->created_at)->format('F d, Y')}} <br>
                                                    <strong>Contact Details:</strong>
                                                    <br> Email: {{$order->email}}
                                                    <br> Phone: {{$order->phone}}
                                                  </p>
                                              </td>
                                            </tr>                 
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <!-- RIGHT COLUMN -->
                                <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                  <tbody>
                                    <tr>
                                      <td style="padding: 0px 0 0px 0;">
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                          <tbody>
                                            <tr>
                                              <td style=" padding:0px 0px 0px 0px" class="padding-copy">
                                                <p>
                                                  <strong>Delivery Details:</strong> <br> 
                                                  <strong>{{$order->name}}</strong> ({{$order->address_type}}) <br>
                                                  @if(!is_null($order->company)) {{$order->company}} {{(!is_null($order->gstin))? ' GSTIN: '.$order->gstin : null}}<br/> @endif
                                                  {{$order->house_no}},<br>
                                                  {{$order->area}},<br>
                                                  {{$order->city}}, {{$order->region}}<br/>
                                                  {{$order->country}} - {{$order->pin}} <br/>
                                                </p>
                                                </td>
                                              </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                </table>
                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="25" border="0" align="center" width="550" class="container" style="background-color: #ffffff; border: 1px solid #f1f1f1; margin-top:20px;">
                  <tr>
                    <td bgcolor="#fff" style="padding: 0px 0px 0px 0px;" class="logo">
                      <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr style="border-bottom: 1px solid #ddd;">
                            <td bgcolor="#fff" width="100%" align="left">
                              <table bgcolor="#fff" width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td style="padding:0px 30px;" align="left">
                                      <p>
                                        <strong>Item</strong>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" bgcolor="#fff" width="80" align="center">
                              <table bgcolor="#fff" width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="" align="left">
                                      <p><strong>Qty</strong></p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" bgcolor="#fff" width="100" align="right">
                              <table bgcolor="#fff" width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="padding-right:30px;" align="right">
                                      <p>
                                        <strong>Price</strong>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td><br></td>
                          </tr>
                          <!-- product 1 loop -->
                          @foreach($products as $p)
                            <tr>
                                <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                        <!-- LEFT COLUMN -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="25%" align="left" class="responsive-table">
                                            <tbody>
                                            <tr>
                                                <td style="padding: 0px 0 40px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td style=" font-size: 18px; line-height: 1.6;  color: #3c3a3a; padding:0px 0px 0px 30px" class="padding-copy">
                                                        <img src="{{$p->img}}" width="100%" height="auto" style="display: block; color: #666666; font-family: 'Roboto', sans-serif; font-size: 13px; width: 100%px; height: auto;" alt="image" border="0" class="img-max">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- RIGHT COLUMN -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                            <tbody>
                                            <tr>
                                                <td style="padding: 0px 0 20px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td style=" font-size: 11px; line-height: 1.6;  color: #3c3a3a; font-weight: 500; padding:0px 30px 0px 0px" class="padding-copy">
                                                            {{$p->name}}
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </td>
                                <td valign="top" style="">
                                {{$p->qty}}
                                </td>
                                <td valign="top" style="">
                                {{$p->currency}} {{number_format($p->total, 2)}}
                                </td>
                            </tr>
                          @endforeach
                          <!-- /product 1 loop -->
                          <!-- divider -->
                          <tr>
                            <td>
                              <hr style="border: none; border-bottom: 1px solid #ddd;">
                            </td>
                            <td>
                              <hr style="border: none; border-bottom: 1px solid #ddd;">
                            </td>
                            <td>
                              <hr style="border: none; border-bottom: 1px solid #ddd;">
                            </td>
                          </tr>
                          <!-- divider -->
                          <!-- Price Calculation -->
                          <tr>
                            <td>
                              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                      <!-- LEFT COLUMN -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              Subtotal:
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              {{$order->currency}} {{number_format($order->subtotal1, 2)}}
                            </td>
                          </tr>
                          <!-- /Price Calculation -->
                          <!-- Price Calculation -->
                          <tr>
                            <td>
                              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              Total Discount:
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              (-) {{$order->currency}} {{number_format(($order->cart_discount + $order->cart_discount1 + $order->coupon_discount), 2)}}
                            </td>
                          </tr>
                          <!-- /Price Calculation -->
                          <!-- Price Calculation -->
                          @if($order->shipping > 0)
                          <tr>
                            <td>
                              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              Shipping Charges:
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              {{$order->currency}} {{number_format($order->shipping, 2)}}
                            </td>
                          </tr>
                          @endif
                          @if($order->shipping_tax > 0)
                            <tr>
                              <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                  <tbody>
                                    <tr>
                                      <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                      <!-- LEFT COLUMN -->
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                              <td valign="top" style="padding:5px 0px;">
                                GST (on Shipping):
                              </td>
                              <td valign="top" style="padding:5px 0px;">
                                {{$order->currency}} {{number_format($order->shipping_tax, 2)}}
                              </td>
                            </tr>
                          @endif
                          <!-- /Price Calculation -->
                          <tr>
                            <td>
                              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              <b>TOTAL</b>
                            </td>
                            <td valign="top" style="padding:5px 0px;">
                              <b>{{$order->currency}} {{number_format($order->final_amt, 2)}}</b>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <br>
                            </td>
                          </tr>
                          <!-- /Price Calculation -->
                          </tbody>
                        </table>
                      </td>
                    </tr>
                </table>    
@endsection