<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Todo::all();
    }

    // all completed
    public function completed(){
        $todos = Todo::where('completed', 1)->get();
        return response($todos, 200);
    }

    // undone
    public function undone(){
        $todos = Todo::where('completed', 0)->get();
        return response($todos, 200);
    }



    // create a new todo item
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' =>'required|string',
            'completed' => 'required|boolean'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->completed = $request->completed;
        $todo->save();

        return response($todo, 200);
    }



    // Update a todo item

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'title' =>'required|string',
            'completed' => 'required|boolean'
        ]);

        $todo->title = $request->title;
        $todo->completed = $request->completed;
        $todo->save();

        return response($todo, 200);
    }


    // delete a todo item
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response('Todo Item Deleted', 200);

    }
}
