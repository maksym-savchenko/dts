@if($title || $desciption || $items)
  <div class="{{ $block->classes }} md:mt-110 md:mt-85 mt-55 mb-41" {{ isset($block->block->anchor) ? 'id=' . $block->block->anchor : '' }}>
    <div class="container">
      @if($title)
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 uppercase font-extrabold text-yellow-550 lg:mb-35 mb-32">{{ $title }}</h2>
      @endif
        @if($description)
          <div class="text-center [&_br]:max-sm:hidden">{!! $description !!}</div>
        @endif
        @if ($items)
          <div class="mt-35 p-30 bg-emerald-950 rounded-10">
            @if($sub_title)
              <h3 class="text-20 uppercase text-yellow-550 font-bold mb-25">{{ $sub_title }}</h3>
            @endif
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-40 gap-y-15 vacancies-wrapper">
              @foreach($items as $index => $item)
                <div class="bg-green-950 relative group rounded-10 py-10 px-14 flex justify-between gap-10 items-center cursor-pointer vacancies-item {{ $index > 17 ? 'hidden' : '' }}">
                  <span class="inline-flex sm:w-auto w-full lg:text-20 text-18">{{ $item['vacancy'] }}</span>
                  @if($button)
                    <a href="{{ $button['url'] }}" class="btn btn--yellow btn--small opacity-0 group-hover:opacity-100 transition-opacity max-sm:hidden flex-shrink-0" title="{{ $button['title'] ?: '' }}" data-vacancy="{{ $item['vacancy'] }}" {{ ['target'] ? 'target="' . $button['target'] . '"' : '' }}>{{ $button['title'] ?: '' }}</a>
                    <a href="{{ $button['url'] }}" class="opacity-0 absolute sm:hidden left-0 top-0 w-full h-full" title="{{ $button['title'] ?: '' }}" data-vacancy="{{ $item['vacancy'] }}" {{ ['target'] ? 'target="' . $button['target'] . '"' : '' }}>{{ $button['title'] ?: '' }}</a>
                  @endif
                </div>
              @endforeach
            </div>
            @if(count($items) > 18)
              <button class="btn btn--white vacancies-btn lg:mt-48 mt-35 flex mb-15 mx-auto">
                {{ $button_label ?: __('Завантажити ще', 'sage') }}
              </button>
            @endif
          </div>
        @else
        @endif
    </div>
  </div>
@endif
