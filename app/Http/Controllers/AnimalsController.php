<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Plants;

class AnimalsController extends Controller
{
    public function index2() {
        return view('nature/semua', [
            "tittle" => 'hewan',
            "animal" => Animal::all()
        ]);
}
public function show(Animal $animal){
    return view('nature/detailh', [
        "tittle" => 'animal detailh',
        "animal" => $animal
    ]);
}
}
