<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
	public function index(){

		$data = 'Name: Natasha';

		return view('PersonalInformation',['data' => $data]);
	}
}
