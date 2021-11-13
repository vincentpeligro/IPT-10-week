<?php

namespace App\Http\Controllers;

use App\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{




    public function index()
    {
        $merchandises = Merchandise::all();

        return view('pages.merchandises', ['merchandises' => $merchandises]);
    }


}
