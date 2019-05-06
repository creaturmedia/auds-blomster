<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col col--half">
        <h2>Auds Blomster</h2>
        @if (get_field('nettside_om_tekst', 'option'))
          {!! get_field('nettside_om_tekst', 'option') !!}
        @endif
      </div>
      <div class="col col--half">
        <h2>Kontakt oss</h2>
        <p>
          @if (get_field('telefon', 'option')){{ get_field('telefon', 'option') }}@endif / @if (get_field('e-post', 'option'))<a href="mailto:{{ get_field('e-post', 'option') }}">{{ get_field('e-post', 'option') }}</a>@endif
        </p>
        <p>
          Besøksadresse:<br />
          @if (get_field('besokadresse', 'option')){{ get_field('besokadresse', 'option') }}@endif
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- CM -->
