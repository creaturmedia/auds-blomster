{{--
  Template Name: Forside
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- banner --}}
    @include('partials.content-page')
  @endwhile
@endsection
