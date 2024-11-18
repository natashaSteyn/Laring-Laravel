<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpyeesController extends Controller
{
	public function index(){

		$data = 'Employees';

		return view('employee',['data' => $data]);
	}
}
