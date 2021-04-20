<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
     public function about () {
        return view('about');
 }
    


        public function list () {
         $list = array(
         'List (1) Title : Pride and Prejudice    
         ISBN 13: 9780061964367    
          Book category : Romantic   
        no of pages : 567 ',
         'List (2)  Title : Physics for Men: The Science Behind Being a Guys
             ISBN 13: 9781440512797         
          Book category : Textbook   
          No of page : 1000
        '
         );
        return view('list', compact('list'));
         }
} 