<footer class="content-info">
  <div class="container">
    @php(dynamic_sidebar('sidebar-footer'))
      <div class="social">
        <span class="fb">
          <a href={!! $links['facebook'] !!} target="_blank">FB</a>
        </span>
        <span class="tw">
          <a href=""{!! $links['twitter'] !!} target="_blank">TW</a>
        </span>
      </div>
      <div class="anio">
        {!! $anio !!}{{ __(' ©', 'sage') }}
      </div>
  </div>
</footer>
