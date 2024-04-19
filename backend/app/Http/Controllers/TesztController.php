<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use App\Models\teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function tesztKategoria()
    {
        $tesztekKategoria = response()->json(teszt::with('kategoria')->select('id', 'kerdes', 'v1', 'v2', 'v3', 'v4', 'helyes', 'kategoriaId')->get());
        return $tesztekKategoria;
    }

    public function tesztek()
    {
        return teszt::select('id', 'kerdes', 'v1', 'v2', 'v3', 'v4', 'helyes', 'kategoriaId')->get();
    }
}
