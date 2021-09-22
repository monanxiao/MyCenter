@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 服务项目
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('services.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="form-group">
              <label for="title-field">名称</label>
              <input class="form-control" type="text" maxlength="150" name="title" id="title-field" value="{{ old('title') }}" />
          </div>

          <div class="form-group">
            <label for="describe-field">描述</label>
            <textarea name="describe" id="describe-field" maxlength="150" class="form-control" rows="8">{{ old('describe') }}</textarea>
          </div>

          <div class="form-row align-items-center">

            <div class="form-group col-md-6">
              <select name='ytd' id="ytd" class="form-control">
                <option selected disabled >请选择计费模式</option>
                <option value="year">每年</option>
                <option value="month">每月</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label class="sr-only" for="price-field">价格</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">￥</div>
                </div>
                <input type="number"  class="form-control" name='price' id="price-field" placeholder="0.00">
                <div class="input-group-append">
                  <span class="input-group-text">元</span>
                </div>
              </div>
            </div>

          </div>

          <div class="form-row align-items-center">

            <div class="form-group col-md-2">

              <div class="custom-control custom-switch">
                <input type="checkbox" name='guarantee[]' value="发布上线"  class="custom-control-input" id="guarantee1">
                <label class="custom-control-label" for="guarantee1">发布上线</label>
              </div>

            </div>

            <div class="form-group col-md-2">
              <div class="custom-control custom-switch">
                <input type="checkbox" name='guarantee[]' value="常规维护" class="custom-control-input" id="guarantee2">
                <label class="custom-control-label" for="guarantee2">常规维护</label>
              </div>
            </div>

            <div class="form-group col-md-2">
              <div class="custom-control custom-switch">
                <input type="checkbox" name='guarantee[]' value="技术培训" class="custom-control-input" id="guarantee3">
                <label class="custom-control-label" for="guarantee3">技术培训</label>
              </div>
            </div>
            <div class="form-group col-md-2">
              <div class="custom-control custom-switch">
                <input type="checkbox" name='guarantee[]' value="域名解析" class="custom-control-input" id="guarantee5">
                <label class="custom-control-label" for="guarantee5">域名解析</label>
              </div>
            </div>
            <div class="form-group col-md-2">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name='guarantee[]' value="数据备份" class="custom-control-input" id="guarantee6">
                  <label class="custom-control-label" for="guarantee6">数据备份</label>
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name='guarantee[]' value="免费更新" class="custom-control-input" id="guarantee7">
                  <label class="custom-control-label" for="guarantee7">免费更新</label>
                </div>
            </div>

          </div>

          <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" name='guarantee[]' value="BUG终身免费修复" class="custom-control-input" id="guarantee8">
                <label class="custom-control-label" for="guarantee8">BUG终身免费修复</label>
             </div>
          </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">保存</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
