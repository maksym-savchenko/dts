@if($title || $image || $text || $link)
  <div class="{{ $block->classes }} md:my-[110px] my-55" {{ isset($block->block->anchor) ? 'id="' . $block->block->anchor . '"' : '' }}>
    <div class="container">
      <div class="flex flex-col-reverse items-center lg:gap-70 gap-30 md:flex-row">
        <div class="md:w-1/2 aspect-577/515 overflow-hidden rounded-5 max-w-[577px]">
          @if($image)
            <img class="w-full h-full object-cover" src="{{ $image['url'] }}" alt="column-image" width="{{ $image['sizes']['large-width'] }}" height="{{ $image['sizes']['large-height'] }}">
          @endif
        </div>
        @if($title || $text || $link )
          <div class="md:w-1/2">
            @if($title)
              <h2 class="leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 mb-30 uppercase font-extrabold text-yellow-550">{{ $title }}</h2>
            @endif
            @if($text)
              <div>{!! $text !!}</div>
            @endif
              @if($link)
                <a href="{{ $link['url'] }}" class="btn btn--yellow mt-15" title="{{ $link['title'] ?: '' }}" {{ ['target'] ? 'target="' . $link['target'] . '"' : '' }}>{{ $link['title'] ?: '' }}</a>
              @endif
          </div>
        @endif
      </div>
    </div>
  </div>
@endif
