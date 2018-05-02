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
      return view('statework.work');
    }
    public function getWork2(){
      return view('statework.work2');
    }
    public function getWork3(){
      return view('statework.work3');
    }
    public function getWork4(){
      return view('statework.work4');
    }
    public function getWork5(){
      return view('statwork.work5');
    }
    public function getWork6(){
      return view('statwork.work6');
    }
    public function getTotal(){
      return view('statwork.total');
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
