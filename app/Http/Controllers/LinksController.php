<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Http\Requests\LinkRequest;
use App\Handlers\ImageUploadHandler;
use Auth;

class LinksController extends Controller
{

    // 创建页
    public function create()
    {
        return view('links.create_edit');
    }

    // 接受提交数据
    public function store(LinkRequest $request, ImageUploadHandler $uploader, Link $links)
    {

        $links->fill($request->all()) ;// 获取所有表单数据

        // 判断是否有文件上传
        if ($request->logo_img) {

             // 图片上传
            $result = $uploader->save($request->logo_img, 'logo_img', Auth::id(), 416);
            if ($result) {
                // 返回图片路径
                $links->logo_img = $result['path'];
            }
        }

        // 当前登录用户
        $links->user_id = Auth::id();
        // 数据入库
        $links->save();

        return redirect()->route('users.show', Auth::id())->with('success', '友链添加成功!');

    }
}
