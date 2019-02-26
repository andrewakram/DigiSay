<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Service;
use App\Clientservice;
use DB;
use Route;

class ClientserviceController extends Controller
{
    public function manage_services($c_id){
        $clients = Client::orderBy('c_id','desc')
            ->where('clients.c_id',$c_id)
            ->get();
        $services = Service::orderBy('s_id','asc')
            ->get();
        $clientservices=DB::table('clientservices')
            ->join('clients','clients.c_id','clientservices.client_id')
            ->get();
        return view('cp.action.clientservices',['clients'=>$clients,
            "services"=>$services,"clientservices"=>$clientservices
            ]);
    }

    public function update_clientservice(Request $request,$c_id){
        $servicess=DB::table('clientservices')->where('client_id','=',$c_id)->get();
        foreach ($servicess as $s) {
            Clientservice::where('service_id', $s->service_id)->forceDelete();
        }
        $services = Service::orderBy('s_id','asc')
            ->get();
        foreach ($services as $service) {
            $ser=$service->s_id;
            if(isset($_POST["$ser"])){
                $x=$_POST["$ser"];
                $link = "l"."$x";
                $description = "des"."$x";
                $addin1                 = new Clientservice();
                $addin1->client_id      = $c_id ;
                $addin1->service_id     = $ser ;
                $addin1->link           = request("$link") ;
                $addin1->description    = request("$description") ;
                $addin1->save();
            }
        }
        return redirect('/all/clients');
    }
}
