<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFctory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(Request $request): ViewFctory {
        $user = User::find($request->get('id'));

        return view('user.index', [
            'user'  =>  $user
        ]);
    }

    public function store(Request $request):RedirectResponse {
        
    }

    public function register(Request $request){
        $name = $request->get('name');
        $age = $request->get('age');
        // ... continues
    }
}
