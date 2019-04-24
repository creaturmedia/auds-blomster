<header class="banner">
  <div class="container container row row--vertical-align">
    <a class="brand" href="{{ get_field('link_to_home', 'option') ? get_field('link_to_home', 'option') : home_url('/') }}">
      @if(get_field('logo', 'option'))
        <img src="{{ get_field('logo', 'option') }}"  />
      @endif
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! bem_menu('primary_navigation', 'menu') !!}
      @endif
    </nav>

    <button class="hamburger" type="button" aria-label="Toggle navigation">
      <div class="hamburger__bars">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
  </div>

  <div id="mobile-menu">
    @if (has_nav_menu('primary_navigation'))
      {!! bem_menu('primary_navigation', 'mobile-menu') !!}
    @endif
  </div>
</header>
