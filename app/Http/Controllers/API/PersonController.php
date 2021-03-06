<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function show(User $person)
    {
        return response()->json(User::find($person->id), 200);
    }
}
