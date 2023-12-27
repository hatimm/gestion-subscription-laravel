<?php

namespace App\Http\Controllers;

use App\Mail\SendNotification;
use App\Models\client;
use App\Models\membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membership = client::all();
        if(Auth::check()){
        return view('memberships')->with([
            'membership' => $membership
        ]);
        }else{
            return view('blog');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function Mail($id){
        $membership = client::where('id',$id)->first();
        return view('contact')->with([
            'membership' => $membership
        ]);
    }
    public function Send(Request $request){
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);
        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            'content' => $request->content,
        ];
        Mail::send('email-template',$data,
        function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
        });
        return view('adminhome');
    }
    
    
}