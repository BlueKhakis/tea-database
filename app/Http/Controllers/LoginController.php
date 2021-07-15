<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginViewResponse;

class LoginController extends \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController
{
    public function create(Request $request): LoginViewResponse
    {
        $path = parse_url(url()->previous(), PHP_URL_PATH);
        
        if(!in_array($path, [
            '/login',
            '/register'
        ])) {
           session()->put('url.intended', url()->previous());
        }
        return parent::create($request);
    }
}
