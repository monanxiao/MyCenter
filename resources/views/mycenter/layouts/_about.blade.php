<div class="window" id="about">
    <div class="window-header">
        <div class="window-title">自我介绍</div>
        <div class="clearfix float-right window-header-btns">
            <div class="float-left pointer window-header-btn window-expand-btn">
                <i class="lni lni-frame-expand"></i>
            </div>
            <div class="float-left pointer window-header-btn window-close-btn">
                <a href="#"><i class="las la-times"></i></a>
            </div>
        </div>
    </div>
    <div class="window-body backdrop" data-simplebar>
    <div class="window-content">
        <div id="my-photo">
            <img src="{{ $user->avatar }}" alt="{{ $user->realname }}">
        </div>
        <div id="intro-line"> {{ $user->realname }} </div>
        <div id="intro-secondary-line"> {{ $user->occupation }} </div>
        <p id="about-me-lines"> {{ $user->introduction }} </p>
        {{-- <div id="doc-link">
            <a href="#" download>
                <i class="lni lni-download"></i>
                <span>下载简历</span>
            </a>
        </div> --}}
        @if($user->fredom)
          <div id="freelance">
              <span>我可以从事自由职业。 <a href="#contact">联系我</a></span>
          </div>
        @endif
    </div>
    </div>
</div>
