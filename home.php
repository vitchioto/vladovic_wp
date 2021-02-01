<?php get_header(); ?>
<?php

  $animationClasses = ['show-from-left', 'show-from-right', 'show-from-bottom'];
  $args = array(
    'post_type' => 'project',
    'post_status'    => 'publish',
    'posts_per_page'=> 9
  );

  $the_query = new WP_Query( $args );
?>
<main>
    <section class="side">
        <h1>Vladimír Vladovič</h1>
        <div class="">
            Som milovnik chilli a novych technologii. Specializujem sa na weby a vsetkom technologickom okolo toho (front-end, back-end, databazy, rozne optimalizacie, testovanie, ...).
            Na grafiku som ale nikdy nemal cit, takze tam nepomozem :)<br><br>S tvorbou webov som zacal v roku 2011 popri skole, odvtedy mi cez prsty preslo par desiatok freelance projektov.
            Posledne roky posobim v medzinarodnej spolocnosti zaoberajucej sa online bettingom, kde bolo mojou naplnou vytvaranie a udrziavanie promo stranok, internych systemov,
            emailovych templatoch a vlastne hocicoho, co bolo prave treba.
        </div>
        <div class="contact">
            <a href="mailto:vladovic.vladimir@gmail.com">vladovic.vladimir@gmail.com</a>
            <div class="links">
                <a href="/">linkedin</a>
                <a href="/">github</a>
            </div>
        </div>
    </section>
    <section class="images">
        <?php
        	while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $suffix = array_rand(array_flip($animationClasses));
        ?>
        <a class="item_link <?php echo $suffix;?>" href="/" title="<?php the_title(); ?>" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'">
            <div class="item_details">
              <?php the_title(); ?>
            </div>
        </a>
        <?php
        	}
        ?>
    </section>
</main>
<?php get_footer(); ?>