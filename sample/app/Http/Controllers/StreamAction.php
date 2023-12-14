<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;


class StreamAction extends Controller
{
    public function __invoke(Request $request): StreamedResponse
    {

        // return $response;
    }
}
