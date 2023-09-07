<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function create_product(){
		return view('products.create');
	}
	public function create(Request $request){
		$name = $request->name;
		$description = $request->description;

		$insertion = BlogCategory::select('id', 'slug', 'name')->latest()->get();
	}
}
