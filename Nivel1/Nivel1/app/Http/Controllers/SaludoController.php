<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar($nombre)
    {
        return "Hello, $nombre!!!";
    }
}
