@if ($banner_image = get_field('banner_bilde'))

<div class="page-banner">

  <img src="{{ $banner_image['url'] }}"  />

  @if(get_field('aktiver_logoen') && $banner_logo = get_field('logo'))
  <div class="page-banner__logo {{ get_field('logo_plassering') }}">
    <img src="{{ $banner_logo['url'] }}"  />
  </div>
  @endif

  @if(get_field('aktivere_knappen'))
  <div class="page-banner__cta" @if(get_field('knappe_boks_farge')) style="background:{{ get_field('knappe_boks_farge') }}" @endif>
    @if (get_field('knappetittel'))
      <h2>{{ get_field('knappetittel') }}</h2>
    @endif
    <p>
      <a class="btn" href="{{ get_field('knappe_url') }}">{{ get_field('knappetikett') }}</a>
    </p>
  </div>
  @endif

</div>

@endif
