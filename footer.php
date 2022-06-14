</div>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <nav class="footer__menu">
                <?php wp_nav_menu([
                    'theme_location' =>  'bottom',
                    'menu_class'      => 'footer__list-menu',
                    'link_class'      => 'footer__link-menu',
                    'add_li_class'    => 'footer__item-menu',
                    'container'       => 'null'
                ]); 
                ?>
            </nav>
            <div class="footer__copyright">
                <p>© <span id="year"></span> Фітнес та здорове харчування | Design by <a class="footer__copyright-link" href="https://web-guild.pro/" target="_blank">Web Guild</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><i class='bx bx-x'></i></button>
        <div class="modal-heading">Отримати програму<br> від тренера</div>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <div class="modal-form">
            <?php echo do_shortcode('[contact-form-7 id="165" title="Contact Form Modal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
</body>

</html>