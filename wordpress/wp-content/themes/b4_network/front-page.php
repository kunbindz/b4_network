<?php get_header(); ?>
<?php
    $video = get_field('video');
    if( $video ): 
?>
<?php if ($video['label_scroll']):?>
<section id="section-video" data-section="1" data-title="<?= $video['label_scroll']?>">
    <div class="video_wrapper">

        <div class="video_background">
            <video autoplay loop muted playsinline style="" src="<?= $video['video']?>"></video>
            <a href="javascript:void(0)" class="btn-play">
            <?php
                $icon_play = $video['icon_play'];
                if( $icon_play ): 
            ?>
                <img src="<?php echo esc_url($icon_play['url']); ?>" alt="<?php echo esc_attr($icon_play['alt']); ?>">
            <?php else:?>
                <img src="<?php bloginfo('template_directory');?>/images/btn_play.png" alt="Play">
            <?php endif?>
            </a>
            <?php
                $title = $video['title'];
                if( $title ): 
            ?>
            <div class="section_title">
                <h1 class="font-Rubik font-weight-bold text-uppercase"><span class="title_with_underline"> <?= $title['title_up']?> </span>
                </h1>
                <h1 class="font-Rubik font-weight-bold text-uppercase"><span
                        class="title_with_underline"> <?= $title['title_down']?> </span></h1>
            </div>
            <?php endif;?>
        </div>

    </div>
    <!--social network desktop-->
    <div class="js-sidebar-height sidebar-left desktop-show">
        <div class="navigation-left ">
            <?php
                $logo = get_field('logo','option');
                if( $logo ): 
            ?> 
            <a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?= $logo['url']?>" alt="<?= $logo['alt']?>"></a>
            <?php endif;?>
            <?php
                $social_list = get_field('social_list','option');
                if( $social_list ): 
            ?>  
            <ul class="social_lists">
                <?php foreach ($social_list as &$value): ?>  
                    <li><a href="<?= $value['link']?>" class="hvr-youtube"><i class="<?= $value['icon']?>"></i></a></li>
                <?php endforeach;?>
            </ul>
            <?php endif?>
        </div>
    </div>
    <!--end social network-->

    <!--sidebar right-->
    <div class="w-100px  js-sidebar-height sidebar-right desktop-show">
        <div class="navigation-bar">
            <a href="javascriptcript:void(0)" class="btn-toggle-sidebar text-white">
                <i class="fas fa-bars"></i>
            </a>

            <div class="slide_parent">
                <div class="slide_wrapper d-inline-block">
                    <div class="slide_bar">
                    </div>
                </div>
            </div>

            <div class="text_rotated_wrapper">
                <div class="text-rotated">
                    <a href="javascript:void(0)" data-current-section="1" class=" font-Rubik font-weight-bold">Home</a>
                </div>
            </div>

            <div class="navigation-section w-100 text-center d-block">
                <p class="w-100 d-block"><a href="javascrip:void(0)" class="navigation-btn js-navigation-prev"
                                            data-section=""><i class="fas fa-chevron-up"></i></a></p>
                <p class="w-100 d-block"><a href="javascrip:void(0)" class="navigation-btn js-navigation-next"
                                            data-section=""><i class="fas fa-chevron-down"></i></a></p>
            </div>
        </div>
        <div class="navigation-sidemenu">
            <a href="javascriptcript:void(0)" class="btn-close-sidebar js-close-sidemenu text-white">
                <i class="fas fa-times"></i>
            </a>
            <div class="text_rotated_wrapper">
                <div class="text-rotated">
                    <a href="javascript:void(0)" class="font-weight-normal js-close-sidemenu">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!--end sidebar right-->

</section>
<?php endif;?>
<?php endif;?>
<?php
    $counter = get_field('counter');
    if( $counter ): 
?>
<div id="section-counter">
    <div class="col-md-10 col-12 offset-md-1 section_wrap offset-0">
        <div class="col-md-8 col-12 offset-md-2">
            <?php if( $counter['title'] ): ?>
                <h2><?= $counter['title']?></h2>
            <?php endif?>
            <?php if( $counter['description'] ): ?>
                <p class="intro mt-2"><?= $counter['description']?></p>
            <?php endif?>

        </div>
        <?php 
            $count_up = $counter['count_up'];
            if ($count_up):
        ?>
        <div class="col-12 mt-2">
            <div class="row">
                <?php 
                    if ($count_up['youtuber_subscribers']):
                ?>
                <div class="count d-inline-block col-md-3 col-6">
                    <h2 data-counter="<?= $count_up['youtuber_subscribers']['number']?>"><span>0</span>M +</h2>
                    <input type="hidden" value="<?= $count_up['youtuber_subscribers']['number']?>">
                    <p class="text-white text-center"><?= $count_up['youtuber_subscribers']['title']?></p>
                </div>
                <?php endif?>
                <?php 
                    if ($count_up['channels']):
                ?>
                <div class="count d-inline-block col-md-3 col-6">
                    <h2 data-counter="<?= $count_up['channels']['number']?>"><span>0</span>+</h2>
                    <input type="hidden" value="<?= $count_up['channels']['number']?>">
                    <p class="text-white text-center"><?= $count_up['channels']['title']?></p>
                </div>
                <?php endif?>
                <?php 
                    if ($count_up['monthly_views']):
                ?>
                <div class="count d-inline-block col-md-3 col-6">
                    <h2 data-counter="<?= $count_up['monthly_views']['number']?>"><span>0</span>M+</h2>
                    <input type="hidden" value="<?= $count_up['monthly_views']['number']?>">
                    <p class="text-white text-center"><?= $count_up['monthly_views']['title']?></p>
                </div>
                <?php endif?>
                <?php 
                    if ($count_up['total_content']):
                ?>
                <div class="count d-inline-block col-md-3 col-6">
                    <h2 data-counter="<?= $count_up['total_content']['number']?>"><span>0</span>+</h2>
                    <input type="hidden" value="<?= $count_up['total_content']['number']?>">
                    <p class="text-white text-center"><?= $count_up['total_content']['title']?></p>
                </div>
                <?php endif?>
            </div>
        </div>
        <?php endif?>
    </div>
