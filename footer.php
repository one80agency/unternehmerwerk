<footer>
    <div class="container">

        <div class="footer-grid">

            <div class="footer-brand">

                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<strong>Unternehmerwerk</strong>';
                }
                ?>

                <p>
                    Unternehmerwerk ist die Unternehmer- und Beteiligungsplattform
                    der Amberger Group für Gründen, Kaufen, Aufbauen und Übergeben.
                </p>

            </div>


            <div class="footer-col">
                <strong>Unternehmerwerk</strong>

                <a href="<?php echo esc_url( home_url( '/#unternehmerwerk' ) ); ?>">
                    Unternehmerwerk
                </a>

                <a href="<?php echo esc_url( home_url( '/#wege' ) ); ?>">
                    Vier Eintrittswege
                </a>

                <a href="<?php echo esc_url( home_url( '/#vorteile' ) ); ?>">
                    Vorteile
                </a>

                <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">
                    FAQ
                </a>
            </div>


            <div class="footer-col">
                <strong>Rechtliches</strong>

                <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">
                    Impressum
                </a>

                <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">
                    Datenschutz
                </a>
            </div>

        </div>


        <div class="footer-bottom">

            <span>
                © <?php echo esc_html( date( 'Y' ) ); ?> Unternehmerwerk
            </span>

            <span>
                Eine Plattform der Amberger Group
            </span>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
