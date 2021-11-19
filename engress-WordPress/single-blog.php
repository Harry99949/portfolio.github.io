<?php
/* Template Name: blog-*/
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
  <section id="blog-body">
    <div class="blog-body-wrapper">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="blog-main">
            <div class="blog-top">
              <div class="blog-title-first">
                <p><?php echo get_the_term_list($post->ID, 'category_blog'); ?></p>
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="blog-snsntime-wrapper">
                <?php echo do_shortcode('[addtoany]'); ?>
                <p><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
              </div>
              <div class="blog-top-img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
              </div>
              <div class="blog-title-second">
                <h2>見出し２</h2>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
            </div>
            <div class="blog-recommend">
              <h1>おすすめの記事</h1>
              <ul>
                <?php
                $tag_posts = get_posts(array(
                  'post_type' => 'blog',
                  'tag'    => 'pick-up',
                  'posts_per_page' => 3,
                  'orderby' => 'date',
                  'order' => 'DESC' 
                ));
                global $post;
                if ($tag_posts) : foreach ($tag_posts as $post) : setup_postdata($post); ?>
                    <li>
                      <div class="blog-recommend-left">
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
                      <div class="blog-recommend-right">
                        <p><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
                        <a href="<?php the_permalink(); ?>">
                          <p class="blog-txt">
                            <?php
                            if (mb_strlen($post->post_content, 'UTF-8') > 70) {
                              $content = mb_substr(strip_tags($post->post_content), 0, 70, 'UTF-8');
                              echo $content . '…';
                            } else {
                              echo strip_tags($post->post_content);
                            }
                            ?>
                          </p>
                        </a>
                      </div>
                    </li>
                <?php endforeach;
                endif;
                wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="blog-sidebar">
        <div class="blog-relate">
          <h1>関連記事</h1>
          <ul>
            <?php
            global $post;
            $term = array_shift(get_the_terms($post->ID, 'category_blog'));
            $args = array(
              'numberposts' => 3,
              'post_type' => 'blog',
              'taxonomy' => 'category_blog',
              'term' => $term->slug,
              'orderby' => 'rand',
              'post__not_in' => array($post->ID)
            );
            ?>
            <?php $myPosts = get_posts($args);
            if ($myPosts) : ?>
              <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
                <li>
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endforeach;
            endif;
            wp_reset_postdata();
            wp_reset_query(); ?>
          </ul>
        </div>
        <div class="blog-category">
          <h1>カテゴリー</h1>
          <ul>
            <?php
            $terms = get_terms('category_blog');
            foreach ($terms as $term) {
              echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/footer'); ?>
</main>
<footer>
  <?php get_footer(); ?>
</footer>
</body>

</html>