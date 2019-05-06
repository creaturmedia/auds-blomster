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
    <main class="wrap container" role="document">
          @yield('content')
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
