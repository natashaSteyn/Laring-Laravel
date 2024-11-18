<?php

namespace App\Http\Controllers;
use App\Models\invoice;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
		// $data = 'Natasha';
		$data = invoice::all();
		// $data =Invoice::first();
		// $data =Invoice::where('title','My name is Natasha')->get();

		return view('invoices',['data' => $data]);
	}

	public function create(){
		invoice::create([
			'title' => 'Natasha Steyn'
		]);
		return view('invoice-create',['msg' => 'Successfully Created']);
	}
}
