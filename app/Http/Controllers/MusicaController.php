<?php
// app/Http/Controllers/MusicaController.php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    public function index()
    {
        $musicas = Musica::all();
        return response()->json($musicas);
    }
}

