<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function Index(){
    	return User::all();
    }

    public function create(){
    	
    }

    public function store(Request $request){

    	$user=User::create($request->all());
    	return $user;
    	
    }
    public function show($id){

        return User::find($id);
        
    }

   
}

