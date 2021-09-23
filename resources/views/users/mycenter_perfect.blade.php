@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">完善您的资料信息</div>

                <div class="card-body">

                    在继续之前，请先完善您的资料。
                    点击前往,
                    <a class="d-inline" href="{{ route('users.edit', Auth::id() ) }}">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">个人中心</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
