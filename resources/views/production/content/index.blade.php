@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

<div class="list-group">

    @if (count($user->productioncontents))
        @foreach ($user->productioncontents as $lv)

          <a href="{{ $lv->name }}" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{ $lv->description }}</h5>
              <small>发布时间 {{ $lv->created_at->diffForHumans() }}</small>
            </div>
            <p class="mb-1">{{ $lv->name }}</p>
            <small>更新于 {{ $lv->updated_at->diffForHumans() }}</small>
          </a>

        @endforeach
    @else
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">暂无数据 ~_~ </h5>
            </div>
          </a>
    @endif
</div>

@stop
