<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PagesController extends Controller
{

    public function accueil()
{
    $articles = Product::latest()->take(8)->get();

    return view('pages.accueil', compact('articles'));
}

    public function apropos (){
        return view('pages.apropos');
    }

    public function contact (){
        return view('pages.contact');
    }

    public function login (){
        return view('pages.login');
    }

    public function articles (){
        $articles = Product::get();
        return view('pages.articles')->with('articles', $articles);
    }


    public function show($id){


        $article = Product::where('id', $id)->first();

        return view ('pages.show')->with('article', $article);

    }
}
