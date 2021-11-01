<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $following = Auth::user()->follows->pluck('id');

        // Status::where digunakan untuk menampilkan status kita sendiri
        // $statuses = Status::where('user_id', Auth::user()->id)->get();
        // dapat jug menggunakan 
        // $statuses = Auth::user()->statuses;

        // menggunkan whereIn untuk menampilkan status milik orang yg kita follow
        $statuses = Status::whereIn('user_id', $following)
            ->orWhere('user_id', Auth::user()->id)
            ->latest()
            ->get();


        return view('timeline', compact('statuses'));
    }
}
