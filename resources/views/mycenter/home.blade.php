@extends('mycenter.layouts.app')

@section('content')

    @include('mycenter.layouts._about', ['user' => $user])

    @include('mycenter.layouts._skills')

    @include('mycenter.layouts._education')

    @include('mycenter.layouts._experience')

    @include('mycenter.layouts._services')

    @include('mycenter.layouts._blog')

    @include('mycenter.layouts._portfolio')

    @include('mycenter.layouts._clients', ['links' => $user->links])

    @include('mycenter.layouts._testimonials')

    @include('mycenter.layouts._contact')

@stop
