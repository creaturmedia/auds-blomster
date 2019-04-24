@if ($sidebar_images = get_field('side_bilder'))
  <div class="sidebar-images col--half">
    @foreach ($sidebar_images as $sidebar_image)
      <img src="{{ $sidebar_image['sizes']['large'] }}" alt="{{ $sidebar_image['alt'] }}" />
    @endforeach
  </div>
@endif
