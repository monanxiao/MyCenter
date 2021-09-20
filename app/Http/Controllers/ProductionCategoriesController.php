<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductionCategory;
use App\Http\Requests\ProductionCategoriesRequest;
use Auth;

class ProductionCategoriesController extends Controller
{
    // 作品分类列表
    public function index()
    {
        $user = Auth::user();

        return view('production.categories.index', compact('user'));
    }

    // 添加分类
    public function create()
    {
        return view('production.categories.create');
    }

    // 接收分类数据
    public function store(ProductionCategoriesRequest $request, ProductionCategory $productioncategories)
    {
        $productioncategories->fill($request->all());// 实例化一个实例
        $productioncategories->user_id = Auth::id();// 当前登录用户
        $productioncategories->save();// 数据入库

        return redirect()->route('productioncategories.index')->with('success', '作品分类添加成功~');
    }
}
