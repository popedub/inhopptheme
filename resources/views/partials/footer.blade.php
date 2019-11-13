<footer class="content-info">
  <div class="footer-verde d-none d-lg-block"></div>
  <div class="footer-marron d-none d-lg-block">

      <div class="share-footer">
        @svg('share', 'ico-share')
      </div>

  </div>
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="row">
      <div class="col-12 col-lg-8 marron bg-verde order-2 order-lg-1 pb-4 pb-lg-0 pr-lg-5">
        <div class="row">
          <div class="col-4 col-lg-4">
            <div class="logo-footer">
              @svg('footer-logo','logo-footer')
            </div>
          </div>

          <div class="col-8 col-lg-4 pt-4 pt-lg-0">
            <span class="frase-footer text-uppercase"><?php echo __('institut haïtien d&#39;observatoire<br>de politiques pubiques','inhopptheme')?></span>
          </div>

        </div>
        <div class="row cp-top">

            <div class="text-footer offset-lg-4 d-flex flex-column justify-content-lg-end pl-3 pl-lg-0">
              <span class="address"><?php echo __('Rue 19P, Cap-Haïtien','inhopptheme');?></span>
              <a href="mailto:contact@inhopphaiti.com" target="_blank">contact@inhopphaiti.com</a>

            </div>
            <div class="text-footer">
                  <nav class="nav-footer">
                    @if (has_nav_menu('footer_navigation'))
                      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
                    @endif
                  </nav>
              <span class="trade"><?php echo __('© 2019','inhopptheme'); ?></span>
            </div>

        </div>
      </div>

      <div class="col-12 col-lg-4 bg-marron order-1 order-lg-2 z-index-2">
        <div class="social-footer">
          <a href="#" target="_blank" class="verde">TWITTER</a>
          <a href="#" translate="_blank" class="verde">FACEBOOK</a>
        </div>

      </div>
    </div>
  </div>
</footer>
