@if(count($sliders)>0)
<div id="thmg-slider-slideshow" class="thmg-slider-slideshow">
    <div class="container">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            @foreach ($sliders as $key => $slider)
            <li data-transition='slideleft' data-slotamount='7' data-masterspeed='1000' data-thumb='{{ asset('assets/images/sliders/'.$slider->photo) }}'><img src='{{ asset('assets/images/sliders/'.$slider->photo) }}'  data-bgposition='center top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='180'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Fresh Food</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='260'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Simply <span>delicious</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='480'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='380'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>We supply highly quality organic products</div>
              </div>
            </li>
            @endforeach
           <!--
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='@asset('img/slide-img3.jpg')'><img src='@asset('img/slide-img3.jpg')'  data-bgposition='center top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='180'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='260'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span>100%</span> Organic</div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='480'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='380'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            
            </li>-->
          </ul>
        </div>
      </div>
    </div>
</div>
@endif