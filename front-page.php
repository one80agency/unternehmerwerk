<?php
get_header();
?>

<main id="top">

<section class="hero">
    <div class="container hero-grid">

        <div>
            <div class="eyebrow">
                Eine Plattform der Amberger Group
            </div>

            <h1>
                Gründen<span class="orange-dot">.</span>
                Kaufen<span class="orange-dot">.</span><br>
                Aufbauen<span class="orange-dot">.</span>
                Übergeben<span class="orange-dot">.</span>
            </h1>

            <p class="hero-copy">
                Unternehmerwerk ist die Unternehmer- und Beteiligungsplattform
                der Amberger Group. Wir bringen unternehmerisches Potenzial,
                Kapital und die operative Kompetenz einer etablierten
                Unternehmensgruppe zusammen.
            </p>

            <p class="hero-copy">
                Für Menschen, die Unternehmen gründen, übernehmen, auf die
                nächste Entwicklungsstufe führen oder geordnet übergeben wollen.
            </p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="#kontakt">
                    Unverbindliches Gespräch
                </a>

                <a class="btn btn-outline" href="#wege">
                    Vier Wege ansehen
                </a>
            </div>
        </div>

        <div class="hero-visual" aria-hidden="true">
            <div class="visual-inner">

                <div class="visual-kicker">
                    Building Entrepreneurs. Building Companies.
                </div>

                <div class="visual-logo-wrap">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        echo '<span class="visual-logo-text">Unternehmerwerk</span>';
                    }
                    ?>
                </div>

                <div class="visual-copy">
                    Unternehmerisches Potenzial trifft auf Kapital,
                    Erfahrung und operative Stärke.
                </div>

            </div>
        </div>

    </div>
</section>

</main>

<?php
get_footer();
?>
