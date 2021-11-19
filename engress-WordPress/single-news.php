<?php
/* Template Name: news*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

<main>
  <section id="bread">
    <?php get_template_part('includes/header'); ?>
  </section>
  <section id="information-detail-body">
  <?php if (have_posts()):?>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
      <div class="information-detail-first">
        <h1><?php the_title(); ?></h1>
        <P><?php the_content(); ?></P>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <?php get_template_part('includes/footer'); ?>
</main>
<footer>
  <?php get_footer(); ?>
</footer>
</body>

</html>