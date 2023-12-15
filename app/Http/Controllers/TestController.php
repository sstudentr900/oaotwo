<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TestController extends Controller
{
  public function forEveryone () {
    return '不要API';
  }

  public function requiresAuth () {
    // return '必要API';
    return response()->json('必要API');
  }
}
