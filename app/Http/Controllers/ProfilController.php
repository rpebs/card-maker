<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\profil;


class ProfilController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'gambar.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000',
            'tags' => 'required',
        ]);
        if ($request->hasfile('gambar')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('gambar')->getClientOriginalName());
            $request->file('gambar')->move(public_path('images'), $filename);
    	    $tags = explode(",", $request->tags);
            $post =   profil::create(
                    [          
                        'nama' => $request->nama,
                        'pekerjaan' => $request->pekerjaan,
                        'deskripsi' => $request->deskripsi,    
                        'no_hp' => $request->no_hp,
                        'instagram' => $request->instagram,
                        'facebook' => $request->facebook,
                        'github' => $request->github,
                        'google' => $request->google,
                        'linkedin' => $request->linkedin,         
                        'gambar' =>$filename,
                        'bg_color' => $request->bg_color,
                        'card_color' => $request->card_color,
                        'tags' => $request->tags,
                    ]
                );
            $post->tag($tags);
           return redirect('/card');
        }else{
            echo'Gagal';
        }

       
    }
     public function showcard()
        {
          $profil = profil::orderBy('created_at', 'desc')->first();
          $blue = "blue";
            return view('card', ['profil' => $profil, 'color'=>$blue]);
        }
}
