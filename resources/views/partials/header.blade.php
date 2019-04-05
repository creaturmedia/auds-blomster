<header class="banner">
  <div class="container container row row--vertical-align">
    <a class="brand" href="{{ home_url('/') }}">
      @if(get_field('logo', 'option'))
        <img src="{{ get_field('logo', 'option') }}"  />
      @endif
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
