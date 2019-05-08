{{--
  Template Name: Fullscreen
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="content">
      @include('partials.content-page')
    </div>
  @endwhile
@endsection
