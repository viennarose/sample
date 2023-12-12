<?php

namespace App\Http\Controllers;
use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function trainee()
    {
        $trainee = Trainee::orderBy('id')->get();

        return view('trainee',['trainee' => $trainee]);
    }
}
