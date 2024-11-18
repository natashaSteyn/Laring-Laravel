<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveEmployeesController extends Controller
{
	public function index(){
		
		$data = 'Active employees';

		return view('activeEmployees',['data' => $data]);
	}
}
