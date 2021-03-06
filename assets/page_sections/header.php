<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:100,300,400,700' rel='stylesheet' type='text/css'>

        <?php
            echo '<link rel="stylesheet" type="text/css" href="' . $base_url . 'assets/css/style.css">';
        ?>
    </head>

    <?php echo '<body id="' . strtolower( str_replace(' ', '_', $title) ) . '">'; ?>
        <header id="main">
        	<?php 
                include($base_url . 'assets/page_sections/nav.php'); 
                echo '<a href="' . $base_url . '">';
                include($base_url . 'assets/page_sections/logo.php');
            ?>
            	<h1>
    	    		Blurbb
    	    	</h1>
        	</a>
        </header>