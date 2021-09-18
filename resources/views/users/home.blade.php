@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group mb-4">
            <label for="" class="avatar-label">用户头像</label>
            <input type="file" name="avatar" class="form-control-file">

            @if($user->avatar)
              <br>
              <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
            @endif
          </div>

          <div class="form-group">
            <label for="name-field">用户名</label>
            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
          </div>

          <div class="form-row align-items-center">

            <div class="col-md-6">
              <label class="sr-only" for="inlineFormInputGroup">真实姓名</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">真实姓名</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="如：墨**">
              </div>
            </div>

            <div class="col-md-6">
              <label class="sr-only" for="email-field">邮箱</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">邮箱</div>
                </div>
                <input type="email" class="form-control" id="email-field" value="{{ old('email', $user->email) }}" placeholder="如：name@modoushichang.com">
              </div>
            </div>

          </div>


          <div class="form-row align-items-center">

            <div class="col-md-6">
              <label class="sr-only" for="inlineFormInputGroup">职业</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">职业</div>
                </div>
                <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" placeholder="如：软件开发" />
              </div>
            </div>

            <div class="col-md-6">

              <div class="form-group custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">接受自由职业</label>
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="introduction-field">个人简介</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
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
