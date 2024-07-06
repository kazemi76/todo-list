<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::latest()->paginate(3);
        return view('todos.index', compact('todos'));
    }
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function create()
    {
        return view('todos.create');

    }
    public function store(Request $request)
    {

         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        Todo::create([

            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash()->success('تسک با موفقیت ایجاد شد');
        return redirect()->route('todos.index');

    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }



    public function update(Request $request,Todo $todo)
    {

         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        $todo->update([

            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash()->success('تسک با موفقیت ویرایش شد');
        return redirect()->route('todos.index');
        // return redirect()->back();


    }

    public function delete(Todo $todo){
        $todo->delete();
        flash()->success('تسک با موفقیت حذف شد');
        return redirect()->route('todos.index');
    }
    public function complete(Todo $todo){
        $todo->update([

            'complated'=>1
        ]);
        flash()->success('تسک به وضعیت انجام شده تغییر کرد');
        return redirect()->route('todos.index');
    }
}
