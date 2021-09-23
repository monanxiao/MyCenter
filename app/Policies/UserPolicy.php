<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // 编辑界面权限验证 自动注入 当前登录用户
    public function edit(User $currenuser, User $user)
    {
        return $currenuser->id === $user->id;
    }

    // 数据提交权限验证 自动注入 当前登录用户
    public function update(User $currenuser, User $user)
    {
        return $currenuser->id === $user->id;
    }
}
