@extends('layouts.mail')
@section('head')
    {{$heading}}
@endsection
@section('content')
    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="25" border="0" align="center" width="550" class="container" style="background-color: #ffffff; border: 1px solid #f1f1f1;">
        <tr>
            <td>
                <p>
                    <strong>Sender Name</strong> :  {{$c_name}}<br>
                    <strong>Email</strong> :  {{$c_email}}<br>
                    <strong>Phone</strong> :  {{$phone}}<br>
                    <strong>Product</strong> :  {{$product}}<br>
                    <strong>Message</strong> :  {{$c_message}}
                </p>
            </td>
        </tr>
    </table>
@endsection