<div class="window" id="clients">
  <div class="window-header">
    <div class="window-title">友链</div>
    <div class="clearfix float-right window-header-btns">
      <div class="float-left pointer window-header-btn window-expand-btn">
        <i class="lni lni-frame-expand"></i>
      </div>
      <div class="float-left pointer window-header-btn window-close-btn">
        <a href="#">
          <i class="las la-times"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="window-body backdrop" data-simplebar>
    <div class="window-content">
      <div id="clients-content">
        <div id="clients-section-heading">友情链接/合作伙伴</div>
        <div class="clearfix" id="clients-body">

          @foreach($links as $lv)

            <div class="float-left client">
              <a href="{{ $lv->link }}" target="_blank" class="client-logo">
                @if($lv->logo_img)
                  <img src="{{ $lv->logo_img }}" alt="{{ $lv->description }}">
                @else
                  <span>{{ $lv->description }}</span>
                @endif
                <div class="client-display-link">{{ $lv->description }}</div>
              </a>
            </div>

          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
