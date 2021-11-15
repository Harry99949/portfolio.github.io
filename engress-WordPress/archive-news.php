<?php
/* Template Name: news
Template Post Type: post,news
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

</header>
<main>
  <section id="fv-information">
    <p>お知らせ</p>
  </section>
  <section id="bread">
    <?php get_template_part('includes/header'); ?>
  </section>
  <section id="information">
    <div class="information-content">
      <h1>お知らせ一覧</h1>
    </div>
    <ul>
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li>
            <time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
      <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
    <?php
    $args = array(
      'mid_size' => 1,
      'prev_text' => '&lt;',
      'next_text' => '&gt;',
      'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>
  </section>
  <?php get_template_part('includes/footer'); ?>
</main>
<footer>
  <?php get_footer(); ?>
</footer>
</body>

</html>