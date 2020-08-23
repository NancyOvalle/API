<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;

class CustomersController extends Controller
{
    public function Index(){
    	return Customer::all();
    }

    public function create(){
    	
    }

    public function store(Request $request){

    	$cliente=Customer::create($request->all());
    	return $cliente;
    	
    }

   public function show($customers){
          
           
        $cliente = User::
        select('users.names', 'users.lastnames', 'users.email','users.phone','users.residence_address','customers.user_availability_id')
        ->join('customers', 'users.id' , '=', 'customers.users_id')
        ->where('customers.user_availability_id', '=', 2)
        ->get();

       return $cliente;

    } 
    
}


