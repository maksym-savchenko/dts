@if((count($items) > 0 && isset($items[0]['answer']) && isset($items[0]['question'])) || $title)
  <div class="{{ $block->classes }} md:my-[110px] my-55" {{ isset($block->block->anchor) ? 'id=' . $block->block->anchor : '' }}>
    <div class="container">
      @if($title)
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 uppercase font-extrabold text-yellow-550 lg:mb-64 mb-32">{{ $title }}</h2>
      @endif
      <div class="accordion flex flex-col gap-20">
        @foreach ($items as $item)
          @if($item['question'] && ($item['answer'] || $item['link']))
            <div class="accordion-item">
              <p class="accordion-item__title lg:text-20 text-18">{{ $item['question'] }}<span class="pointer-events-none"></span></p>
              <div class="accordion-item__text text-neutral-100 text-opacity-70">
                <div class="h-8"></div>
                @if($item['answer'])
                  {!! $item['answer'] !!}
                @endif
                @if($item['link'])
                  <a href="{{ $item['link']['url'] }}" class="btn btn--yellow mt-20" title="{{ $item['link']['title'] ?: '' }}" {{ ['target'] ? 'target="' . $item['link']['target'] . '"' : '' }}>{{ $item['link']['title'] ?: '' }}</a>
                @endif
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
@endif
