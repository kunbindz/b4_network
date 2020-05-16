        <div class="footer">
            <?php
                $social_list = get_field('social_list','option');
                if( $social_list ): 
            ?>    
            <ul class="social_lists_footer text-center mb-0 mt-2">
                <?php foreach ($social_list as &$value):                
                ?>  
                    <li class="p-2"><a href="<?= $value['link']?>" class="hvr-youtube"><i class="<?= $value['icon']?>"></i></a></li>
                <?php endforeach;?>
            </ul>
            <?php endif?>
            <?php
                $copyright = get_field('copyright','option');
                if( $copyright ): 
            ?>    
            <p class="m-lg-4 m-2"><?= $copyright?></p>
            <?php endif?>
        </div>
        <?php
            $slide_menu = get_field('slide_menu','option');
            if( $slide_menu ): 
        ?>    
        <div class="side_menu_wrap col-12">
            <div class="row">
                <div class="col-xl-6 col-12 order-xl-0 order-1 bg-side-left">
                </div>
                <div class="col-xl-6 col-12 order-xl-1 order-0">
                    <div class="row h-100">
                        <div class="side_menu d-flex align-items-center">
                            <div>
                                <ul>
                                    <?php foreach ($slide_menu as &$value):    ?>            
                                    <li class="font-weight-bold p-md-3 p-2 text-white"><a href="<?= $value['link']?>" class=""><?= $value['name'] ?>
                                        <span><i class="fas fa-arrow-right ml-5"></i></span></a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>
</body>
<?php wp_footer()?>
</html>