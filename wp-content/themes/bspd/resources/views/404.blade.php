@php
  $options = get_fields('options');
  $title = $options['404_title'] ?: __('404', 'sage');
  $subtitle = $options['404_subtitle'] ?: __('Сторінка не знайдена', 'sage');
  $text = $options['404_description'] ?: __('На жаль, сторінка, яку ви шукаєте, не існує. Можливо, вона була видалена, переміщена або посилання було введене неправильно.', 'sage');
@endphp

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="lg:mt-[130px] mt-100 mb-48 rounded-20 py-83 px-30 bg-emerald-950 text-center">
      <h1 class="lg:text-[160px] sm:text-[120px] text-[80px] font-extrabold uppercase text-yellow-550 leading-[1]">{{$title}}</h1>
      <h2 class="lg:text-48 sm:text-36 text-30 font-extrabold uppercase text-yellow-550 leading-[1.25] mt-20">{{ $subtitle }}</h2>
      <p class="max-w-[720px] mt-28 mx-auto">{!! $text !!}</p>
      <a href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}" class="btn btn--yellow lg:mt-45 mt-20">{{ __('На головну', 'sage') }}</a>

    </div>
  </div>
@endsection
