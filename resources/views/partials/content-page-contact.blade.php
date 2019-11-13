@include('partials.hero')
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <span class="verde text-uppercase"><?php echo __('address.','inhopptheme');?></span><br>
        <span class="marron">{!!$bloke->direccion!!}</span><br>
        <a href=" {!!$bloke->mapa!!}" target="_blank" class="marron">GOOLGE MAPS</a>

      </div>
      <div class="col-12 col-lg-3">
        <span class="verde text-uppercase"><?php echo __('email.','inhopptheme');?></span><br>
        <a href="mailto:{!!$bloke->mail!!}" class="marron">{!!$bloke->mail!!}</a>
      </div>
    </div>
  </div>
</section>