</div>
<?php endif;?>

<?php
    $collablate = get_field('collablate');
    if( $collablate ): 
?>
<?php if ($collablate['label_scroll']):?>
<section id="section-collablate-with-us" data-section="2" data-title="<?= $collablate['label_scroll']?>">
    <div class="col-12 d-md-flex d-block section_wrap p-0">
        <div class="col-md-6 col-12 d-flex align-items-center text-right">
            <div class="w-100">
                <?php
                    $title = $collablate['title'];
                    if( $title ): 
                ?>
                <div class="section_title w-100">
                    <?php
                        if ($title['title_up']):
                    ?>
                        <h2 class="text-right w-100"><span class="title_with_underline"><?= $title['title_up']?></span></h2>
                    <?php endif?>
                    <?php
                        if ($title['title_down']):
                    ?>
                    <h2 class="text-right w-100"><span class="title_with_underline"><?= $title['title_down']?></span></h2>
                    <?php endif?>
                </div>
                <?php endif?>
                <?php if ($collablate['description']):?>
                <div class="intro w-100 mt-5 float-right">
                    <p>
                        <?= $collablate['description']?>
                    </p>
                </div>
                <?php endif?>
                <?php
                    $button = $collablate['button'];
                    if( $button ): 
                ?>
                <div class="w-100 mt-5 float-right">
                    <a href="<?= $button['link']?>"
                        class="btn btn-dark font-weight-500 border-radius-0 col-xl-3 col-lg-5 col-md-6 text-left col-5">
                        <?= $button['text']?><i class="fa fa-arrow-right text-right icon-goto-post float-right"></i></a>
                </div>
                <?php endif?>
            </div>
        </div>
        <div class="col-md-6 col-12 p-0 bg-section3">
        </div>
    </div>
</section>
<?php endif?>
<?php endif?>

<?php
    $our_studio = get_field('our_studio');
    if( $our_studio ): 
?>
<?php if ($our_studio['label_scroll']):?>
<section id="section-our-studio" data-section="3" data-title="<?= $our_studio['label_scroll']?>">
    <div class="col-12 d-md-flex d-block section_wrap p-0">
        <div class="col-md-6 col-12 p-0 bg-section4 mobile-hide"></div>
        <div class="col-md-6 col-12 d-flex align-items-center text-left">
            <div class="w-100">
                <?php
                    $title = $our_studio['title'];
                    if( $title ): 
                ?>
                <div class="section_title w-100">
                    <?php if ($title['title_up']):?>
                        <h2 class="text-left w-100"><span class="title_with_underline"><?= $title['title_up']?></span></h2>
                    <?php endif?>
                    <?php if ($title['title_down']):?>
                        <h2 class="text-left w-100"><span class="title_with_underline"><?= $title['title_down']?></span></h2>
                    <?php endif?>
                </div>
                <?php endif?>
                <?php if ($our_studio['description']):?>
                <div class="intro w-100 mt-5 float-left">
                    <p class="text-white">
                        <?= $our_studio['description']?>
                    </p>
                </div>
                <?php endif?>
                <?php
                    $button = $our_studio['button'];
                    if( $button ): 
                ?>
                <div class="w-100 mt-5 float-right">
                    <a href="<?= $button['link']?>"
                        class="btn btn-primary font-weight-500 text-left border-radius-0 col-xl-3 col-lg-5 col-md-6 col-5">
                        <?= $button['text']?><i class="fa fa-arrow-right text-right icon-goto-post float-right"></i></a>
                </div>
                <?php endif?>
            </div>
        </div>
        <div class="col-md-6 col-12 p-0 bg-section4 mobile-show"></div>
    </div>
</section>
<?php endif?>
<?php endif?>

<?php
    $our_projects = get_field('our_projects','option');
    if( $our_projects ): 
