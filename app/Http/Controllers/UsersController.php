<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{
    // 中间件
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    // 用户首页
    public function index()
    {
        return view('users.home');
    }

    // 用户数据
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // 资料编辑页面
    public function edit(User $user)
    {
        // 授权策略 验证是否有权限
        $this->authorize('edit', $user);

        return view('users.edit', compact('user'));
    }

    // 接收资料更新数据
    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
        // 授权策略 验证是否有权限
        $this->authorize('update', $user);

        // 获取所有提交数据
        $data = $request->all();

        // 验证图片是否存在
        if ($request->avatar) {
            // 图片上传
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 416);
            if ($result) {
                // 返回图片路径
                $data['avatar'] = $result['path'];
            }
        }

        // 更新用户数据
        $user->update($data);

        return redirect()->route('mycenter.show',$user->name)->with('success', '资料修改成功！');
    }

    // 完善资料提醒
    public function perfect()
    {
        $user = Auth::user();// 当前登录用户

        if ( ! is_null($user->realname) && // 假如用户名不为空
             ! is_null($user->occupation) && // 假如职位不为空
             ! is_null($user->introduction)) // 假如简介不为空
        {
            return redirect()->route('users.show', Auth::id())->with('资料已完善！');
        }

        return view('users.mycenter_perfect');
    }
}
