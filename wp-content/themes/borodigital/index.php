<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'banner_home',
        'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        $id = get_the_ID();
        $img_icon_id = get_post_meta( $id, 'imagen_banner', false );
        $src_img_icon = wp_get_attachment_image_src( $img_icon_id[0], 'thumbnail_size' );
        $texto_banner = get_field( "texto_banner");
        $bc = get_field( "background_opacity");
?>
<div class="row align-items-center">
    <?php
        if ($bc) {
    ?>
    <div class="background-grey"></div>
    <?php
        }
    ?>
    <div class="col-12 no-padding banner-principal" style="background-image: url('<?php echo $src_img_icon[0]?>')">
        <!--
        <img src="<?php echo $src_img_icon[0]?>" alt="">
        -->
    </div>
    <div class="text-banner-principal">
        <h1 class="text-banner"><?php echo $texto_banner; ?></h1>
    </div>
</div>
<?php
    endwhile;
?>

<div class="row row-about-us justify-content-md-center hideme">
    <div class="col-12 about-us">
        <?php
            $args = array(
                'post_type' => 'about_us',
                'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <h1 class="title-about-us text-center"><?php the_title()?></h1>
        <hr class="linea">
    </div>
    <div class="col-md-6">
        <h3 class="text-about-us lead">
            <?php the_content(); ?>
        </h3>
    </div>
        <?php
            endwhile;
        ?>
</div>

<div class="row row-servicios justify-content-md-center hideme">
    <div class="col-md-12 servicios">
        <h1 class="title-servicios-row text-center">Services</h1>
        <hr class="linea">
    </div>
    <?php
    $args = array( 'post_type' => 'servicio' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        $id = get_the_ID();
        $img_icon_id = get_post_meta( $id, 'imagen_del_servicio', false );
        $src_img_icon = wp_get_attachment_image_src( $img_icon_id[0], 'thumbnail_size' );
    ?>
    <div class="col-md-3 container-servicios">
        <div class="text-center">
            <img class="icon-services" src="<?php echo $src_img_icon[0]?>" alt="">
        </div>
        <h1 class="text-center title-servicio"><?php the_title() ?></h1>
        <p class="text-servicio lead"><?php the_content() ?></p>
    </div>
    <?php
    endwhile;
    ?>
</div>

<div class="row row-skill justify-content-md-center hideme">
    <div class="col-md-10 skill">
        <h1 class="text-center title-skill-row">Skills</h1>
        <hr class="linea">
        <div class="col-12 grid-images">
            <?php
            $args = array(
                'post_type' => 'habilidad',
                'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>