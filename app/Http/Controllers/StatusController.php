<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Stringable;

class StatusController extends Controller
{
    public function store(StatusRequest $request)
    {
        // $request->validate([
        //     'body' => ['required'],
        // ]);

        Auth::user()->statuses()->create(
            [
                'body' => $request->body,
                'identifier' => Str::random(32),

            ])
        ;
        return back();
    }
}
