<?php
  $tags = get_the_tags();
  $tags = array_reverse($tags);
  $year = get_field("year");
  $url = get_field("url");
  $currentPostId = get_the_ID();
  $nextPostIndex = 0;
  $posts = get_posts(array('numberposts' => -1, 'orderby' => 'menu_order', 'post_type' => 'project'));
  for ($i = 0; $i < count($posts) - 1; $i++) {
    if ($posts[$i]->ID == $currentPostId) $nextPostIndex = $i + 1;
  }
?>

<?php get_header(); ?>
<main class="project-page">
  <h1><?php the_title(); ?></h1>
  <section class="project-intro">
    <div class="project-column">
      <div class="project-column__title">TECHNOLOGIES USED</div>
      <?php foreach ( $tags as $tag ) : ?>
        <span class='project-column__item'>
        <?php echo $tag->name; ?>
        </span>
      <?php endforeach; ?>
    </div>
    <?php if (isset($url) && $url != "") { ?>
    <div class="project-column">
      <div class="project-column__title">URL</div>
      <a href="<?php echo $url;?>" class='project-column__item'><?php echo $url;?></a>
    </div>
    <?php } ?>
    <div class="project-column">
      <div class="project-column__title">YEAR</div>
      <div class='project-column__item'><?php echo $year;?></div>
    </div>
  </section>
  <div class="project-content">
    <?php the_content(); ?>
  </div>
  <div class="button__section">
    <a
      class="button wp-block-button__link"
      href="<?php echo get_permalink($posts[$nextPostIndex]->ID); ?>"
    >
	  	Next Project
    </a>
  </div>
</main>
<?php get_footer(); ?>