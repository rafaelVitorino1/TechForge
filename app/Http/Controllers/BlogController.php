<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class BlogController extends Controller
{
    
    public function index()
    {
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }


}
