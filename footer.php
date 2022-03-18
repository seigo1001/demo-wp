<footer class="">
    <!-- フッター -->
  <div class="l-footer p-footer">
    <div class="p-footer__wrapper">
      <a href="<?php home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.svg" alt="footer-logo" /></a>
      <nav class="p-footer__items c-footer-nav">
        <li class="c-footer-nav__item"><a href="<?php echo home_url();?>">トップ</a></li>
        <li class="c-footer-nav__item"><a href="<?php echo home_url();?>/news/">お知らせ</a></li>
        <li class="c-footer-nav__item"><a href="<?php echo home_url();?>/business/">事業内容</a></li>
        <li class="c-footer-nav__item"><a href="<?php echo home_url();?>/about/">企業概要</a></li>
        <li class="c-footer-nav__item"><a href="<?php echo home_url();?>/blog/">ブログ</a></li>
        <li class="c-footer-nav__item">
          <a href="<?php echo home_url();?>/contact/">お問い合わせ</a>
        </li>

      </nav>
    </div>
    <small class="c-copyright">&copy; 2021 CodeUps Inc.</small>
  </div>
  <!-- トップへ戻るボタン -->
  <a href="#" id="pageTop" class="c-btn-pageTop"></a>
</footer>
<?php wp_footer(); ?>
</body>
</html>