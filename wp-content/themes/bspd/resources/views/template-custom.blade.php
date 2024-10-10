{{--
  Template Name: Текстовий шаблон
--}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="mt-[157px] mb-84 rounded-20 py-70 px-30 bg-emerald-950 [&_p]:mb-20">
      @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @include('partials.content-page')
      @endwhile
    </div>
  </div>
@endsection
