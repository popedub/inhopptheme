@include('partials.hero')
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5">
        <h3>
          <span class="ti"><?php echo __('Video','inhopptheme');?></span>
        </h3>
      </div>

      <div class="col-12 col-lg-6">
        <h3 class="text-uppercase f2 d-block d-lg-none mb-4">
          <span class="verde"><?php echo __('entrevue.','inhopptheme');?></span><br>
          <?php echo __('fritz alphonse jean');?>
        </h3>
        <div class="embed-responsive embed-responsive-16by9">
          {!!$bloke->video!!}
        </div>
      </div>

      <div class="col-12 col-lg-6 pl-lg-5">
        <h3 class="text-uppercase f2 d-none d-lg-block">
          <span class="verde"><?php echo __('entrevue.','inhopptheme');?></span><br>
          <?php echo __('fritz alphonse jean');?>
        </h3>
        <div class="intro-video mt-5">
          {!!$bloke->frase_video!!}
        </div>
        <div class="share-video">
          @svg('share','ico-share')
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bg-verde-light position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>
        <span class="ti">
          <?php echo __('à porpost d&#39;innopp','inhopptheme');?>
        </span>
        </h3>
        <div class="intro-home verde">
          @php the_content() @endphp
        </div>
      </div>
    </div>
  </div>
  <a href="{!!get_permalink(6)!!}" class="more-info bg-white"> {!!__('+ INFO','inhopptheme')!!}</a>
</section>
