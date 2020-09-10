<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
        return redirect('https://revistas.anchieta.br/index.php/RevistaUbiquidade/index');
    }
}
