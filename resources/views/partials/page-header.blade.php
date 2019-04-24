<div class="page-header">
  @if (get_field('side_tittel'))
    <h1> {{ get_field('side_tittel')}}</h1>
  @else
    <h1>{!! App::title() !!}</h1>
  @endif
</div>
