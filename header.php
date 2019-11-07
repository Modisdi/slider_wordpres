<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom Fonts CSS -->
<!--    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">-->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->

    <!--    <!-- Reset -->
    <!--    <link rel="stylesheet" href="css/reset.css">-->
    <!---->
    <!--    <!--    <!-- Bootstrap Grid -->
    <!--    <!--    <link rel="stylesheet" href="css/grid.css">-->
    <!---->
    <!--    <!-- Style CSS -->
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <!--    <link rel="stylesheet" href="css/media.css">-->


    <?php wp_head(); ?>

    <title>Test</title>
</head>
<body>
<header>
    <div class="container">
        <div class="wrapper-logo">
            <a href="#" ><img  src="<?php the_field('header-logo') ?>" class="logo" alt="logo"></a>
        </div>

        <div class="header-contact">

            <?php while (have_rows('header-tel')): the_row(); ?>
            <a href="tel:+7(499)777-77-77" class="header-phone"><?php the_sub_field('header-tel-1') ?></a>
            <?php endwhile; ?>

            <a href="#"  class="header-feedback">
                <span class="feedback-a"><?php the_field('open-feedback') ?></span>
            </a>
        </div>
    </div>
</header>
