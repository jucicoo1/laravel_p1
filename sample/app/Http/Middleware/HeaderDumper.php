<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;
use function info;
use function strval;
use Symfony\Component\HttpFoundation\Response;

class HeaderDumper
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->logger->info(
            'request', [
                'header'    =>  strval($request->headers)
            ]
        );

        $response = $next($request);
        $this->logger->info(
            'response', [
                'header'    =>  strval($response->headers)
            ]
        );
        return $next($request);
    }
}
