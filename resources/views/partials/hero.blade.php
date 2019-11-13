<section class="hero bg-verde position-relative">
  <div class="container">
    <div class="row">
      <div class="info-hero order-1 order-lg-0">
        <div class="top text-uppercase">
          @if (is_front_page())
              <?php echo __('institut haïtien d&#39;observatorie<br>de politiques publiques','inhopptheme');?>
          @endif

          @if (!is_front_page())
            <h1 class="d-block d-lg-none marron">{!! App::title() !!}</h1>
          @endif
          <span class="d-none d-lg-block">
            {!!App::bloke()->frase_destacada!!}
            {!!App::bloke()->frase!!}
          </span>
        </div>

        <div class="bottom">
          @if (is_front_page())
            <h1>{!!$bloke->frase_destacada!!}</h1>
          @endif
          @if (!is_front_page())
            <h1 class="d-none d-lg-block">{!! App::title() !!}</h1>

            <span class="d-block d-lg-none">
              {!!App::bloke()->frase_destacada!!}
              {!!App::bloke()->frase!!}
            </span>
          @endif

        </div>
      </div>

      <div class="foto-mobil d-lg-none order-lg-1 order-0">
        <div class="inside"
        @if (has_post_thumbnail() && !is_category())

          style="background-image:url('{!! the_post_thumbnail_url('custom')!!}'); background-repeat: no-repeat; background-size: cover; background-position: center;"

        @endif
        @if (is_category())
          <?php
              $term = get_queried_object(); //category
              $foto_cat = get_field('featured_image', $term); //category image
          ?>

          style="background-image:url('<?php echo $foto_cat['sizes']['custom'];?>'); background-repeat: no-repeat; background-size: cover; background-position: center;"

        @endif
        >
        @if (is_front_page())
          <a href="{!!get_permalink(6)!!}" class="more-info bg-verde">{!!__('+ INFO','inhopptheme')!!}</a>
        @endif
      </div>
    </div>
  </div>
  <div class="foto-hero">
    <div class="inside"


      @if (has_post_thumbnail() && !is_category())

        style="background-image:url('{!! the_post_thumbnail_url('custom')!!}'); background-repeat: no-repeat; background-size: cover; background-position: center;"

      @endif
      @if (is_category())
        <?php
            $term = get_queried_object(); //category
            $foto_cat = get_field('featured_image', $term); //category image
        ?>

        style="background-image:url('<?php echo $foto_cat['sizes']['custom'];?>'); background-repeat: no-repeat; background-size: cover; background-position: center;"

      @endif
      >
      @if (is_front_page())
        <a href="{!!get_permalink(6)!!}" class="more-info bg-verde d-none d-lg-block">{!!__('+ INFO','inhopptheme')!!}</a>
      @endif
    </div>

  </div>
</section>
