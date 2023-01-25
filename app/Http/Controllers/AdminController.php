<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function acceptModerator($id)
    {
        DB::table('users') -> where('id', $id) -> update([
            'status' => 'moderator',
            'request_moderator' => '0',
        ]);

        return redirect() -> route('adminLayout');
    }

    public function removeStatus($id)
    {
        DB::table('users') -> where('id', $id) -> update([
            'status' => 'user',
        ]);

        return redirect() -> route('adminLayout');
    }

    public function needActive($id)
    {
        DB::table('users') -> where('id', $id) -> update([
            'active' => 1,
        ]);

        return redirect() -> route('adminLayout');
    }
    public function needBlock($id)
    {
        DB::table('users') -> where('id', $id) -> update([
            'active' => 0,
        ]);

        return redirect() -> route('adminLayout');
    }

}
