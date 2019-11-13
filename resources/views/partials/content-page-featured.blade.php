@include('partials.hero')
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h3 class="text-uppercase f2 d-block d-lg-none mb-3">
          <span class="ti"><?php echo __('sur','inhopptheme');?></span>
      </h3>
        <div class="intro-featured">
          {!!$bloke->intro!!}
        </div>
      </div>

      <div class="contact-featured col-12 col-lg-6 text-uppercase">
        <div class="tw-featured">
          <span class="verde">TWITTER.</span><br>
            <a href="#" class="verde" target="_blank">@fritzjeaninhopp</a>
        </div>
      </div>

      <div class="contact-featured col-12 col-lg-6 text-uppercase">
        <span class="verde">EMAIL.</span><br>
            <a href="mailto:fritzalphonse.jean@inhopphaiti.com" class="verde" target="_blank">fritzalphonse.jean@inhopphaiti.com</a>
      </div>


    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <hr>
        <h3 class="mt-5"><span class="ti"><?php echo __('video','inhopptheme');?></span></h3>
      </div>
      <div class="col-12 col-lg-6 video">
        <h3 class="ti-video f2 verde d-block d-lg-none cp-top">{!!$bloke->ti_video!!}</h3>
        <div class="embed-responsive embed-responsive-16by9">
          {!!$bloke->video!!}
        </div>
      </div>
      <div class="col-12 col-lg-6 video">
        <h3 class="ti-video f2 verde d-none d-lg-block">{!!$bloke->ti_video!!}</h3>
        <div class="text-video pt-5">
          {!!$bloke->text_video!!}
        </div>
        <div class="share-video">
          @svg('share', 'ico-share')
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <hr>
        <h3 class="pt-5"><span class="ti text-uppercase"><?php echo __('ses livres','inhopptheme');?></span></h3>
      </div>
    </div>
    <div class="row libros">
      {!!$libros!!}
    </div>
  </div>
</section>
