<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
<div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      <img class='logo' src="/img/logo-2.png" alt="MyCenter">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">个人中心</a>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">编辑资料</a>
              <a class="dropdown-item" href="{{ route('links.create') }}">友链增加</a>
              <a class="dropdown-item" href="{{ route('productioncategories.create') }}">作品分类增加</a>
              <a class="dropdown-item" href="{{ route('productioncontent.create') }}">作品内容发布</a>
              <a class="dropdown-item" href="{{ route('services.create') }}">服务项目发布</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logout" href="#">
                  <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                  </form>
              </a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link mt-1 mr-3 font-weight-bold" target="_blank" href="{{ route('mycenter.show', Auth::user()->name) }}">
            <i class="fa fa-home"></i>
          </a>
        </li>
        @endguest
    </ul>
    </div>
</div>
</nav>
