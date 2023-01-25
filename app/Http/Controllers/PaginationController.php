<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;

class PaginationController extends Controller
{
    public function show(){
        $users = User::paginate(10);
        return view('user.paginate',['users' => $users]);
    }

    public function showHistories(Request $request){
        // dd(route('showHistories'));


        if(url()->current() == route('changeSelect')){
            $num = $request -> input('select-item');
            session() -> put('selectedNum',$num);
            return redirect(route('showHistories'));
        }else {
            if(session('selectedNum') != null){
                $histories = History::where('active',1)->paginate(session('selectedNum'));
                return view('myProject.history.allHistory',['histories' => $histories]);
            }else{
                $histories = History::paginate(5);
                return view('myProject.history.allHistory',['histories' => $histories]);
            }

        }

    }
}
