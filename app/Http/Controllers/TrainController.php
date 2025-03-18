<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>=', Carbon::now())
            ->orderBy('departure_time', 'asc')
            ->get();

        return view('index', compact('trains'));
    }
}
