{{--
  Template Name: Forside RB
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="content">
      @if ($hjemmeside_blokker = get_field('hjemmeside_blokker'))
        <div class="frontpage-blocks row">
          @foreach ($hjemmeside_blokker as $hjemmeside_blokk)
            <div class="frontpage-blocks__item" style="background-color: {{ $hjemmeside_blokk['farge'] }}">
              <h2>{{ $hjemmeside_blokk['tittel'] }}</h2>
              @if($hjemmeside_blokk['knapp_eller_tekst'] == 'tekst')
                {!! $hjemmeside_blokk['tekst'] !!}
              @elseif($hjemmeside_blokk['knapp_eller_tekst'] == 'knapp')
                <p>
                  <a class="btn" href="
                  @if ($hjemmeside_blokk['internal_eller_external'] == 'external')
                    {{ $hjemmeside_blokk['external_url'] }}
                  @else
                    {{ $hjemmeside_blokk['url'] }}
                  @endif
                  ">{{ $hjemmeside_blokk['knappetikett'] }}
                  </a>
                </p>
              @endif
            </div>
          @endforeach
        </div>
      @endif
    </div>
  @endwhile
@endsection
