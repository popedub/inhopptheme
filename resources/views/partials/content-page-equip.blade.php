@include('partials.hero')
<section>
  <div class="container">
    {{-- president --}}
    <div class="row cp-bottom">
      <div class="col-12 col-lg-6">
      <h3 class="text-uppercase f2 d-block d-lg-none mb-3">
        {!!$bloke->nombre!!}<br>
          <span class="verde"><?php echo __('président','inhopptheme');?></span>
      </h3>
        <img src="{!!$bloke->foto['url']!!}" class="img-fluid">
      </div>

      <div class="col-12 col-lg-6">
        <h3 class="text-uppercase f2 d-none d-lg-block">

            {!!$bloke->nombre!!}<br>
            <span class="verde"><?php echo __('président','inhopptheme');?></span>

        </h3>
        <div class="intro pt-5 pr-lg-5">
          {!!$bloke->intro!!}
        </div>
        <div class="more">
          <a href="{!!get_permalink(40)!!}">+INFO</a> @svg('flecha','ico-flecha') <span class="text-uppercase presi">{!!$bloke->nombre!!}</span>
        </div>
      </div>

    </div>
    {{-- end president --}}
    <div class="row pt-5">
      <div class="col-12 col-lg-6 order-2 order-lg-1">
        <h3 class="text-uppercase f2 d-none d-lg-block">
          {!!$bloke->nombre_dire!!}<br>
          <span class="verde"><?php echo __('directeur exécutif de l&#39;inhopp','inhopptheme');?></span>
        </h3>
        <div class="intro pt-5">
          {!!$bloke->intro_dire!!}
        </div>
      </div>
      <div class="col-12 col-lg-6 order-1 order-lg-2">
        <h3 class="text-uppercase f2 d-block d-lg-none mb-3">
          {!!$bloke->nombre_dire!!}<br>
          <span class="verde"><?php echo __('directeur exécutif de l&#39;inhopp','inhopptheme');?></span>
        </h3>

        <img src="{!!$bloke->foto_dire['url']!!}" class="img-fluid">
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      {!!$equipo!!}
    </div>
  </div>
</section>
