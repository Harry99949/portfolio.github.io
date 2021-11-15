<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <?php get_header(); ?>
</head>

<body>
  <main>
    <section id="fv">
      <div class="site-heading">
        <h1>TOEFL対策はEngress</h1>
        <span class="subheading">
          日本人へのTOEFL指導歴豊かな講師陣の<br />
          コーチング型TOEFLスクール</span>
      </div>
      <div class="heading-claim">
        <button type="button" name="claim" href="claim.php">資料請求</button>
      </div>
      <div class="heading-contact">
        <a href="">お問い合わせ</a>
      </div>
    </section>
    <section id="about">
      <div class="about-title">
        <h1>TOEFL学習でこんな悩みありませんか？</h1>
        <ul class="about-wrapper">
          <li>
            勉強の習慣が<br />
            身についていない
          </li>
          <li>
            勉強しているはず<br />
            なのに点数が伸びない
          </li>
          <li>
            正しい勉強方法が<br />
            わからない
          </li>
        </ul>
      </div>
      <div class="about-color">
        <div class="about-bottom">
          <div class="about-bottom-title">
            <h1>
              Engressは<br />
              TOEFLに特化したスクールです
            </h1>
          </div>
          <div class="about-bottom-sentence">
            <p>
              完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br />
              TOEFLの苦手分野を克服します。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="benefit">
      <h1>TOEFL対策に特化したEngress3つの強み</h1>
      <div class="benefit-content">
        <div class="benefit-wrapper">
          <div class="benefit-text">
            <div class="benefit-color">
              <p>特長 １</p>
            </div>
            <h1>TOEFLに最適化された<br />無駄のないカリキュラム</h1>
            <p>
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。
              そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </p>
          </div>
          <div class="benefit-img">
            <img src="<?php echo esc_url(get_theme_file_uri("img/feature01.jpg")); ?>" alt="" />
          </div>
        </div>
        <div class="benefit-wrapper">
          <div class="benefit-text-middle">
            <div class="benefit-color">
              <p>特長 ２</p>
            </div>
            <h1>
              日本人指導歴10年以上の<br />
              経験豊富な講師陣
            </h1>
            <p>
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </p>
          </div>
          <div class="benefit-img">
            <img src="<?php echo esc_url(get_theme_file_uri("img/feature02.jpg")); ?>" alt="" />
          </div>
        </div>
        <div class="benefit-wrapper">
          <div class="benefit-text">
            <div class="benefit-color">
              <p>特長 ３</p>
            </div>
            <h1>平均3ヶ月でTOEFL iBT20点アップ</h1>
            <p>
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </p>
          </div>
          <div class="benefit-img">
            <img src="<?php echo esc_url(get_theme_file_uri("img/feature03.jpg")); ?>" alt="" />
          </div>
        </div>
      </div>
      <div class="fee">
        <h1>Engressの料金プランはこちら</h1>
        <div class="fee-button">
          <button type="button" name="fee" href="claim.php">
            料金を見てみる
          </button>
        </div>
      </div>
    </section>
    <section id="successful">
      <h1>TOEFL成功事例</h1>
      <ul class="successful-ex">
        <?php if (get_field('left-result')) : ?>
          <?php while (the_repeater_field('left-result')) : ?>
            <li>
              <h1>
                <?php the_sub_field('left-title'); ?>
              </h1>
              <div class="successful-img">
                <img src="<?php the_sub_field('left-img'); ?>" alt="" />
              </div>
              <div class="successful-wrapper">
                <p class="occupation">
                  <?php the_sub_field('left-occupation'); ?>
                </p>
                <p class="name"><?php the_sub_field('left-name'); ?></p>
              </div>
              <p class="goal"><?php the_sub_field('left-goal'); ?></p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if (get_field('middle-result')) : ?>
          <?php while (the_repeater_field('middle-result')) : ?>
            <li>
              <h1><?php the_sub_field('middle-title'); ?></h1>
              <div class="successful-img">
                <img src="<?php the_sub_field('middle-img'); ?>" alt="" />
              </div>
              <div class="successful-wrapper">
                <p class="occupation">
                  <?php the_sub_field('middle-occupation'); ?>
                </p>
                <p class="name"><?php the_sub_field('middle-name'); ?></p>
              </div>
              <p class="goal"><?php the_sub_field('middle-goal'); ?></p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if (get_field('right-result')) : ?>
          <?php while (the_repeater_field('right-result')) : ?>
            <li>
              <h1><?php the_sub_field('right-title'); ?></h1>
              <div class="successful-img">
                <img src="<?php the_sub_field('right-img'); ?>" alt="" />
              </div>
              <div class="successful-wrapper">
                <p class="occupation">
                  <?php the_sub_field('right-occupation'); ?>
                </p>
                <p class="name"><?php the_sub_field('right-name'); ?></p>
              </div>
              <p class="goal"><?php the_sub_field('right-goal'); ?></p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </section>
    <section id="use">
      <h1>ご利用の流れ</h1>
      <ul>
        <li>
          <div class="use-left">
            <p class="use-number">01</p>
            <p class="use-ask">お問い合わせ</p>
            <p class="use-border"></p>
          </div>
          <div class="use-right">
            <p>まずはフォームまたはお電話からお申し込みください</p>
          </div>
        </li>
        <li>
          <div class="use-left">
            <p class="use-number">02</p>
            <p class="use-ask">ヒアリング</p>
            <p class="use-border"></p>
          </div>
          <div class="use-right">
            <p>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
          </div>
        </li>
        <li>
          <div class="use-left">
            <p class="use-number">03</p>
            <p class="use-ask">学習プランのご提供</p>
            <p class="use-border"></p>
          </div>
          <div class="use-right">
            <p>目標達成のために最適な学習プランをご提案致します。</p>
          </div>
        </li>
        <li>
          <div class="use-left">
            <p class="use-number">04</p>
            <p class="use-ask">ご入会</p>
            <p class="use-border"></p>
          </div>
          <div class="use-right">
            <p>お申込み完了後、レッスンがスタートします。</p>
          </div>
        </li>
      </ul>
    </section>

    <section id="question">
      <h1>よくある質問</h1>
      <ul>
        <li>
          <div class="ac-parent">
            <p class="cross-button">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
            <div class="span-tag">
              <span></span>
              <span></span>
            </div>
          </div>
          <p class="ac-child">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
        </li>
        <li>
          <div class="ac-parent">
            <p class="cross-button">教材はオリジナルのものを使用しているのでしょうか？</p>
            <div class="span-tag">
              <span></span>
              <span></span>
            </div>
          </div>
          <p class="ac-child">?????????????????????????????????????????????????????</p>
        </li>
        <li>
          <div class="ac-parent">
            <p class="cross-button">講師に日本人はいますか？</p>
            <div class="span-tag">
              <span></span>
              <span></span>
            </div>
          </div>
          <p class="ac-child">???????????????????????????????????????????</p>
        </li>
        <li>
          <div class="ac-parent">
            <p class="cross-button">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
            <div class="span-tag">
              <span></span>
              <span></span>
            </div>
          </div>
          <p class="ac-child">??????????????????????????????????????????????????????</p>
        </li>
      </ul>
    </section>
    <section id="blognnews">
      <div class="wrapper">
        <div class="blog">
          <h1>ブログ</h1>
          <ul>
            <?php
            $blogLoop = new WP_Query(array('post_type' => 'blog', 'posts_per_page' => 3));
            if (have_posts()) :
              while ($blogLoop->have_posts()) :
                $blogLoop->the_post();
            ?>
                <li>
                  <div class="blog-wrapper">
                    <div class="blog-img">
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
                    <div class="blog-content">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                        if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                          $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                          echo $title . '…';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </a>
                      <p><time datetime='<?php the_time('Y/m/d'); ?>'><?php the_time('Y/m/d'); ?></time></p>
                    </div>
                  </div>
                </li>
          </ul>
      <?php endwhile;
            endif;
            wp_reset_postdata();
      ?>
        </div>
        <div class="news">
          <h1>お知らせ</h1>
          <?php
          $newsLoop = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 3));
          if (have_posts()) :
            while ($newsLoop->have_posts()) :
              $newsLoop->the_post(); ?>
              <ul>
                <li>
                  <p><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                      $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </a>
                </li>
              </ul>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
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