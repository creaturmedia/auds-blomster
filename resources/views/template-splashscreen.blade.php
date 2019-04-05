{{--
  Template Name: Splashscreen
--}}

@extends('layouts.splashscreen')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @if($sites = get_field('sites'))
      <div class="splashscreen">
        @foreach ($sites as $site)
        <div class="splashscreen__site {{ $site['farge'] }}">
          <a href="{{ $site['nettside_url'] }}"><img src="{{ $site['nettside_logo'] }}" alt="{{ $site['nettside_navn'] }}" /></a>
        </div>
        @endforeach
      </div>
    @endif
  @endwhile
@endsection
