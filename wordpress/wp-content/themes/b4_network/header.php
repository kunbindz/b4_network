<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('');
    }?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700;900&display=swap" rel="stylesheet">
    <?php wp_head()?>
</head>
<body>
<div class="container-fluid home">
    <div class="row">
        <?php
            $logo = get_field('logo','option');
            if( $logo ): 
        ?> 
        <div class="navigation-mobile col-12 p-3">
            <a href="<?php echo get_site_url(); ?>" class="logo-mobile float-left"><img src="<?= $logo['url']?>" alt="<?= $logo['alt']?>"></a>
            <a href="javascript:void(0)" class="btn-toggle-sidebar text-white float-right">
                <i class="fas fa-bars"></i>
            </a>
            <a href="javascript:void(0)" class="btn-close-sidebar text-white float-right font-weight-normal js-close-sidemenu"> Close<i class=" ml-3 fas fa-times font-weight-bold"></i></a>
        </div>
        <?php endif;?>