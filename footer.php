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
                <p>© 2022 Eleat Sports Nutrition® | Design by Web Guild</p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>