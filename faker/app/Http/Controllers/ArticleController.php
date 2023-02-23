<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
   public function show(){
   $articles = DB::select('select title from articles');
   return view('articles',$articles);


//    echo '<pre>';
//    print_r ($articles);
//    echo '<pre>';

   }
//    public function show(){
//     return view('articles',[
//         'articles' => DB::table('articles')->paginate(15)
//     ]);
// }

}


