<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>

<html>
<head>

	<meta charset="UFT-8" />
	<title><?php echo html::specialchars($title) ?></title>

    <style>
        @import "<?php echo url::base(); ?>media/css/style.css";
    </style>
    <style>
        @import "<?php echo url::base(); ?>media/css/calendar/calendar.css";
    </style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

</head>
<body>
    <div id="container">
        <?php
        if( !isset( $hideHeader ) )
            echo View::factory( 'header' )->set( compact( 'title' ) ); ?>
        <div id="content_wrapper">
            <?php echo $content ?>
        </div>
    </div>
</body>
</html>