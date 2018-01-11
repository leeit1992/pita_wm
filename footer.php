<?php 
global $pita_wm_option;
?>
<!-- Footer -->
    <footer id="footer-wrap" class="dark">
        <div class="container">
            <!-- Go top -->
            <div id="scroll-top"><span class="icofont moon-rating-2"></span></div>
            <!-- End / Go top -->
            <p class="copyright"><?php echo isset( $pita_wm_option['pita_wm-info-footer'] ) ? $pita_wm_option['pita_wm-info-footer'] : ''; ?></p>
            <ul class="social">
                <li class="wow fadeInDown" data-wow-delay=".4s">
                    <a href="<?php echo isset( $pita_wm_option['pita_wm-social-link-1'] ) ? $pita_wm_option['pita_wm-social-link-1'] : ''; ?>" title="icon 1"><span class="icofont moon-<?php echo isset( $pita_wm_option['pita_wm-social-icon-1'] ) ? $pita_wm_option['pita_wm-social-icon-1'] : ''; ?>"></span>
                    </a>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".7s">
                    <a href="<?php echo isset( $pita_wm_option['pita_wm-social-link-2'] ) ? $pita_wm_option['pita_wm-social-link-2'] : ''; ?>" title="icon 2"><span class="icofont moon-<?php echo isset( $pita_wm_option['pita_wm-social-icon-2'] ) ? $pita_wm_option['pita_wm-social-icon-2'] : ''; ?>"></span>
                    </a>
                </li>
                <li class="wow fadeInDown" data-wow-delay="1s">
                    <a href="<?php echo isset( $pita_wm_option['pita_wm-social-link-3'] ) ? $pita_wm_option['pita_wm-social-link-3'] : ''; ?>" title="icon 3"><span class="icofont moon-<?php echo isset( $pita_wm_option['pita_wm-social-icon-3'] ) ? $pita_wm_option['pita_wm-social-icon-3'] : ''; ?>"></span>
                    </a>
                </li>
                <li class="wow fadeInDown" data-wow-delay="1.3s">
                    <a href="<?php echo isset( $pita_wm_option['pita_wm-social-link-4'] ) ? $pita_wm_option['pita_wm-social-link-4'] : ''; ?>" title="icon 4"><span class="icofont moon-<?php echo isset( $pita_wm_option['pita_wm-social-icon-4'] ) ? $pita_wm_option['pita_wm-social-icon-4'] : ''; ?>"></span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- End / Footer -->
</div>
<!-- End / Page wrap -->
<?php wp_footer(); ?>
</body>
</html>
