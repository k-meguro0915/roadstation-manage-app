<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CsvController extends Controller
{
  //
  public function index(){
    return view('importCsv');
  }
  public function confirm(Request $request){
    return view('confirmCsv');
  }
}
