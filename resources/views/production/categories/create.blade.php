@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 作品分类
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('productioncategories.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="form-row align-items-center">

            <div class="form-group col-md-6">
              <label for="link-field">名称</label>
              <input class="form-control" type="text" maxlength="150" name="name" id="link-field" value="{{ old('name') }}" />
            </div>

          </div>

          <div class="form-group">
            <label for="description-field">描述</label>
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
