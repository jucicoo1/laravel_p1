<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Access\Gate;


final class RetrieveAction extends Controller
{
    private $gate;

    public function __construct(Gate $gate)
    {
        $this->gate = $gate;
    }

    public function __invoke(string $id)
    {
        if($this->gate->allows('user-access', $id)){
            
        }
    }
}
