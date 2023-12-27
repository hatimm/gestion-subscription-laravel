<?php

namespace App\Http\Controllers;

use App\Models\client as ModelsClient;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheminController extends Controller
{
    public function home(){
        return view('blog');
    }
    public function users(){
        if(Auth::check()){
        return view('users');
        }else{
            return view('blog');
        }
    }
    public function index(){
        $membership = ModelsClient::all();
        return view('membershipscrud')->with([
            'membership' => $membership
        ]);
        
    }
    public function destroy($id)
    {
        $membership = ModelsClient::find($id);
        $membership->delete();
        return redirect('memberships')->with([
            'success' => 'Membership deleted successfully'
        ]);
    }
    public function price(Request $request){
        if(Auth::check()){
        $price = $request->input('price');
        $pack =  $request->input('pack');
        //dd($price);
        return view('payment', ['price' => $price , 'pack' =>$pack ]);
        }else{
            return view('auth.login');
        }
    }
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('userdataedit')->with([
            'user' => $user
        ]);
    }
    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');
        $user->update($request->except('_token','_method'));
        return redirect('clientauthtable')->with([
            'success' => 'User updated successfully'
        ]);
    }
    public function delete($id)
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return redirect('login')->with([
            'success' => 'User deleted successfully'
        ]);
    }
    public function paymentstatus($name){
        $payment = payment::where('name','=',$name)->get();
        return view('paymentstatus')->with([
            'payment' => $payment
        ]);
    }
    public function paymentedit($id){
        $payment = payment::where('id',$id)->first();
        return view('paymentedit')->with([
            'payment' => $payment
        ]);
    }
    public function paymentupdate(Request $request, $id){
        $payment = payment::where('id',$id)->first();
        $payment->name=$request->get('name');
        $payment->email=$request->get('email');
        $payment->cvc=$request->get('cvc');
        $payment->starting_date=$request->get('starting_date');
        $payment->ending_date=$request->get('ending_date');
        $payment->cvv=$request->get('cvv');
        $payment->mm=$request->get('mm');
        $payment->yyy=$request->get('yyy');
        $payment->update($request->except('_token','_method'));
        return redirect('paymentstatus')->with([
            'success' => 'payment updated successfully'
        ]);
    }
    public function paymentterminate($id){
        $payment = payment::where('id', $id)->update(array('status' => '0'));
        return redirect('home');
    }
    public function bill($name){
        $payment = payment::where('name',$name)->first();
        return view('bill')->with([
            'payment' => $payment
        ]);
    }
}
