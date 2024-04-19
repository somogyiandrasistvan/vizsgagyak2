<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function kategoria(){
        return kategoria::select('id', 'kategorianev')->get();
    }
}
