<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureEmailIsVerified
{
    /**
     * 过滤请求，中间件 检验用户邮箱验证情况
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 1. 如果用户已登录
        // 2. 并且还未认证 Email
        // 3. 并且访问的不是 email 验证相关 URL 或者退出的 URL。
        if ($request->user() && // 获取当前登录用户
            ! $request->user()->hasVerifiedEmail() && // 用户邮箱未认证
            ! $request->is('email/*', 'logout'))// 当前访问 URL 不是 email 或者 退出
        {
            // 根据客户端返回对应的内容
            return $request->expectsJson()
                        ? abort(403, 'Your email address is not verified.') // 抛出异常
                        : redirect()->route('verification.notice'); // 跳转到验证通知界面
        }

        return $next($request);
    }
}
