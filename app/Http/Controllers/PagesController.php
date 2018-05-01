<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex(){
      return "This is PagesController";
    }
    public function getShow($id=null){
      //return view('pages' $id) ;
      return 'Welcome to Page ' . $id;
    }
    public function getHomepage(){
      return view('menu.homepage');
    }
    public function getCustomer(){
      return view('menu.customers');
    }
    public function getWork(){
      return view('menu.work');
    }
    // public function getPages(){
    //   return view('practice.pages');
    // }
    // public function getPasing(){
    //   $title = 'Laravel 5 Fundamental'; $subtitle = 'From basic to expert';
    //   return view('practice.passing',
    //   ['title' => $title, 'subtitle' => $subtitle]);
    // }

}
