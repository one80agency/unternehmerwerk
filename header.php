<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container nav">

        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Unternehmerwerk Startseite">

            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<span class="brand-text">Unternehmerwerk</span>';
            }
            ?>

        </a>

        <nav class="nav-links" aria-label="Hauptnavigation">
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

            <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/#kontakt' ) ); ?>">
                Gespräch anfragen
            </a>
        </nav>

    </div>
</header>
