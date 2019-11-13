<article @php (post_class()) @endphp>
  <div class="row">
    <div class="col-12 col-lg-6">
      <header>
        <h2 class="entry-title f2"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
        @include('partials/entry-meta')
      </header>
      <figure class="d-block d-lg-none mt-4">
        @if (has_post_thumbnail())
            {!! the_post_thumbnail('large', ['class' => 'img-fluid'])!!}
        @endif
      </figure>
      <div class="entry-summary">
        @php the_excerpt() @endphp
      </div>
    </div>

    <div class="col-12 col-lg-6 d-none d-lg-block">
      @if (has_post_thumbnail())
          {!! the_post_thumbnail('large', ['class' => 'img-fluid'])!!}
      @endif
    </div>
  </div>
</article>
