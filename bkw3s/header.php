<?php
/**
 * User: Torsten Brieskorn
 * Date: 13.11.17
 */
?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header class="w3-grey" style="height: 50px">
        <div class="w3-center">
            <a href="/">home</a>
        </div>
    </header>

<div id="page" class="w3-container w3-padding">