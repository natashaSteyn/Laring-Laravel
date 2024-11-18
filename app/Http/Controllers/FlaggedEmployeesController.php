<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlaggedEmployeesController extends Controller
{
	public function index(){

		$employees = 'Mnr Koos Koekemoer ,Mev Sara Graaf';

		return view('flaggedEmployees',['data' => $employees]);
	}
}
