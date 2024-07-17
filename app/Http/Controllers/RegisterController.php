<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = 'operator';

        $max = DB::table('users')->max('id') + 1;
        DB::statement("ALTER TABLE users AUTO_INCREMENT =  $max");

        User::create($input);

        return redirect()
            // To the route named `login`
            ->route('auth.login')
            ->with($request->only('namapendek', 'password'));
    }

    public function gantipasswd(Request $request)
    {

        $userData = User::where('namapendek', $request->namapendek)->first();
        $userData->update([
            'password' => bcrypt($request->passwordbaru)
        ]);

        return redirect()
            ->route('auth.login')
            ->with($request->only('namapendek', 'password'));
    }
}
