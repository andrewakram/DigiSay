<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use DB;
use Route;

class ClientController extends Controller
{
    public function all_clients(){
        $clients = Client::orderBy('c_id','desc')->get();
        return view('cp.clients.all_clients',['clients'=>$clients]);
    }

    public function add_client(Request $request){
        return view('cp.clients.add_client');
    }

    public function insert_client(Request $request){
        $data = $this->validate(request(),
            [
                'c_title'               =>'required',
                'c_status'              =>'required',
                'c_description'         =>'required',
                'c_contactStartDate'    =>'required',
                'c_contactEndDate'      =>'required',
                'a'        =>'required',
            ],[],
            [
                'c_title'               =>'Title',
                'c_status'              =>'Status',
                'c_description'         =>'Description',
                'c_contactStartDate'    =>'Contact Start Date',
                'c_contactEndDate'      =>'Contact End Date',
                'c_contactPhone'        =>'Contact Phone',
            ]
        );
        $add                        = new Client();
        $add->c_title               = request('c_title');
        $add->c_status              = request('c_status');
        $add->c_description         = request('c_description');
        $add->c_contactStartDate    = request('c_contactStartDate');
        $add->c_contactEndDate      = request('c_contactEndDate');
        $add->c_contactPhone        = request('c_contactPhone');
        $add->save();
        return redirect('/all/clients');
    }

    public function edit_client($c_id){
        $clients = Client::orderBy('c_id','desc')
            ->where('c_id', '=' ,Route::input('c_id'))->get();
        return view('cp.clients.edit_client',["clients"=>$clients]);
    }

    public function update_client(Request $request,$c_id){
        $data = $this->validate(request(),
            [
                'c_title'               =>'required',
                'c_status'              =>'required',
                'c_description'         =>'required',
                'c_contactStartDate'    =>'required',
                'c_contactEndDate'      =>'required',
                'c_contactPhone'        =>'required',
            ],[],
            [
                'c_title'               =>'Title',
                'c_status'              =>'Status',
                'c_description'         =>'Description',
                'c_contactStartDate'    =>'Contact Start Date',
                'c_contactEndDate'      =>'Contact End Date',
                'c_contactPhone'        =>'Contact Phone',
            ]
        );
        DB::table('clients')
            ->where('c_id', $c_id)
            ->update([
                'c_title'               => request('c_title'),
                'c_status'              => request('c_status'),
                'c_description'         => request('c_description'),
                'c_contactStartDate'    => request('c_contactStartDate'),
                'c_contactEndDate'      => request('c_contactEndDate'),
                'c_contactPhone'        => request('c_contactPhone'),
            ]);
        session()->flash('insert_message', 'Record updated successfully');
        return redirect('/all/clients');
    }

    public function delete_client($c_id){
        Client::destroy($c_id);
        return back();
    }
}
