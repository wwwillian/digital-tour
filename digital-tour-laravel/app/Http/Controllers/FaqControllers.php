<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqControllers extends Controller
{
    public function mostarFaq(){
      return view ('faq');
    }
}
