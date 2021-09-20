@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 编辑资料
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('links.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="form-group mb-4">
            <label for="logo_img-field" class="logo_img-label">上传logo</label>
            <input type="file" name="logo_img" id='logo_img-field' class="form-control-file">

          </div>

          <div class="form-row align-items-center">

            <div class="form-group col-md-6">
              <label for="link-field">链接地址</label>
              <input class="form-control" type="text" maxlength="150" name="link" id="link-field" value="{{ old('link') }}" />
            </div>

          </div>

          <div class="form-group">
            <label for="description-field">简介</label>
            <textarea name="description" id="description-field" maxlength="150" class="form-control" rows="8">{{ old('description') }}</textarea>
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
