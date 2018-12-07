<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
        public function home(){

            return view('pages.home');
        }

        public function whoWeAre(){
            return view('pages.whoWeAre');
        }

        public function faq(){
            return view('pages.faq');
        }

        public function contact() {
            return view('pages.contact');
        }

        public function packages(){
            return view('pages.packages');
        }
}
