<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SuperAdminController extends Controller
{
     public function add_admin()
    {

        return view('SuperAdmin.add_admin');
		
		
    }
	
	public function save_admin(Request $request)
	{
		
//print_r($request['username']);die;
			//alert()->success('Congrats!', 'You made a Lesson');	
				
		 /* $users= new User;        
    $users->name = $data['username'];
    $users->email= 'testing';
    $users->password= bcrypt($data['password']);
    $users->save();   */
		
	}
}
