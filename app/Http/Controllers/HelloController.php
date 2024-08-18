<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;


class HelloController extends Controller
{
    public function hello(string $name)
    {
        return view('hello', ['name' => $name]);
    }

    public function helloActor(Actor $actor)
    {

        return view('hello', ['name' => $actor->first_name]);
    }

    public function helloActorId(int $id)
    {
        $actor = Actor::find($id);
        return view('hello', ['name' => $actor->first_name]);
    }
}
