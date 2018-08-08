<?php
// TEMPLATE NAME: Comunidade
 get_header();
?>
<section class="categories">
  <h1><strong>Comunidade Escola Direta</strong></h1>
  <div class="row">
    <div class="container">
      <div class="col s1"></div>
      <div class="col s10">
        <ul class="tabs">
          <li data-id="0" class="tab col s3" id="todos"><a href="javascript:void(0)">TODOS</a></li>
          <li data-id="1" class="tab col s3"><a href="javascript:void(0)">Para a escola</a></li>
          <li data-id="2" class="tab col s3"><a href="javascript:void(0)">Para os pais</a></li>
          <li data-id="3" class="tab col s3"><a href="javascript:void(0)">Novidades</a></li>
        </ul>
      </div>
      <div class="col s1"></div>
  </div>
</section>

<div class="list">

  <div id="cat-0" class="wrapper cat" style="display: block">
      <?php
          $args = array('post_type' => 'post', 'posts_per_page' => 9999, 'category_name' => 'todos');
          $query = new WP_Query($args);
          if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
      ?>

        <?php include 'parts/card-blog.php' ?>

        <?php endwhile; else: echo '<p>Desculpe, não existem posts ainda.</p>'; ?>

      <?php endif; ?>

      <div class="more-wrapper">
        <a href="javascript:void(0)" class="btn more">CARREGAR MAIS</a>
      </div>

  </div>

  <div id="cat-1" class="wrapper cat">
      <?php
          $args = array('post_type' => 'post', 'posts_per_page' => 999, 'category_name' => 'para-a-escola');
          $query = new WP_Query($args);
          if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
      ?>

        <?php include 'parts/card-blog.php' ?>

        <?php endwhile; else: echo '<p>Não existe post cadastrado para esta categoria.</p>'; ?>

      <?php endif; ?>

      <div class="more-wrapper">
        <a href="javascript:void(0)" class="btn more">CARREGAR MAIS</a>
      </div>

  </div>

  <div id="cat-2" class="wrapper cat">
      <?php
          $args = array('post_type' => 'post', 'posts_per_page' => 999, 'category_name' => 'para-os-pais');
          $query = new WP_Query($args);
          if($query->have_posts()) :
          while($query->have_posts()): $query->the_post();
      ?>

        <?php include 'parts/card-blog.php' ?>

        <?php endwhile; else: echo '<p>Não existe post cadastrado para esta categoria.</p>'; ?>

      <?php endif; ?>

      <div class="more-wrapper">
        <a href="javascript:void(0)" class="btn more">CARREGAR MAIS</a>
      </div>

  </div>

  <div id="cat-3" class="wrapper cat">
      <?php
          $args = array('post_type' => 'post', 'posts_per_page' => 999, 'category_name' => 'novidades');
          $query = new WP_Query($args);
          if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
      ?>

        <?php include 'parts/card-blog.php' ?>

        <?php endwhile; else: echo '<p>Não existe post cadastrado para esta categoria.</p>'; ?>

      <?php endif; ?>

      <div class="more-wrapper">
        <a href="javascript:void(0)" class="btn more">CARREGAR MAIS</a>
      </div>

  </div>

  <!-- <a href="#" class="btn button-green">VER MAIS MATÉRIAS</a> -->

</div>
<?php get_footer() ?>
