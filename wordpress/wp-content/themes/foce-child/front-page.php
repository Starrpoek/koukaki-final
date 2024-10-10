<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop class="banner__video">
                <source src="http://localhost/koukaki/wordpress/wp-content/uploads/2024/10/StudioKoukaki-videoheadersansson.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
            </video>
            <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="link-story" class="story">
            <h2 class="story__title">
                <span>L'</span>
                <span>histoire</span>
            </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="characters">
                <div class="main-character">
                    <h3 class="story__characters--title">
                        <span>Les</span>
                        <span>personnages</span>
                    </h3>
                </div>
            </article>
                <?php get_template_part( 'page-swiper' ); ?>
            <article id="place">
                <div>
                    <h3 class="story__place--title">
                        <span>Le</span>
                        <span>Lieu</span>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="story__place--clouds">
                    <img class="X-cloud" src="http://localhost/koukaki/wordpress/wp-content/uploads/2024/10/big_cloud.png" alt="gros nuage en mouvement">
                    <img class="x-cloud" src="http://localhost/koukaki/wordpress/wp-content/uploads/2024/10/little_cloud.png" alt="petit nuage en mouvement">
                </div>
            </article>
        </section>
        <section id="studio">
            <h2 class="studio__title">
                <span>Studio</span>
                <span>Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            
            <?php echo get_template_part( 'page-oscar' ); ?>
            </section>
    </main><!-- #main -->

<?php
get_footer();
