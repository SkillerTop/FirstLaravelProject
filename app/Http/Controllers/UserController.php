<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);
    }

    public function getUsers()
    {
        $users = DB::table('users')->get();
        return response()->json($users);
    }

    public function updateUser($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => 'Jane Doe']);
    }

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }
}
