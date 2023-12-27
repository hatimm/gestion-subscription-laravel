<?php

namespace App\Http\Controllers;

use App\Mail\SendNotification;
use App\Models\client as ModelsClient;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = ModelsClient::all();
        return view('clients')->with([
            'client' => $client
        ]);
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
        $client = ModelsClient::all();
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cvc' => 'required',
            'cvv' => 'required',
            'mm' => 'required',
            'yyy' => 'required',
        ]);
        ModelsClient::create($request->except('_token'));
        return redirect('clienthome')->with([
            'success' => 'Client added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = ModelsClient::where('id',$id)->first();
        return view('clientshow')->with([
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = ModelsClient::where('id',$id)->first();
        return view('clientedit')->with([
            'client' => $client
        ]);
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
        $client = ModelsClient::where('id',$id)->first();
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $client->name=$request->get('name');
        $client->email=$request->get('email');
        $client->phone=$request->get('phone');
        $client->update($request->except('_token','_method'));
        return redirect('clients')->with([
            'success' => 'Client updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = ModelsClient::find($id);
        $client->delete();
        return redirect('clients')->with([
            'success' => 'Client deleted successfully'
        ]);
    }
    
    
}
