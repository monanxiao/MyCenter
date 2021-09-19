<?php

namespace App\Observers;

use App\Models\User;
use App\Handlers\SlugTranslateHandler;

class UserObserver
{
    // 用户创建时
    public function creating(User $user)
    {
        // 翻译名字，填充后缀
        $user->slug = app(SlugTranslateHandler::class)->translate($user->name);
        // 填充头像
        $user->avatar = config('app.url') . '/uploads/images/avatars/default/' . mt_rand(1,1614) . '.jpg';

    }

    // 保存前监听
    public function saving(User $user)
    {
        // 赋值 excerpt 调用辅助方法 make_excerpt
        $user->excerpt = make_excerpt($user->introduction);
    }

    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