?>    
<?php if ($our_projects['label_scroll']):?>
<section id="section-our-project" data-section="4" data-title="<?= $our_projects['label_scroll']?>">
    <div class="col-12 d-flex align-items-center h-100">
        <div class="section-content col-xl-8 col-lg-12 offset-xl-2 text-center">
            <?php if ($our_projects['title']):?>
            <h2 class="text-white text-center"><?= $our_projects['title']?></h2>
            <?php endif?>
            <?php
                $slide = $our_projects['slide'];
                if( $slide ): 
            ?>
            <div class="col-12 swiper-container">
                <div class="slider-projects text-center swiper-wrapper">
              
                    <?php foreach ($slide as &$value_slide):
                        $slide_item = $value_slide['slide_item']
                    ?>  
                    <div class="swiper-slide">
                        <?php foreach ($slide_item as &$value_item):
                            $project_item = $value_item['project_item']
                        ?>  
                        <div class="project-item ">
                            
                            <div class="label_project text-right position-absolute">
                                <?php 
                                    $title = $project_item['title'];
                                    $link = $project_item['link'];
                                    if ($title && $link):
                                ?>
                                <div><a href="<?= $link?>" class="text-uppercase"><?= $title?> <i
                                        class="fa fa-arrow-down float-left icon-goto-post"></i></a>
                                </div>
                                <?php endif?>
                            </div>
                            <?php 
                                $image = $project_item['image'];
                                $link = $project_item['link'];
                                if ($image && $link):
                            ?>
                            <a href="<?= $link?>"><img src="<?= $image['url']?>" alt="<?= $image['alt']?>"></a>
                            <?php endif?>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                    <?php endforeach;?>
                   
                </div>
                <div class="mt-md-2 mt-4 d-inline-flex align-items-center">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
            <?php endif?>
        </div>
    </div>
</section>
<?php endif?>
<?php endif?>

<?php
    $our_clients = get_field('our_clients');
    if( $our_clients ): 
?>
<?php if ($our_clients['label_scroll']):?>
<section id="section-our-clients" data-section="5" data-title="<?= $our_clients['label_scroll']?>">
    <div class="col-12 d-md-flex d-block section_wrap p-0">
        <div class="col-md-6 col-12  d-flex align-items-center text-right">
            <div class="w-100">
            <?php
                $title = $our_clients['title'];
                if ($title):
            ?>
                <div class="section_title w-100">
                    <?php if($title['title_up']):?>
                    <h2 class="text-right w-100"><span class="title_with_underline"><?= $title['title_up']?></span></h2>
                    <?php endif?>
                    <?php if($title['title_down']):?>
                    <h2 class="text-right w-100"><span class="title_with_underline"><?= $title['title_down']?></span></h2>
                    <?php endif?>
                </div>
            <?php endif?>
            </div>
        </div>
        <?php
            $clients = $our_clients['clients'];
            if($clients):
        ?>
        <div class="col-md-6 col-12  p-0">
            <div class="col-12 d-flex align-items-center h-100 p-0">
                <div class="section-content text-center">
                    <div class="col-12 swiper-container">
                        <div class="slider-clients text-center swiper-wrapper">
                            <?php foreach ($clients as &$value_client):
                                $slide_item = $value_client['slide_item']
                            ?>  
                            <div class="swiper-slide">
                                <?php foreach ($slide_item as &$item):
                                    $image = $item['image']
                                ?>  
                                <div class="client-item ">
                                    <a href="javascript:void(0)"><img src="<?= $image['url']?>" alt="<?= $image['alt']?>"></a>
                                </div>
                                <?php endforeach;?>

                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="swiper-pagination-client mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif?>
    </div>
</section>
<?php endif?>
<?php endif?>

<?php
    $news = get_field('news');
    if( $news ): 
?>
<?php if ($news['label_scroll']):?>
<section id="section-news" class="d-flex align-items-center " data-section="6" data-title="<?= $news['label_scroll']?>">
    <div class="col-12 bg-section7 text-center">
        <?php if ($news['title']):?>
        <h2 class="w-100 text-center text-white mb-5 font-weight-bold"><?= $news['title']?></h2>
        <?php endif?>
        <?php 
            $post_objects = $news['posts'];
            if ($post_objects):
        ?>
        <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 d-flex align-items-center h-100">
            <div class="swiper-container">
                <div class="slider-news text-center swiper-wrapper">
                    <?php foreach( $post_objects as $post):?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></a>
                        <div class="content bg-white p-3 text-left">
                            <a href="<?php the_permalink(); ?>" class="title-content"><?php the_title(); ?></a>
                            <?php if ( $content_source == 'excerpt' ) { ?>
                                <div class="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php } else { ?>
                                <div class="wp_content intro text_trilines mt-2 mb-4 text-left">
                                    <?php the_content(); ?>
                                </div>
                            <?php } ?> 
                            
                            <a href="<?php the_permalink(); ?>" class="icon-goto-post"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
                <?php wp_reset_postdata();?>
                <div class="mt-4 d-inline-flex align-items-center">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
        </div>
        <?php endif?>
    </div>
</section>
<?php endif?>
<?php endif?>

<?php get_footer(); ?>	