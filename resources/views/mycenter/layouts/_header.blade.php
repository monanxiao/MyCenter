@auth
  <header id="main-header">
      <div class="clearfix">
          <div class="float-left">
              <a href="{{ route('home') }}" class="clearfix" id="main-link">
                  <div class="float-left">
                    <i class="lni lni-user"></i>
                  </div>
                  <div class="float-left">
                    <div id="my-name" class="overflow-h-ellipsis">{{ env('APP_NAME') }}</div>
                  </div>
              </a>
          </div>
          <div class="float-right">
            <a href="{{ route('users.edit', $user->id) }}" class="clearfix" id="main-link">
              <span id="video-btn" class="know-more-section-btn">
                <span class="pointer">
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                </span>
              </span>
            </a>
          </div>
      </div>
  </header>
@endauth
