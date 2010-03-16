	<div id="header">
        
        <?php if( Auth::instance()->logged_in( 'login' ) ): ?>
            <div id="user">Welcome, <strong><?php echo Auth::instance()->get_user()->username; ?></strong> | 
            <a id="logout" href="<?php echo url::base(); ?>users/logout">Logout</a>
            </div>
        <?php else: ?>
            <div id="top-login"><a href="<?php echo url::base(); ?>users/login">Login</a></div>
        <?php endif; ?>
        
		
		<div id="dunga"></div>
		<div id="meniu" style="float: right; padding-top: 10px; margin-right: 40px;">
			<a id="submeniu" href="<?php echo url::base(); ?>">Home</a>
			<a id="submeniu" href="<?php echo url::base(); ?>dashboard">Orar</a>
			<a id="submeniu" href="<?php echo url::base(); ?>coming-soon/">Cursuri</a>
			<a id="submeniu" href="<?php echo url::base(); ?>coming-soon/">Evenimente</a>
			<a id="submeniu" href="<?php echo url::base(); ?>coming-soon/">Agenda</a>
			<a id="submeniu" href="<?php echo url::base(); ?>coming-soon/">Contact</a>
		</div>
		<div id="logo2">
            <a href="<?php echo url::base(); ?>dashboard"><img src="<?php echo url::base(); ?>media/css/images/logo.png" alt="Universitatea de Vest din Timișoara" /></a>
        </div>
		
		<div style="display:none"></div>
	</div> <!--END header-->
