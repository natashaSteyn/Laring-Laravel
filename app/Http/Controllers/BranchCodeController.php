<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchCodeController extends Controller
{
	public function index(){
		$data = 'Branchcode';

		return view('branchCode',['data' => $data]);
	}
}
