<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductionCategory;
use Auth;
use App\Http\Requests\ProductionContentRequest;
use App\Models\ProductionContent;
use App\Handlers\ImageUploadHandler;

class ProductionContentController extends Controller
{
    // 页面授权策略
    public function __construct()
    {
        $this->middleware('auth');// 登录可见
    }

    // 作品列表
    public function index()
    {
        $user = Auth::user();

        return view('production.content.index', compact('user'));
    }

    // 作品内容发布页
    public function create()
    {
        // 作品分类
        $productioncategpry = Auth::user()->productioncategories;

        return view('production.content.create', compact('productioncategpry'));
    }

    // 接收作品内容发布
    public function store(ProductionContentRequest $request, ImageUploadHandler $uploader, ProductionContent $productioncontent)
    {
        // 获取提交数据
        $productioncontent->fill($request->all());

        // 判断是否有文件上传
        if ($request->thumbnail) {
            // 图片上传
            $result = $uploader->save($request->thumbnail, 'thumbnail', Auth::id(), 416);
            if ($result) {
                // 返回图片路径
                $productioncontent->thumbnail = $result['path'];
            }
        }

        $productioncontent->user_id = Auth::id();// 当前登录用户
        $productioncontent->save();// 保存数据

        return redirect()->route('productioncontent.index')->with('success', '作品发布成功~');
    }
}
