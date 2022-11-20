<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $cards=Article::all();
        
        return view('index',['cards' => $cards]);
    }
    public function more($id)
    {
        $card=Article::findOrFail($id);
        
        return view('more',['card' => $card]);
    }
}
