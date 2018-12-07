<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMethod;
use DB;

class PaymentController extends Controller
{
    public function paymentMethods(){
        $paymentmethod = PaymentMethod::all();
        return view('admin.payment.paymentmethod', compact('paymentmethod'));
    }

    public function paymentNew(){
        return view('admin.payment.new');
    }

    public function postNew(Request $request){
        $name = $request->input('name');
        DB::table('payment_methods')->insert(
            ['name' => $name]
        );
        return redirect('dashboard')->with(['success'=> 'Payment Added Successfully']);
    }

    public function edit($id){
        $payment = PaymentMethod::find($id);
        return view('admin.payment.edit',compact('payment'));
    }

    public function update(Request $request, $id){
        $name = $request->input('name');
        DB::table('payment_methods')
            ->where('id', $id)
            ->update(['name' => $name]);
        return redirect('payment_methods')->with(['success'=> 'Payment Updated Successfully']);
    }

    public function deletePayment($id){
        $payment= PaymentMethod::find($id);
        $payment->delete();
        return redirect('/payment_methods');
    }
}
