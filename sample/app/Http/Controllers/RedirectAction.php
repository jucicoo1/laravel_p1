<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\RedirectResponse;
use function response;
use function redirect;


final class RedirectAction extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $response = Response::redirectTo('/');
        $response = redirect('/');
        $response = redirect('/')->withInput($request->all())->with('error', 'validation error');

        return $response;
    }
}
