<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyCentersController extends Controller
{
    // 用户主页
    public function show(User $user)
    {

        return view('mycenter.home', compact('user'));
    }
}
