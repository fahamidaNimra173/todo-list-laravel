<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('home', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function postTodo(Request  $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'

        ]);
        $image = null;
        if ($request->hasFile('image')) {
            $image = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $image);
        }
        $todo = new Todo;
        $todo->name = $request->name;
        $todo->price = $request->price;
        $todo->image = $image;
        $todo->save();
        return redirect()->route('home')->with('success', 'Todo created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
}
