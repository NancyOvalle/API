<?php

namespace App\Http\Controllers;
use App\Academic_title;
use App\User;

use Illuminate\Http\Request;

class Academic_TitlesController extends Controller
{
    public function Index(){
    	return Academic_title::all();
    }

    public function create(){
    	
    }

    public function store(Request $request){

    	$cliente=Academic_title::create($request->all());
    	return $cliente;
    	
    }

   public function show($Academic_Titles){
                     
        $cliente = User::
        select('users.names','users.lastnames', 'users.email','users.phone','users.residence_address','customers.academic_titles_id')
        ->join('customers', 'users.id' , '=', 'customers.users_id')
        ->where('customers.academic_titles_id', '=', 2)
        ->get();

       return $cliente;


    }
}
