<?php

namespace App\Http\Controllers;

use App\Mainservice;
use App\Service;
use App\Company;
use App\Company_ar;
use App\Servicedetail;
use App\Servicedetail_ar;
use Illuminate\Http\Request;
use DB;
use Session;
use Route;

class ServiceController extends Controller
{
    public function all_services(){
        $services = DB::table('services')->orderBy('s_id','desc')->get();
        return view('cp.services.all_services',['services'=>$services]);
    }

    public function add_service(){
        return view('cp.services.add_service');
    }

    public function insert_service(Request $request){
        $data = $this->validate(request(), [
            's_title'   => 'required',
            's_type'    => 'required',
        ],[],[
            's_title'   =>'Title',
            's_type'    =>'Type',
        ]);
        $add            = new Service();
        $add->s_title   = request('s_title');
        $add->s_type    = request('s_type');
        $add->save();
        session()->flash('insert_message', 'Record added successfully');
        return redirect('/all/services');
    }

    public function edit_service($s_id){
        $services=DB::table('services')
            ->where('s_id', '=' ,Route::input('s_id'))->get();
        return view('cp.services.edit_service',[
            'services' => $services,
        ]);
    }

    public function update_service(Request $request,$s_id){
        $data = $this->validate(request(), [
            's_title'   => 'required',
            's_type'    => 'required',
        ],[],[
            's_title'   =>'Title',
            's_type'    =>'Type',
        ]);
        DB::table('services')
            ->where('s_id', $s_id)
            ->update([
                's_title' => request('s_title'),
                's_type'  => request('s_type'),
            ]);
        session()->flash('insert_message','Record updated successfully');
        return redirect('/all/services');
    }

    public function delete_service($s_id){
        Service::destroy($s_id);
        return back();
    }


}
