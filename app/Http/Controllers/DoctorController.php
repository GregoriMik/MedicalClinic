<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){

        $doctorsList = array(
            array("id"=>1,"firstname"=>"Adam","lastname"=>"Oustin","email"=>"adam@oustin.com","phone"=>"123123123","address"=>"Adres 1","status"=>"dostępny"),
            array("id"=>2,"firstname"=>"John","lastname"=>"Smith","email"=>"john@smith.com","phone"=>"123123123","address"=>"Adres 2","status"=>"dostępny"),
            array("id"=>3,"firstname"=>"Bob","lastname"=>"Carson","email"=>"bob@carson.com","phone"=>"123123123","address"=>"Adres 3","status"=>"niedostępny")
        );
        return view('doctors.list',["doctorsList"=>$doctorsList,
                                    "footerYear"=>date("Y"),
                                    "title"=>"- Moduł lekarzy"]);
    }
}
