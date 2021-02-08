<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function table(){
        $messages = DB::table('contacts')->get();
        return view('admin', compact('messages'));
    }
}
