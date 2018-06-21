<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $todos = \App\Todo::all();
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( request(), [
            'Title:' => 'required',
            'Body:'  =>  'required|min:2',
            'Due:'   =>  'required'
        ]);

        $todo = new Todo;
        $todo->name = request('Title:');
        $todo->body = request('Body:');
        $todo->due = request('Due:');

        $todo->save();

        return redirect('/todo')->with('success', 'Todo Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( request(), [
            'Title:' => 'required',
            'Body:'  =>  'required|min:2',
            'Due:'   =>  'required'
        ]);

        $todo = Todo::find($id);
        $todo->name = request('Title:');
        $todo->body = request('Body:');
        $todo->due = request('Due:');

        $todo->save();

        return redirect('/todo/'. $todo->id)->with('success', 'Todo Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/todo')->with('success', 'Todo Deleted!');
    }
}
