<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class articleController extends Controller
{
    public function card()
    {
        $cards=Article::all();
        
        return view('admin.card',['cards' => $cards]);
    }
    public function form()
    {
        return view('admin.form');
    }
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'text'=>'required',
            'pic'=>'required|image',
        ]);
        $data['user_id'] = Auth::user()->id;
        
        $immg = Storage::putFile('public/prods', $data['pic']);
        $data['pic']=str_replace('public/','storage/',$immg);
        
        Article::create($data);
        return redirect(url("/card"));
    }

    public function updateForm($idProf)
    {
        $prod=Article::findOrFail($idProf);
        return view('admin.formU',['prod' => $prod]);
    }

    public function update($idProf,Request $request)
    {
        $data=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'text'=>'required',
            'pic'=>'image',
        ]);
        $data['user_id'] = Auth::user()->id;
        $prod=Article::findOrFail($idProf);
        
        $immg=$prod->pic;
        if($request->hasFile('pic'))
        {
            $immg=Storage::putFile('public/prods',$data['pic']);
            $data['pic']=str_replace('public/','storage/',$immg);
        }
        Article::where('id', $idProf)->update($data);
        return redirect(url('/card'));

    }

    public function delete($idProf)
    {
        $prods = Article::findOrFail($idProf);
        $imgD=str_replace('storage/','public/',$prods->pic);
        Storage::delete($imgD);
        $prods->delete();
        return redirect(url('/dashboard'));
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
