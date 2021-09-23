<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyCenterPerfect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        // 1. 验证是否登录
        // 2. 验证是否完善必填信息
        // 3. 当前访问的URL
        if ($user &&
            is_null($user->realname) && // 假如用户名为空
            is_null($user->occupation) && // 假如职位为空
            is_null($user->introduction) && // 假如简介为空
            ! $request->is('users/mycenter/perfect', 'logout', "users/*")
        ){

            // 根据客户端返回对应的内容
            return $request->expectsJson()
                            ? abort(403, '请补充资料！') // 抛出异常
                            : redirect()->route('users.mycenterperfect'); // 跳转到验证通知界面
        }

        return $next($request);
    }
}
