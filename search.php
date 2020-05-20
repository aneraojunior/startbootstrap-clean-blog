<?php get_header(); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?php header_image(); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Busca por <small>#<?php echo get_search_query(); ?></small></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <?php if(is_active_sidebar('pesquisar-resultado-busca')) : ?>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php dynamic_sidebar('pesquisar-resultado-busca'); ?>
                </div>
            <?php endif; ?>

            <div class="col-lg-8 col-md-10 mx-auto">
                <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/content', get_post_format() );
                endwhile;
                ?>

                <div class="clearfix">
                <span class="float-right">
                    <?php next_posts_link("Mais antigos →"); ?>
                </span>
                    <span class="float-left">
                    <?php previous_posts_link("← Mais novos");?>
                </span>
                </div>

                <div class="clearfix">
                    <?php else : ?>
                        <br>
                        <h2>Ops...nenhum resultado encontrado</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <hr>

<?php get_footer(); ?>