<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Tempay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(){
        return view('frontend.pay.index');
    }

    public function make_payment(){

        $formData = [
            'email' => request('email'),
            'amount' => request('amount') * 100,
            'callback_url' => route('callback-pay'),
        ];

        $pay = json_decode($this->initiate_payment($formData));
        if($pay){
            if($pay->status){
                $this->storeTemPay(request('index'), $pay->data->reference);
                return redirect($pay->data->authorization_url);
            }
            else{
                return back()->withErrors($pay->message);
            }
        }
        else{
            return back()->withErrors("OOPS, please check your internet connection");
        }
    }

    public function initiate_payment($formData){
        $url="https://api.paystack.co/transaction/initialize";
        $fields_string = http_build_query($formData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "cache-Control: no-cache"

        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;

    }

    public function payment_callback()
    {
        $response = json_decode($this->verify_payment(request('reference')));
        if ($response) {
            if ($response->status) {
                $data = $response->data;
                $this->storePayment($data);
                return redirect()->route('home');
            } else {
                return back()->withError($response->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }
    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return  $response;
    }

    public function storePayment($data){
        $index = Tempay::where('reference', $data->reference)->first();
        Payment::create([
            'payment_id' => $data->id,
            'status' => $data->status,
            'reference' => $data->reference,
            'amount' => $data->amount,
            'receipt' => $data->receipt_number,
            'phone' => $data->customer->phone,
            'index' => $index->index,
        ]);
        // $this->deletePay($index);
    }
    public function storeTemPay($index, $ref){
        Tempay::create([
            'index' => $index,
            'reference' => $ref
        ]);
    }
    public function deletePay($data){
        $data->delete();
    }

}
