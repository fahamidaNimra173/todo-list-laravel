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
        $todos = Todo::latest()->paginate(5);
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
     * Store a newly created resource in storage.
     */
    public function updateStatus($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update(['complete' => !$todo->complete]);
        return redirect()->route('home')->with('success', 'Task is completed');
    }
    public function updateTodo($id, Request $request)
    {
        $todo = Todo::findOrFail($id);
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'

        ]);

        if ($request->hasFile('image')) {
            $image = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $image);
            $todo->image = $image; //this means save the image file into the image column of this todo row
        }

        $todo->name = $request->name;
        $todo->price = $request->price;

        $todo->save();
        return redirect()->route('home')->with('success', 'Todo updated successfully');
    }
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        return view('update', compact('todo'));
    }

    /**
     * Display the specified resource.
     */
    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('home')->with('success', 'Your todo is successfully delated');
    }

    /**
     * Show the form for editing the specified resource.
     */
}
