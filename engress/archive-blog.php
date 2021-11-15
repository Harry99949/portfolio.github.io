<?php
/* Template Name: blog
Template Post Type: post,blog
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

</header>
<main>
  <section id="fv-blog">
    <p>ブログ</p>
  </section>
  <section id="bread">
    <?php get_template_part('includes/header'); ?>
  </section>
  <section id="blog">
    <div class="blog-title">
      <h1>新着一覧</h1>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <ul>
          <li>
            <div class="blog-inner">
              <div class="blog-left">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <p>
                  <?php
                  if ($terms = get_the_terms($post->ID, 'category_blog')) {
                    echo esc_html($terms[0]->name);
                  }
                  ?>
                </p>
              </div>
              <div class="blog-right">
                <p><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p class="blog-txt">
                  <?php
                  if (mb_strlen($post->post_content, 'UTF-8') > 100) {
                    $content = mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8');
                    echo $content . '…';
                  } else {
                    echo strip_tags($post->post_content);
                  }
                  ?>
                </p>
              </div>
            </div>
          </li>
        </ul>
    <?php endwhile;
    endif;
    wp_reset_query(); ?>
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