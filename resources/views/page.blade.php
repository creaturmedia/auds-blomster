@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="row content">
      <div class="col--half page-content">
        @include('partials.page-header')
        @include('partials.content-page')
      </div>
      @include('partials.sidebar-images')
      @if (get_field('aktivere_knapper') && $buttons = get_field('knapper'))
      <div class="col--full page-content">
        <p>
          @foreach ($buttons as $button)
            <a class="btn" href="{{ $button['knappside'] }}">{{ $button['knappetikett'] }}</a>
          @endforeach
        </p>
      </div>
      @endif
    </div>
  @endwhile
@endsection
