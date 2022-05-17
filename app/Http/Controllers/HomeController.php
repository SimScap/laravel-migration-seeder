<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trains = train::paginate(20);
        $data = [
            "train" => new Train(),
            "trains" => $trains,
        ];
        return view('trains.index', $data);
    }
    public function show($id)
    {
        $singleTrain = Train::findOrFail($id);
        $data = [
            "train" => $singleTrain,
        ];
        return view('trains.show', $data);
    }
}
