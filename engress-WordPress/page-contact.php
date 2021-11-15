<?php
/* Template Name: form*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

</header>
<main>
  <section id="fv-form">
    <p>お問い合わせ</p>
  </section>
  <section id="bread">
  <?php get_template_part('includes/header'); ?>
  </section>
  <section id="form">
    <?php echo do_shortcode('[mwform_formkey key="348"]'); ?>
  </section>
</main>
<footer>
  <?php get_footer(); ?>
</footer>
</body>

</html>