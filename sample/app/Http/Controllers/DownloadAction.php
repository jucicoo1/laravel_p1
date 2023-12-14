<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use function response;


class DownloadAction extends Controller
{
    public function __invoke(Request $request): BinaryFileResponse
    {
        $response = Response::download('/path/to/file.pdf');
        $response = response()->download(
            'path/to/file.pdf',
            'filename.pdf',
            [
                'content-type'  =>  'application/pdf',
            ]
        );

        return $response;
    }
}
