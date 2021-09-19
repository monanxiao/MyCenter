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

        <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="form-group mb-4">
            <label for="avatar-field" class="avatar-label">用户头像</label>
            <input type="file" name="avatar" id='avatar-field' class="form-control-file">

            @if($user->avatar)
              <br>
              <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
            @endif
          </div>

          <div class="form-row align-items-center">

            <div class="form-group col-md-6">
              <label for="name-field">用户名</label>
              <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
            </div>

            <div class="form-group col-md-6">
              <label for="email-field">邮箱</label>
              <input type="email" class="form-control" name='email' id="email-field" value="{{ old('email', $user->email) }}" placeholder="如：name@modoushichang.com">
            </div>

          </div>
          <div class="form-row align-items-center">

            <div class="col-md-6">
              <label class="sr-only" for="realname-field">真实姓名</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">真实姓名</div>
                </div>
                <input type="text" class="form-control" name='realname' maxlength="5" id="realname-field" value="{{ old('realname', $user->realname) }}" placeholder="如：墨**">
              </div>
            </div>

            <div class="col-md-6">
              <label class="sr-only" for="occupation-field">职业</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">职业</div>
                </div>
                <input class="form-control" type="text" name="occupation" id="name-field" value="{{ old('occupation', $user->occupation) }}" placeholder="如：软件开发" />
              </div>
            </div>

          </div>


          <div class="form-group">
            <label for="introduction-field">个人简介</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="8">{{ old('introduction', $user->introduction) }}</textarea>
          </div>

          <div class="form-group">
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">接受自由职业</label>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="fredom-field1" name="fredom" value='1' {{ $user->fredom ? 'checked' : '' }} class="custom-control-input">
                <label class="custom-control-label" for="fredom-field1">是</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="fredom-field2" name="fredom" value='0' {{ $user->fredom ? '' : 'checked' }}  class="custom-control-input">
                <label class="custom-control-label" for="fredom-field2">否</label>
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
