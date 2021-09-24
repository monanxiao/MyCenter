<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServieRequest;
use Auth;
use App\Models\Service;

class ServicesController extends Controller
{
    // 页面授权策略
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 服务项目列表
    public function index()
    {
        $user = Auth::user();

        return view('services.index', compact('user'));
    }

    // 发布服务项目
    public function create()
    {
        return view('services.create');
    }

    // 接收服务项目参数
    public function store(ServieRequest $request, Service $service)
    {
        // 获取表单实例
        $service->fill($request->all());
        $service->user_id = Auth::id();// 当前用户ID
        $service->save();// 数据入库

        return redirect()->route('services.index')->with('success', '服务项目发布成功！');
    }
}
