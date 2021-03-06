@extends('mycenter.layouts.app')

@section('content')

    @include('mycenter.layouts._about', ['user' => $user])

    @include('mycenter.layouts._skills')

    @include('mycenter.layouts._education')

    @include('mycenter.layouts._experience')

    @include('mycenter.layouts._services', ['serveices' => $user->serveices])

    @include('mycenter.layouts._blog')

    @include('mycenter.layouts._portfolio', ['productioncategories' => $user->productioncategories, 'productioncontent' => $user->productioncontents])

    @include('mycenter.layouts._clients', ['links' => $user->links])

    @include('mycenter.layouts._testimonials')

    @include('mycenter.layouts._contact')

@stop
