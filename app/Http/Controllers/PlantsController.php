<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\Plants;

class PlantsController extends Controller
{
    public function index1() {
        return view('nature/all', [
            "tittle" => 'tumbuhan',
            "plant" => Plant::all()
        ]);
    }
    public function show(Plant $plant){
        return view('nature/detail', [
            "tittle" => 'plant detail',
            "plant" => $plant
        ]);
    }
}
