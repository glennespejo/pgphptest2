<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct() {
    
    }

    public function index() {

    }

    public function show(Request $request, $id) {
    	dd($id);
    }
}