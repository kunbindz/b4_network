<?php get_header(); ?>
        <?php
            $collaborate = get_field('collaborate');
            if( $collaborate ): 
        ?>
        <?php if ($collaborate['label_scroll']):?>
        <section id="section-collaboration-content" data-section="1" data-title="<?= $collaborate['label_scroll']?>">
            <div class="section-collaboration_wrapper">
                <div class="section-collaboration-content_bg">
                    <div class="section_title">
                        <?php if ($collaborate['title_up']):?>
                        <h1 class="font-Rubik font-weight-bold text-uppercase"><span class="title_with_underline"> <?= $collaborate['title_up']?> </span>
                        </h1>
                        <?php endif?>
                        <?php if ($collaborate['title_down']):?>
                        <h1 class="font-Rubik font-weight-bold text-uppercase"><span
                                class="title_with_underline"> <?= $collaborate['title_down']?> </span></h1>
                        <?php endif?>
                    </div>
                </div>
            </div>
            <div class="js-sidebar-height sidebar-left">
                <div class="navigation-left desktop-show">
                    <?php
                        $logo = get_field('logo','option');
                        if( $logo ): 
                    ?> 
                        <a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?= $logo['url']?>" alt="<?= $logo['alt']?>"></a>
                    <?php endif?>
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
            <div class="w-100px js-sidebar-height sidebar-right desktop-show">
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
                            <a href="javascript:void(0)" data-current-section="1" class=" font-Rubik font-weight-bold">Collaboration</a>
                        </div>
                    </div>

                    <div class="navigation-section w-100 text-center d-block">
                        <p class="w-100 d-block"><a href="javascrip:void(0)" class="navigation-btn js-navigation-prev"
                                                    data-section=""><i class="fas fa-chevron-up"></i></a></p>
                        <p class="w-100 d-block"><a href="javascrip:void(0)" class="navigation-btn js-navigation-next"
                                                    data-section=""><i class="fas fa-chevron-down"></i></a></p>
                    </div>
                </div>
                <div class="navigation-sidemenu ">
                    <a href="javascript:void(0)" class="btn-close-sidebar js-close-sidemenu text-white">
                        <i class="fas fa-times"></i>
                    </a>
                    <div class="text_rotated_wrapper">
                        <div class="text-rotated">
                            <a href="javascript:void(0)" class="font-weight-normal js-close-sidemenu">Close</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php endif?>
        <?php endif?>
        <?php
            $content_title = get_field('content_title');
            if( $content_title ): 
        ?>
        <div class="content_title">
            <div class="col-md-10 col-12 offset-md-1 section_wrap offset-0">
                <div class="col-md-8 col-12 offset-md-2">
                    <?php if ($content_title['title']):?>
                    <h2><?= $content_title['title']?></h2>
                    <?php endif?>
                    <?php if ($content_title['description']):?>
                    <p class="intro mt-2"><?= $content_title['description']?></p>
                    <?php endif?>
                </div>
            </div>
        </div>
        <?php endif?>
        <?php
            $our_studio = get_field('our_studio');
            if( $our_studio ): 
        ?>
        <?php
            $title = $our_studio['title'];
            if ($title):
        ?>
        <section id="section-collablate-with-us" class="section-content" data-section="2" data-title="<?= $title['title_up'] ?> <?= $title['title_down']?>">
            <div class="col-12 d-md-flex d-block section_wrap p-0">
                <div class="col-6 p-0 bg-section4 mobile-hide">
                </div>
                <div class="col-md-6 col-12 d-flex align-items-center text-left">
                    <div class="w-100">
                        <div class="section_title w-100">
                            <?php if ($title['title_up']):?>
                            <h2 class="text-left w-100"><span class="title_with_underline"><?= $title['title_up']?></span></h2>
                            <?php endif?>
                            <?php if ($title['title_down']):?>
                            <h2 class="text-left w-100"><span class="title_with_underline"><?= $title['title_down']?></span></h2>
                            <?php endif?>
                        </div>

                        <?php if ($our_studio['description']):?>
                        <div class="intro w-100 mt-5 float-left">
                            <p class="text-left">
                                <?= $our_studio['description']?>
                            </p>
                        </div>
                        <?php endif?>
                        <?php 
                            $button = $our_studio['button'];
                            if ($button):
                        ?>
                        <div class="w-100 mt-5 float-left">
                            <a href="<?= $button['link']?>"
                               class="btn btn-dark font-weight-500 border-radius-0 col-xl-3 col-lg-5 col-md-6 text-left col-5">
                               <?= $button['text']?> <i class="fa fa-arrow-right text-right icon-goto-post float-right"></i></a>
                        </div>
                        <?php endif?>
                    </div>
                </div>
                <div class="col-12 p-0 bg-section4 mobile-show">
                </div>

            </div>
        </section>
        <?php endif?>
        <?php endif?>
        
        <?php
            $our_projects = get_field('our_projects','option');
            if( $our_projects ): 
        ?>    
        <?php if ($our_projects['label_scroll']):?>
        <section id="section-our-project" data-section="3" data-title="<?= $our_projects['label_scroll']?>">
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
                                            <div><a href="<?= $link?>" class="text-uppercase"><?= $title ?> <i
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
                            <?php endforeach?>
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
            $contact = get_field('contact');
            if( $contact ): 
        ?>    
        <?php if ($contact['label_scroll']):?>
        <section id="section-contact" data-section="4" data-title="<?= $contact['label_scroll']?>">
            <div class="col-12 d-md-flex d-block section_wrap p-0 mb-md-0 mb-3">
                <div class="col-md-6 col-12 d-md-flex d-block align-items-center text-left p-md-0 p-3">
                    <div class="col-lg-9 col-md-11 offset-lg-2 offset-md-1">
                        <?php 
                            $title = $contact['title'];
                            if ($title):
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
                        <div class="intro col-12 mt-5 p-0">
                            <form action="">
                                <?php if ($contact['form_contact']):?>
                                    <?= $contact['form_contact']?>
                                <?php endif?>
                                <!--code contact form 7-->
                                <!-- [text* your-name class:form-control class:border-radius-0 placeholder "Your Name"]
                                [email* your-email class:form-control class:border-radius-0 placeholder "Your Email"]
                                [tel* your-phone class:form-control class:border-radius-0 placeholder "Your Phone Number"]
                                [textarea* your-message class:form-control class:border-radius-0 placeholder "Message"]
                                [submit class:btn class:btn-primary class:font-weight-500 class:border-radius-0 class:col-xl-3 class:col-lg-5 class:col-md-6 class:text-left class:float-right class:col-5 "Connect"]
                                <button type="submit" class="btn btn-primary font-weight-500 border-radius-0 col-xl-3 wpcf7-form-control wpcf7-submit col-lg-5 col-md-6 text-left float-right col-5">Connect <i class="fa fa-arrow-right text-right icon-goto-post float-right"></i></button> -->
                                <!--endcode-->
                                
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control border-radius-0" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-0" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-radius-0"
                                           placeholder="Your Phone Number">
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control border-radius-0" rows="3" cols="30"
                                              placeholder="Message"></textarea>
                                </div>
                                <div class="w-100 float-right">
                                    <a href="#"
                                       class="btn btn-primary font-weight-500 border-radius-0 col-xl-3 col-lg-5 col-md-6 text-left float-right col-5">Connect
                                        <i class="fa fa-arrow-right text-right icon-goto-post float-right"></i></a>
                                </div> -->
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12 float-left p-0 bg-section3 mt-md-0 mt-4">
                </div>
            </div>
        </section>
        <?php endif?>
        <?php endif?>

<?php get_footer(); ?>	
