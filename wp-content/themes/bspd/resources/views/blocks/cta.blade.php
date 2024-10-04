@if($title || $description || $link)
  <div class="{{ $block->classes }} md:mt-100 md:mt82 mt-50 mb-41" {{ isset($block->block->anchor) ? 'id="' . $block->block->anchor . '"' : '' }}>
    <div class="container">
      <div class="rounded-10 bg-emerald-950 text-center lg:py-77 md:py-50 py-40 px-20">
        @if($title)
          <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32  text-26 uppercase font-extrabold text-yellow-550 mb-15">{{$title}}</h2>
        @endif
        @if($description)
          <div class="text-center [&_br]:max-sm:hidden">{!! $description !!}</div>
        @endif
          @if($link)
            <a href="{{ $link['url'] }}" class="btn btn--white lg:mt-45 mt-20" title="{{ $link['title'] ?: '' }}" {{ ['target'] ? 'target="' . $link['target'] . '"' : '' }}>{{ $link['title'] ?: '' }}</a>
          @endif
      </div>
    </div>
  </div>
@endif
