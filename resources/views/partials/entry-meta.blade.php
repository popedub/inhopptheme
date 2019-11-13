

  {{-- {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a> --}}
  <div class="autor verde f2">
    {!!App::cat()->autor!!}
  </div>
  <div class="cargo">
    {!!App::cat()->cargo!!}
  </div>


<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('d.m.Y') }}</time>

<div class="social-autor">
  <a href="{!!App::cat()->link_tw!!}" class="tw-autor">{!!App::cat()->user!!}</a>
</div>

<div class="mail-autor">
  <a href="mailto:{!!App::cat()->mail!!}" class="mail-autor">{!!App::cat()->mail!!}</a>
</div>
