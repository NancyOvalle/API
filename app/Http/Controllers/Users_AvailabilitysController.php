<?php

namespace App\Http\Controllers;
use App\User_Availabilit;

use Illuminate\Http\Request;

class Users_AvailabilitysController extends Controller
{
        public function Index(){
    	return User_Availabilit::all();
    }

    public function create(){
    	
    }

    public function store(Request $request){

    	$user=User_Availabilit::create($request->all());
    	return $user;
    	
    }
    public function show($id){

        return User_Availabilit::find($id);
        
    }

}
