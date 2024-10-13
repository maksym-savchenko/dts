@if($title || $description || $items)
  <div class="{{ $block->classes }} md:my-[110px] my-55" {{ isset($block->block->anchor) ? 'id=' . $block->block->anchor : '' }}>
    <div class="container">
      @if($title)
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32  text-26 uppercase font-extrabold text-yellow-550 lg:mb-64 md:mb-32 mb-20">{{$title}}</h2>
      @endif
      @if($description)
        <div class="text-center [&_br]:max-sm:hidden">{!! $description !!}</div>
      @endif
        @if($items)
          <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-30 lg:mt-60 md:mt-40 mt-20">
            @foreach ($items as $item)
              @if($item['title'] || $item['$description']) @endif
              <div class="p-40 bg-emerald-950 rounded-10">
                @if($item['title'])
                  <h3 class="font-bold text-20 text-neutral-100 mb-20">{{ $item['title'] }}</h3>
                @endif
                @if( $item['description'])
                  <div class="opacity-70">
                    {!! $item['description'] !!}
                  </div>
                @endif
              </div>
            @endforeach
          </div>
        @endif
    </div>
  </div>
@endif
