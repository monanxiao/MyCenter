<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

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
    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
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

        return redirect()->route('mycenter.show',$user->id)->with('success', '资料修改成功！');
    }
}
