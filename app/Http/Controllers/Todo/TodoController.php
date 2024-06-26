<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function Index(){
        return view('home');
    }
    public function Insert(Request $request){
        $todo = session()->get('todo', []);
        $id = count($todo) > 0 ? end($todo)['id'] : 0;
        $id ++;

        $newtodo = [
            'id' => $id,
            'title' => $request->post('title'),
            'description' => $request->post('description')
        ];

        $todo[] = $newtodo;
        session(['todo' => $todo]);
        return redirect()->route('Home');

    }public function Delete(Request $request){
        $id = $request->post('id');
        $todo = session()->get('todo', []);
        foreach ($todo as $key => $value) {
            if($value['id'] == $id){
                unset($todo[$key]);
                $todo = array_values($todo);
                break;
            }
        }
        session(['todo' => $todo]);
        return redirect()->route('Home');
    }
}
