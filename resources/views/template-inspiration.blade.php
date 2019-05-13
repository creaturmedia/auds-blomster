{{--
  Template Name: Inspirasjon
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="content">
      @if( $social_sites = get_field('sosiale_medier_sider') )
        <div class="inspiration-links row">
        @foreach ($social_sites as $social_site)
          <div class="col--half inspiration-links__item" @if($social_site['farge']) style="background-color: {{ $social_site['farge'] }}" @endif>
            <p>{{ $social_site['tittel'] }}</p>
            <p>
              <a target="_blank" href="{{ $social_site['url'] }}" class="btn">{{ $social_site['knapptittel'] }}</a>
            </p>
          </div>
        @endforeach
        </div>
      @endif

      <div class="page-content">
        @include('partials.page-header')
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
@endsection
