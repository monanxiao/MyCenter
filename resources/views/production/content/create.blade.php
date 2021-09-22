@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 作品内容
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('productioncontent.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="form-group mb-4">
            <label for="thumbnail-field" class="thumbnail-label">作品小图</label>
            <input type="file" name="thumbnail" id='thumbnail-field' class="form-control-file">
          </div>

          <div class="form-group">

                <select class="form-control" name="production_categorie_id" required>
                  <option value="" hidden disabled {{ 0 ? '' : 'selected' }}>请选择分类</option>

                    @foreach ($productioncategpry as $value)
                      <option value="{{ $value->id }}" {{ 0 == $value->id ? 'selected' : '' }}>
                        {{ $value->name }}
                      </option>
                    @endforeach
                </select>
          </div>


          <div class="form-group">
              <label for="link-field">名称</label>
              <input class="form-control" type="text" maxlength="150" name="name" id="link-field" value="{{ old('name') }}" />
          </div>

          <div class="form-group">
              <label for="link-field">链接地址</label>
              <input class="form-control" type="text" maxlength="150" name="link" id="link-field" value="{{ old('link') }}" />
          </div>


          <div class="form-group">
            <label for="describe-field">描述</label>
            <textarea name="describe" id="describe-field" maxlength="150" class="form-control" rows="8">{{ old('describe') }}</textarea>
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
