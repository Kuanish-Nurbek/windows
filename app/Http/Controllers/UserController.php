<?php
namespace App\Http\Controllers;
use App\Http\Controllers\PostController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

use App\Models\Country;

class UserController extends Controller
{
    public function show(Request $request){

        if($request -> has('selectNum')){
            $num = $request -> input('selectNum');

            $users = User::paginate($num);

            $request -> session() -> put('paginateNum',$num);

        } else{

            if($request ->session() -> has('paginateNum')){
                $users = User::paginate($request ->session() -> get('paginateNum'));
            }else {
                $users = User::paginate(10);
            }
        }
        dump(Auth::check());
        // dump(Auth::logout());

        return view('user.paginate',['users'=>$users]);
    }

    public function addUser(Request $request){
        if($request -> has('name') and $request -> has('surname')){
            $name = $request -> input('name');
            $surname = $request -> input('surname');
            if(!ctype_digit($name) and !ctype_digit($surname)){
                DB::table('users') -> insert([
                    'name' => $request -> input('name'),
                    'surname' => $request -> input('surname'),
                ]);
                $textLog = 'пользователь успешно добавлен';
                // $request -> flashExcept('name');
                $request -> flashOnly('name','surname');
                // $request -> flash();

            } else {
                $textLog = 'введите корректные данные';
                // $request -> flashExcept('name');
                $request -> flashOnly('name','surname');
                // $request -> flash();

            }
            // return redirect('/');
        } else {
            $textLog = '';
        }

        return view('user.addUser',['textLog' => $textLog]);
    }

    public function delUser($id){
        DB::table('users') -> where('id',$id) -> delete();
        return redirect('/users/');
    }


    public function renameUser(Request $request, $id){
        dump($id);
        dump($request -> input('new_name'));
        if($request -> has('new_name') and $request -> has('new_surname')){
            DB::table('users') -> where('id',$id) -> update([
                'name'=>$request -> input('new_name'),
                'surname'=>$request -> input('new_surname'),
            ]);
            $text = 'Юзер успещно переименован';
        }else $text = '';

        return view('user.renameUser', ['text'=>$text]);
    }

    public function test(){
        return view('post.test',[
            'text' => 'some text from test for layout2',
        ]);
    }

    public function test2(){
        return redirect()->action([AdminController::class, 'form']);
    }





    public function showAccount(){
        $userData = User::where('email',Auth::user() -> email) -> first();
        return view('myProject.user.account',[
            'userData' => $userData,
        ]);
    }

    public function changeStatus(){
        User::where('email',Auth::user() -> email) -> update([
            'request_moderator' => '1',
        ]);
        return redirect() -> route('showAccount');
    }

    public function cancelChangeStatus(){
        User::where('email',Auth::user() -> email) -> update([
            'request_moderator' => '0',
        ]);
        return redirect() -> route('showAccount');
    }
}
