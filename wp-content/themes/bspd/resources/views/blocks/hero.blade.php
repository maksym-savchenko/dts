@if($image || $title || $description || $link)
  <div class="{{ $block->classes }} xsm:min-h-[790px] py-[150px] relative flex justify-center items-center before:content-[''] before:h-full before:w-full before:absolute before:left-0 before:top-0 before:bg-custom-gradient before:z-[1]">
    @if($image)
      <img src="{{  $image['url'] }}" alt="hero-image" width="{{ $image['sizes']['1536x1536-width'] }}" height="{{ $image['sizes']['1536x1536-height'] }}"
      class="absolute h-full w-full l-0 top-0 object-cover">
    @endif
    @if($title || $description || $link)
        <div class="container min-h-full text-center">
          <div class="relative z-[1]">
            @if($title)
              <h1 class="lg:text-66 lg:leading-[1.52] sm:text-40 text-28 leading:-[1.2] uppercase font-extrabold mb-15">{{ $title }}</h1>
            @endif
            @if($description)
              <div class="font-medium lg:text-22 lg:leading-[1.46] leading-[1.3] -tracking-[0.5px] sm:text-18 text-14 opacity-80 [&_br]:max-sm:hidden">
                {!! $description !!}
              </div>
            @endif
              @if($link)
                <a href="{{ $link['url'] }}" class="btn btn--yellow lg:mt-45 mt-20" title="{{ $link['title'] ?: '' }}" {{ ['target'] ? 'target="' . $link['target'] . '"' : '' }}>{{ $link['title'] ?: '' }}</a>
              @endif
          </div>
        </div>
    @endif
  </div>
@endif
