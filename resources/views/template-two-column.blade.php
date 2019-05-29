{{--
  Template Name: Two Column
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="two-column-layout">

      @if( have_rows('to_kolonne_sidelayout') )
        @while ( have_rows('to_kolonne_sidelayout') )
        @php the_row() @endphp
          @if( get_row_layout() == 'tekst_+_bilde' )
            <div class="two-column-layout__container">
              <div class="container">
                <div class="content">
                  <div class="row {!! get_sub_field('oppsettinnstillinger') !!}">
                    <div class="col--half page-content">
                      @if (get_sub_field('tittel'))<h2>{!! get_sub_field('tittel') !!}</h2>@endif
                      @if (get_sub_field('intro'))
                        <div class="intro">
                          {!! get_sub_field('intro') !!}
                        </div>
                      @endif
                      {!! get_sub_field('tekst') !!}
                    </div>
                    <div class="featured-image col--half">
                      <div class="featured-image__container">
                        @if ($bilde = get_sub_field('bilde'))
                          <img src="{!! $bilde['sizes']['large'] !!}"  />
                        @endif
                        @if (get_sub_field('knappetikett') && get_field('knappe_url'))
                        <a class="btn" href="{{ get_field('knappe_url') }}">{{ get_field('knappetikett') }}</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          @elseif( get_row_layout() == 'kister_urner' )
            <div class="two-column-layout__container kister-urner">
              <div class="container">
                <div class="content">
                <div class="page-content">
                    @if (get_sub_field('tittel'))<h2>{!! get_sub_field('tittel') !!}</h2>@endif
                    {!! get_sub_field('tekst') !!}
                </div>

                @if( $kister_urner = get_sub_field('kister__urner') )
                    <div class="kister-urner__container row">
                        @foreach( $kister_urner as $kiste )
                            <div class="kister-urner__container__item col--half">
                              <a rel="lightbox" href="{!! $kiste['bilde']['sizes']['large']; !!}"><img src="{!! $kiste['bilde']['sizes']['kiste'] !!}"  /></a>
                              @if ($kiste['tittel'])
                                <p>{{ $kiste['tittel'] }}</p>
                              @endif
                              @if ($kiste['pris'])
                                <p>{{ $kiste['pris'] }}</p>
                              @endif
                            </div>
                        @endforeach
                    </div>
                @endif
              </div>
              </div>
            </div>

          @elseif( get_row_layout() == 'flere_slider' )
            <div class="two-column-layout__container carousel-under multiple">
              <div class="container">
                <div class="content
                page-content">
                    @if (get_sub_field('tittel'))<h2>{!! get_sub_field('tittel') !!}</h2>@endif
                      @if( have_rows('slider') )
                        @while ( have_rows('slider') )
                          @php the_row() @endphp
                          <h4>{{ get_sub_field('tittel') }}</h4>
                          @if( $images = get_sub_field('bilder') )
                            <div class="slider">
                                @foreach( $images as $image )
                                    <div>
                                      <a rel="lightbox" href="{!! $image['sizes']['large']; !!}">{!! wp_get_attachment_image( $image['ID'], 'slider' ) !!}</a>
                                    </div>
                                @endforeach
                            </div>
                          @endif
                        @endwhile
                      @endif
                </div>
              </div>
            </div>


          @elseif( get_row_layout() == 'tekst_med_slider_under' )
            <div class="two-column-layout__container carousel-under">
              <div class="container">
                <div class="content
                page-content">
                    @if (get_sub_field('tittel'))<h2>{!! get_sub_field('tittel') !!}</h2>@endif
                    {!! get_sub_field('tekst') !!}

                    @if( $images = get_sub_field('bilder') )
                        <div class="slider">
                            @foreach( $images as $image )
                                <div>
                                  <a rel="lightbox" href="{!! $image['sizes']['large']; !!}">{!! wp_get_attachment_image( $image['ID'], 'slider' ) !!}</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
              </div>
            </div>
          @endif
        @endwhile
      @endif
    </div>
  @endwhile
@endsection
