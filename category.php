<?php
// TEMPLATE NAME: Comunidade
 get_header();
?>
<section class="categories">
  <h1><strong>Comunidade Escola Direta</strong></h1>
  <div class="row">
    <div class="container">
      <ul class="tabs">

        <?php
          $url = str_replace('/categoria/', '', $_SERVER['REQUEST_URI']);
          $url = str_replace('/', '', $url);
          $categoria = $url;
          $url = str_replace('-', ' ', $url);
          $url = ucfirst($url);
        ?>

        <li data-id="0" id="todos"><a href="javascript:void(0)"><?php echo $url; ?></a></li>
        <?php if( $categoria != 'para-a-escola' ) : ?>
          <li data-id="1" class="tab col s3"><a href="javascript:void(0)">Para a escola</a></li>
        <?php endif; ?>

        <?php if( $categoria != 'para-os-pais' ) : ?>
          <li data-id="2" class="tab col s3"><a href="javascript:void(0)">Para os pais</a></li>
        <?php endif; ?>

        <?php if( $categoria != 'novidades' ) : ?>
          <li data-id="3" class="tab col s3"><a href="javascript:void(0)">Novidades</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>

<div class="list">

  <div id="cat-0" class="wrapper cat">
      <?php
          $url = str_replace('-', ' ', $url);
          $args = array('post_type' => 'post', 'posts_per_page' => 9999, 'category_name' => $categoria);
          $query = new WP_Query($args);
          if($query->have_posts()) :
            while($query->have_posts()): $query->the_post();
      ?>

        <?php include 'parts/card-blog.php' ?>

        <?php endwhile; else: echo '<p>Desculpe, não existem posts ainda.</p>'; ?>

      <?php endif; ?>

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

  </div>

  <!-- <a href="#" class="btn button-green">VER MAIS MATÉRIAS</a> -->

</div>
<?php get_footer() ?>
