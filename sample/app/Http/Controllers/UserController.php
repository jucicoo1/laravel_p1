<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFctory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function index(Request $request): ViewFctory {
        $user = User::find($request->get('id'));

        return view('user.index', [
            'user'  =>  $user
        ]);
    }

    // public function store(Request $request):RedirectResponse {
        
    // }

    public function register(Request $request){
        $rules = [
            'name'  =>  ['required', 'max:20', 'ascii_alpha'],
            'email'  =>  ['required', 'email', 'max:255'],
        ];

        $inputs = $request->all();
        
        Validator::extend('ascii_alpha', function($attribute, $value, $parameters){
            return preg_match('/^[a-zA-Z]+$/', $value);
        });

        $validator = Validator::make($inputs, $rules);

        if($validator->fails()){

        }

        $name = $request->input('name');
    }
}
