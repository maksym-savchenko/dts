@php
$form = get_field('form_shortcode', 'options');
@endphp

@if($form)
  <div class="popup-wrapper fixed top-0 left-0 right-0 bottom-0 overflow-scroll z-[99]">
    <div class="popup-overlay fixed top-0 left-0 right-0 bottom-0 bg-black opacity-40 z-[99]"></div>
    <div class="popup-content">
      <div class="popup-form z-[99] relative">
        <div class="container">
          <button class="popup-close">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.252247 1.05755C0.0103187 0.815619 0.0103187 0.423375 0.252247 0.181446C0.494176 -0.0604821 0.886419 -0.0604821 1.12835 0.181446L5.07094 4.12404L9.01353 0.181446C9.25546 -0.0604821 9.6477 -0.0604821 9.88963 0.181446C10.1316 0.423375 10.1316 0.815619 9.88963 1.05755L5.94704 5.00014L9.88935 8.94245C10.1313 9.18438 10.1313 9.57662 9.88935 9.81855C9.64743 10.0605 9.25518 10.0605 9.01325 9.81855L5.07094 5.87624L1.12862 9.81855C0.886694 10.0605 0.49445 10.0605 0.252522 9.81855C0.0105934 9.57662 0.0105934 9.18438 0.252522 8.94245L4.19484 5.00014L0.252247 1.05755Z" fill="#FFEE00"/>
            </svg>
          </button>
          {!! do_shortcode($form) !!}
        </div>
      </div>
    </div>
  </div>
@endif
