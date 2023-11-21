<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmers;

class FarmersController extends Controller
{
    public function index3() {
        return view('farmer/all', [
            "tittle" => 'pekerja',
            "farmer" => Farmers::all()
        ]);
    }
    public function show(Farmers $farmer){
        return view('farmer/detail', [
            "tittle" => 'pekerja detail',
            "farmer" => $farmer
        ]);
    }
}
