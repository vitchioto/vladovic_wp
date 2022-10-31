<?php
  $tags = get_the_tags();
  $tags = array_reverse($tags);
  $year = get_field("year");
  $url = get_field("url");
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
  <?php the_content(); ?>
</main>
<?php get_footer(); ?>