<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package martonline
 */

?>
<div class="row">
    <span id='tgback-1'></span>
    <?php if( esc_attr(get_theme_mod( "tgback-1") != "" )) echo "<style>
                .welcome-page{background-image:url(".esc_attr(get_theme_mod( "tgback-1")."));} </style>
                "?>
    <div class="col-12 jumbotron jumbotron-fluid bg-yellow welcome-page" id="section_one">
        <div class="container text-center">
            <div class="wow animate__tada" data-wow-duration="2s" data-wow-delay="0.5s">
                <h1 class="display-4 text-capitalize font-weight-bold"><span id="tgtext-1">
                        <?php if( esc_attr(get_theme_mod( "tgtext-1") != "" )) {echo esc_attr(get_theme_mod( "tgtext-1"));} else {echo "Insert your text here";} ?>
                    </span><!-- #tgtext-1 -->
                </h1>
                <h5><span id="tgtext-2">
                        <?php if( esc_attr(get_theme_mod( "tgtext-2") != "" )) {echo esc_attr(get_theme_mod( "tgtext-2"));} else {echo "Insert your text here";} ?>
                    </span><!-- #tgtext-2 -->
                </h5>
                <button class="btn btn-lg bg-blue mt-4" role="button" id="btn-front">
                    <a id="tglink-a"
                        href="<?php if( esc_attr(get_theme_mod( "tglink-a") != "" )) {echo esc_attr(get_theme_mod( "tglink-a"));} else {echo "#";} ?>">
                        <span id="tgtext-3">
                            <?php if( esc_attr(get_theme_mod( "tgtext-3") != "" )) {echo esc_attr(get_theme_mod( "tgtext-3"));} else {echo "Insert your text here";} ?>
                        </span><!-- #tgtext-3 -->
                    </a>
                </button>
            </div>
        </div>
    </div>

    <div class="col-12" id="section_two">
        <div class="container text-center">
            <div class="row">
                <?php for ($i=1; $i <=6; $i++) {?>
                <div class="col-md-4 wow animate__fadeInRight" data-wow-duration="2.5s"
                    data-wow-delay="<?php echo 0.5+$i?>">
                    <a id=<?php echo "tglink-".$i ?>
                        href="<?php if( esc_attr(get_theme_mod( "tglink-".$i) != "" )) {echo esc_attr(get_theme_mod( "tglink-".$i);} else {echo "#";} ?>"
                        class="iluminat">
                        <span id=<?php echo "tglink-".$i ?>>
                            <img <?php if( esc_attr(get_theme_mod( "tgimg-".$i) != "" )) {echo "src='".esc_attr(get_theme_mod( "tgimg-".$i)."'";} else {echo " src='".get_template_directory_uri()."/img/200x200.png'";} ?>
                                id="<?php echo "tgimg-".$i ?>" class="circle" />
                        </span><!-- #img -->
                        <h5 class="card-title text-capitalize" id=<?php echo "categ-".$i ?>>
                            <?php if( esc_attr(get_theme_mod( "categ-".$i) != "" )) {echo esc_attr(get_theme_mod( "categ-".$i);} else {echo "Insert your text here";} ?>
                        </h5>
                        <p class="card-text" id=<?php echo "categ-".$i."s" ?>>
                            <?php if( esc_attr(get_theme_mod( "categ-".$i.'s') != "" )) {echo esc_attr(get_theme_mod( "categ-".$i.'s');} else {echo "Insert your text here";} ?>
                        </p>
                    </a>
                </div>
                <?php }?>

            </div>
        </div>
    </div>

    <span id='sepback-1'></span>
    <?php if( esc_attr(get_theme_mod( "sepback-1") != "" )) echo "<style>
                .separator{background-image:url(".esc_attr(get_theme_mod( "sepback-1")."));} </style>
                "?>
    <div class="col-12 container-fluid bg-info separator" id="Separator">
        <div class="container d-flex justify-content-end wow animate__fadeInLeft" data-wow-duration="1.3s"
            data-wow-delay="1s">
            <div class="card border-white bg-shadow m-5" style="max-width: 18rem;">
                <div class="card-body m-2 text-white">
                    <h5 class="card-title" id="septxt-1">
                        <?php if( esc_attr(get_theme_mod( "septxt-1") != "" )) {echo esc_attr(get_theme_mod( "septxt-1"));} else {echo "Insert your text here";} ?>
                    </h5>
                    <hr>
                    <p class="card-text lead" id="septxt-2">
                        <?php if( esc_attr(get_theme_mod( "septxt-2") != "" )) {echo esc_attr(get_theme_mod( "septxt-2"));} else {echo "Insert your text here";} ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 bg-green" id="section_three">
        <div class="container text-center wow animate__fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s">
            <span id="page_A">
            </span>
            <div class="pt-4">
                <?php if(( trim(esc_attr(get_theme_mod("page_A")) != "default" )&&( trim(esc_attr(get_theme_mod("page_A")) != "0" )) { 
                        $pagetoshow = esc_attr(get_theme_mod("page_A"); if (!empty($pagetoshow)) {
                            $args1 = array( "p" => "$pagetoshow", "post_type" => "page" ); 
                            $my_three_posts = new WP_Query( $args1 ); 
                                while ($my_three_posts -> have_posts()) : 
                            $my_three_posts -> the_post(); the_content(); endwhile;}
                            else {echo "<p style=\"text-align:center;\">
                					Select a page to show its content here using <strong>
				            		customize</strong>
                                    menu</p>";}} 
                            else {echo "<p style=\"text-align:center;\">
                                    Select a page to show its content here using <strong>
                                    customize</strong>
                                    menu</p>";}
                ?>
            </div>
        </div>
    </div>

    <span id='aboutback-1'></span>
    <?php if( esc_attr(get_theme_mod( "aboutback-1") != "" )) echo "<style>
                .about-page{background-image:url(".esc_attr(get_theme_mod( "aboutback-1")."));} </style>
                "?>
    <div class="col-12 jumbotron jumbotron-fluid bg-yellow about-page" id="section_four">
        <div class="container text-center text-white bg-shadow wow animate__fadeInLeft " data-wow-duration="1.7s"
            data-wow-delay="1s">
            <h4 class="display-4 text-capitalize" id="about-1">
                <?php if( esc_attr(get_theme_mod( "about-1") != "" )) {echo esc_attr(get_theme_mod( "about-1"));} else {echo "Insert your text here";} ?>
            </h4>
            <p class="lead" id="about-2">
                <?php if( esc_attr(get_theme_mod( "about-2") != "" )) {echo esc_attr(get_theme_mod( "about-2"));} else {echo "Insert your text here";} ?>
            </p>
            <div class="container text-center">
                <a id="about-btn" 
                    href="<?php if( esc_attr(get_theme_mod( "about-btn") != "" )) {echo esc_attr(get_theme_mod( "about-btn"));} else {echo "#";} ?>" 
                    class="btn btn-yellow mb-3 p-2 text-capitalize">
                    <span id="about-3">
                        <?php if( esc_attr(get_theme_mod( "about-3") != "" )) {echo esc_attr(get_theme_mod( "about-3"));} else {echo "more information";} ?>
                    </span>
                </a>
            </div>
        </div>
    </div>