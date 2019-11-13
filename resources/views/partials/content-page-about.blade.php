@include('partials.hero')
<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <h3>
        <span class="ti">
          <?php echo __('Sur','inhopptheme');?>
        </span>
        </h3>
      </div>
    </div>
    <div class="row f20px">
      <div class="col-12 col-lg-6">

          {!!$bloke->col1!!}

      </div>

      <div class="col-12 col-lg-6">
          {!!$bloke->col2!!}
      </div>

    </div>
  </div>
</section>

<section class="bg-verde-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <h3>
          <span class="ti">
            <?php echo __('objectifs','inhopptheme');?>
          </span>
        </h3>
      </div>
    </div>
    <div class="row objetivos">
      <div class="col-12 col-lg-10 offset-lg-1">
        <div class="row">
          {!!$objetivos!!}
        </div>
      </div>
    </div>
  </div>
</section>
