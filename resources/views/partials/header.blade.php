<header class="banner bg-marron sticky-top">
  <div class="container-fluid d-flex">
    <a class="brand mr-auto d-block" href="{{ home_url('/') }}">@svg('header-logo','ico-logo')</a>
      <input type="checkbox" id="menu-toggle" />
      <label for="menu-toggle" class="label-toggle">
          <span></span>
          <span></span>
          <span></span>
      </label>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>

