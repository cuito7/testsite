<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header_div" ><a href="http://localhost:8888/"><img src="<?php echo get_template_directory_uri();?>/img/Cuito_Ant.png" ></a></div>
        <div class="dropdown">
          <button class="dropbtn">on the loose</button>
          <div class="dropdown-content">
            <a href="http://localhost:8888/2020/06/10/atom-2/">ATOM</a>
            <a href="http://localhost:8888/2020/06/10/roots-fruits/">ROOTS&FRUITS</a>
            <a href="http://localhost:8888/2020/06/10/the-search/">THE SEARCH</a>
            <a href="http://localhost:8888/2020/06/10/we-here/">WE HERE</a>
          </div>
        </div>
    </header>