<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($nummer){

        return view('artikel', [
            'id' => $nummer

]);
    }
}