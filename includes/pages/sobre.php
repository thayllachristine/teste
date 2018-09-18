<section class="sobre">
    <div class="container">

        <div class="textos">
            <p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipisicing elit. Optio autem fugit, perspiciatis expedita suscipit vel doloremque ullam excepturi aperiam, quam. Odio necessitatibus debitis eligendi mollitia! Consequuntur, perferendis minima assumenda voluptas.
            </p>
        </div>

        <?php query_posts('post_type=habilidades&post_per_page=-1'); ?>
 <ul class="habilidades">
       
            <?php if(have_posts()): ?>

                <?php while(have_posts()): the_post(); ?>


            <li class="habilidade-<?php the_field('nivel'); ?>">


                <h2>
                    <style>
                        .<?php the_field('icone'); ?> {
                            <?php if(get_field('cor-do-icone')): ?>
                                color: <?php the_field('cor-do-icone'); ?>;
                            <?php else : ?>
                                color: #000;
                            <?php endif; ?>
                        }
                    </style>


                    <i class="fab fa-<?php the_field('icone'); ?>"></i><strong><?php the_title(); ?></strong> // <?php the_field('nivel') ?>0%
                    <div class="barra"><span></span></div>
                </h2>
            </li>
            
      
            <?php endwhile; ?>

            <?php else : ?>
                Não há habilidades cadastradas!

            <?php endif; ?>
  </ul>
        <?php wp_reset_query(); ?>


        <a href="portifolio.html" class="botao medio"><i class="far fa-image"></i> Acessar Portifolio </a>
    
    </div>
</section>