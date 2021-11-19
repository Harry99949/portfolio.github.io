<?php
/* Template Name: price
Template Post Type: price*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

</header>
<main>
  <section id="fv-price">
    <p>コース・料金</p>
  </section>
  <section id="bread">
    <?php get_template_part('includes/header'); ?>
  </section>
  <section id="price">
    <h1>料金体系</h1>
    <div class="price-wrapper">
      <p class="entransfee">
        入会金<br class="is-sp" />
        39,800円
      </p>
      <div class="price-cross"></div>
      <p class="monthlyfee">月額費用</p>
    </div>
    <p class="price-text">
      Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
    </p>
  </section>
  <section id="chart">
    <h1>料金表</h1>
    <ul class="chart-wrapper">
      <li>
        <div class="chart-title">
          <h2>基礎プラン</h2>
        </div>
        <div class="chart-content">
          <?php if (get_field('basic')) : ?>
            <p><?php the_field('basic'); ?></p>
          <?php endif; ?>
          <p>*月額(税抜価格)</p>
          <ul>
            <li>カリキュラム作成</li>
            <li>TOEFL学習サポート</li>
            <li>週一回のビデオMTG</li>
          </ul>
        </div>
      </li>
      <li>
        <div class="chart-title">
          <h2>演習プラン</h2>
        </div>
        <div class="chart-content">
          <?php if (get_field('exercise')) : ?>
            <p><?php the_field('exercise'); ?></p>
          <?php endif; ?>
          <p>*月額（税抜価格）</p>
          <ul>
            <li>カリキュラム作成</li>
            <li>TOEFL学習サポート</li>
            <li>週一回のビデオMTG</li>
            <li>月二回の模試（解説付き）</li>
          </ul>
        </div>
      </li>
      <li>
        <div class="chart-title color">
          <h2>おすすめ<br class="line" />志望校対策プラン</h2>
        </div>
        <div class="chart-content">
          <?php if (get_field('recommend')) : ?>
            <p><?php the_field('recommend'); ?></p>
          <?php endif; ?>
          <p>*月額（税抜価格）</p>
          <ul>
            <li>カリキュラム作成</li>
            <li>TOEFL学習サポート</li>
            <li>週一回のビデオMTG</li>
            <li>月二回の模試（解説付き）</li>
            <li>週一の英語面接対策 </li>
          </ul>
        </div>
      </li>
      <li>
        <div class="chart-title">
          <h2>フレックスプラン</h2>
        </div>
        <div class="chart-content">
          <?php if (get_field('flex')) : ?>
            <p><?php the_field('flex'); ?></p>
          <?php endif; ?>
          <p>*月額（税抜価格）</p>
          <ul>
            <li>＊別途ご相談ください</li>
          </ul>
        </div>
      </li>
    </ul>
  </section>
  <?php get_template_part('includes/footer'); ?>
</main>
<footer>

  <?php get_footer(); ?>
</footer>
</body>

</html>