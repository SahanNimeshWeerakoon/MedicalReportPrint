<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'username' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'position' => ['required'],
            'name' => ['required', 'string', 'max:190'],
            'contact' => ['required', 'string', 'max:190'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'position' => $data['position'],
            'name' => $data['name'],
            'contact' => $data['contact'],
        ]);
    }
}
