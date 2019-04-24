{{--
  Template Name: Forside
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="row content">
      <div class="col--half page-content">
        @include('partials.page-header')
        @include('partials.content-page')
      </div>
      @include('partials.sidebar-images')
    </div>
  @endwhile
@endsection
