<?php get_header(); the_post(); ?>

<section class="header">
    <!-- <span class="share" style="right: 20px;">
        <i class="fa fa-share-alt"></i>
        <a href="" class="fa fa-envelope"></a>
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-linkedin"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-google-plus"></a>
    </span>
     -->

    <div class="image">
        <?php the_post_thumbnail(); ?>
        <span class="holder" style="opacity: 1;">
          <div class="container">
            <h1><span><?php the_title(); ?></span></h1>
          </div>
        </span>
    </div>

    <div class="fixed-action-btn vertical">
     <a id="share-button" class="off btn-floating btn-large waves-effect waves-light">
       <i class="fa fa-share-alt"></i>
     </a>
     <!-- <ul id="share-links">
       <li><a id="share-email" class="btn-floating red"><i class="fa fa-envelope"></i></a></li>
       <li><a id="share-facebook" class="btn-floating yellow darken-1"><i class="fa fa-facebook"></i></a></li>
       <li><a id="share-linkedin" class="btn-floating green"><i class="fa fa-linkedin"></i></a></li>
       <li><a id="share-twitter" class="btn-floating blue"><i class="fa fa-twitter"></i></a></li>
       <li><a id="share-google" class="btn-floating blue"><i class="fa fa-google-plus"></i></a></li>
     </ul> -->
    </div>

    <div class="fixed" style="display: none;">
        <div class="wrapper">
            <span><?php the_title(); ?></span>
        </div>
    </div>
</section>

<!-- fechando onload
</div>
 =============== -->

<section class="post">
    <div class="container">
        <div class="row">
            <aside class="col s3">
              <div class="aside-fixed">
                <div class="block">
                    <span>Categorias</span>
                    <ul id="list-categories">
                      <?php wp_list_categories(array('title_li' => '')); ?>
                    </ul>
                </div>
                <div class="block form-rec">
                  <span>Receba nossas novidades</span>
                  <form id="form-subscribe">
                    <div>
                        <input placeholder="Digite seu e-mail" type="text" name="email">
                        <button class="fa fa-angle-right waves-effect waves-light"></button>
                    </div>
                  </form>
                </div>
                <?php if( get_field('ebook') ) : ?>
                  <div class="block">
                    <a href="<?php the_field('link_do_ebook') ?>">
                      <img src="<?php the_field('ebook'); ?>">
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </aside>
            <div class="col s8">
              <article>
                <div class="content">
                  <?php the_content() ?>
                </div>
              </article>
              <div id="area-blog" class="content">

                <h2>Postagens relacionadas</h2>

                <div id="slider">
                  <ul class="slides">
                    <div class="row">
                      <?php
                        $id_principal = get_the_ID();
                        $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 4
                        );
                        $query = new WP_Query($args);
                        while( $query -> have_posts() ) : $query -> the_post();
                        $id_relacionados = get_the_ID();
                        if( $id_principal != $id_relacionados ) :
                      ?>

                        <div class="col s4">
                          <li>
                            <div class="card z-depth-1">
                             <a href="<?php the_permalink() ?>" class="card-image">
                               <div class="img">
                                 <?php the_post_thumbnail(); ?>
                               </div>
                               <span class="card-title"><?php the_title() ?></span>
                             </a>
                             <div class="card-content">
                               <?php the_excerpt() ?>
                             </div>
                             <div class="area-date">
                               <span><?php the_category(', ') ?>;</span>
                               <a href="<?php the_permalink(); ?>" class="leia">LEIA MAIS</a>
                             </div>
                           </div>
                          </li>
                        </div>

                      <?php endif; endwhile; ?>
                    </div>
                  </ul>

                </div>

                <svg class="division" viewBox="0 0 2000 191" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(0.000000, -795.000000)" id="Path-2" fill="#ffffff">
                          <polygon points="0 984.719971 0 949.224229 2000 796 2000 984.341293"></polygon>
                      </g>
                  </g>
                </svg>

              </div>

            </div>
        </div>

            <!-- <div class="box-comments">

              <div class="comments">
                <span class="title">Nenhum comentário</span>
              </div>

              <div id="respond" class="comment-respond">
  				          <h3 id="reply-title" class="comment-reply-title">
                      Deixe o seu comentário
                      <small>
                        <a rel="nofollow" id="cancel-comment-reply-link" href="/quem-ganha-e-quem-perde-com-a-alta-do-dolar/#respond" style="display:none;">
                          Cancelar resposta
                        </a>
                      </small>
                    </h3>

  									<form action="" method="post" id="commentform" class="comment-form">
  										<p class="comment-notes">
                        <span id="email-notes">O seu endereço de email não será publicado.</span>
                        Campos obrigatórios são marcados com <span class="required">*</span>
                      </p>

                      <div class="comment-form-author">
                        <input id="author" name="author" type="text" value="" size="30">
                        <label for="author">Nome*</label>
                        <span></span>
                      </div>

                      <div class="comment-form-email">
                        <input id="email" name="email" type="text" value="" size="30">
                        <label for="email">Email*</label>
                        <span></span>
                      </div>

  										<div class="comment-form-comment">
                        <textarea id="comment" name="comment" aria-required="true"></textarea>
                        <label for="comment">Comentário*</label>
                        <span></span>
                      </div>

  						        <p class="form-submit">
                        <input name="submit" type="submit" id="submit" class="submit" value="Publicar comentário">
                        <input type="hidden" name="comment_post_ID" value="267" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                      </p>
                    </form>

  						</div>
            </div> -->

        </div>
    </div>
</section>

<!-- <div id="share">
  <a href="javascript:void(0)" class="at-menu-close"><i class="material-icons">close</i></a>
  <div id="flex">
    <h2>Compartilhar</h2>
    <h3><?php echo get_post_permalink(); ?></h3>
    <div id="areaShare">
      <div class="preloader-wrapper active">
        <div class="spinner-layer">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<div id="filter-share"></div>

<?php get_footer(); ?>
