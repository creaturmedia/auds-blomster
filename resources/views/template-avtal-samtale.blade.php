{{--
  Template Name: Avtale Samtale
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="content">
      <div class="row">
        <div class="col--half page-content">
          @include('partials.page-header')
          @if (get_field('intro'))
            <div class="intro">
              {!! get_field('intro') !!}
            </div>
          @endif
          @include('partials.content-page')
        </div>
        <div class="featured-image col--half">
          <div class="featured-image__container">
            @if ( has_post_thumbnail() )
            	@php the_post_thumbnail() @endphp
            @endif

            @if (get_field('knappetikett') && get_field('knapp_url'))
            <a class="btn" href="{{ get_field('knapp_url') }}">{{ get_field('knappetikett') }}</a>
            @endif
          </div>
        </div>
      </div>
      <div class="bottom-form">
        {{ gravity_form( 1, true, false, false, '', false ) }}
      </div>
    </div>
  @endwhile
@endsection
