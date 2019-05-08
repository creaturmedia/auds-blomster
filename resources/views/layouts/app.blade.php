<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
    @if(get_field('is_funeral_site', 'option'))
      <body @php body_class('funeral-site') @endphp>
    @else
      <body @php body_class() @endphp>
    @endif
    @php do_action('get_header') @endphp
    @include('partials.header')
    @if(is_page_template('views/template-frontpage.blade.php'))
      @include('partials.page-banner')
    @endif
    @if(is_page_template('views/template-frontpage-rb.blade.php'))
      @include('partials.page-banner')
    @endif
    @if(is_page_template('views/template-two-column.blade.php'))
      <main class="wrap" role="document">
    @else
      <main class="wrap container" role="document">
    @endif
          @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  </body>
</html>
