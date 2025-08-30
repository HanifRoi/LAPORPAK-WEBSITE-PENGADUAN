<?php 

namespace App\Repositories;

use App\Interface\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface{
    public function login(array $credentials){
        return Auth::attempt($credentials);
    }
}