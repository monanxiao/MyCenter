<div class="window" id="services">
    <div class="window-header">
        <div class="window-title">服务项目</div>
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
            <div id="services-body">
                <div class="clearfix" id="services-body-inner">

                  @foreach($serveices as $value)

                    <div class="float-left service">
                        <div class="service-body">
                            <div class="service-icon">
                                <i class="lni lni-code-alt"></i>
                            </div>
                            <div class="service-name">{{ $value->title }}</div>
                            <div class="service-description line-clamp">{{ $value->describe }}</div>
                        </div>
                    </div>

                  @endforeach

                </div>
            </div>
            <div id="service-plans">
                <div id="plans-heading">选择你需要的服务</div>
                <div class="clearfix" id="service-plans-body">

                    @foreach($serveices as $value)

                      <div class="float-left service-plan">
                          <div class="service-plan-body">
                              <div class="service-plan-name">{{ $value->title }}</div>
                              <div class="service-plan-price">{{ $value->price }} 元 / {{ $value->ytd == 'month' ? '月' : '年' }}</div>
                              <div class="service-plan-features">

                                @foreach($value->guarantee as $v)
                                 <div class="plan-feature">
                                    {{ $v }}
                                 </div>
                                @endforeach

                              </div>
                              <a class="plan-link gradient-{{ $value->id }}" href="javascript:;">订购<i class="lni lni-chevron-right"></i></a>
                          </div>
                      </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
