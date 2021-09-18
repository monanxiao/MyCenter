<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    // 用户首页
    public function index()
    {
        // 当前登录用户
        $user = Auth::user();

        return view('users.home', compact('user'));
    }

    // 用户数据
    public function show()
    {

    }

    // 资料编辑页面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // 接收资料更新数据
    public function update(UserRequest $request, User $user)
    {
        // 更新用户数据
        $user->update($request->all());

        return redirect()->route('users.show',$user->id)->with('success', '资料修改成功！');
    }
}
