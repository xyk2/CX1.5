	<div id='mobile_nav'>
		<button class="nav-button">&nbsp;</button>
		<ul class="primary-nav">
			<li><a href='/' class='active'><?php echo L::nav_home; ?></a></li>
			<li><a href='/#aboutCX'><?php echo L::nav_about; ?></a></li>
			<li><a href='/#featured'><?php echo L::nav_press; ?></a></li> 
			<li><a href='/presskit'><?php echo L::nav_press_kit; ?></a></li> 
			<li><a href='/pressrelease'><?php echo L::nav_press_release; ?></a></li> 
			<!-- <li><a href='/#countdown'><?php echo L::nav_tournament_CX; ?></a></li>   -->
			<li><a href='/#team'><?php echo L::nav_team; ?></a></li> 
			<li><a href='/#contact'><?php echo L::nav_contact; ?></a></li>
			<li><a href='/orangearmy'><?php echo L::orange_army_name; ?></a></li>
			<li><a href='http://sports.choxue.com/leagues'>LEAGUES</a></li>
			<li><a href='http://sports.choxue.com/leagues/4'>LEAGUES > HBL</a></li>
			<li><a href='http://wsbl.choxue.com/'>LEAGUES > WSBL</a></li>
			<li><a href='http://sbl.choxue.com/'>LEAGUES > SBL</a></li>
		</ul>
	</div>
	
	<div class="nav" id='desktop-navbar'>  
		<div class="internalNav">
			<a href='/' class='active'><?php echo L::nav_home; ?></a>  
			<a href='/#aboutCX'><?php echo L::nav_about; ?></a> 
			<li class="dropdown">
				<a href="http://www.choxue.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo L::nav_press; ?> <span class="caret"></span></a>
				<ul class="dropdown-menu" style='min-width: 100px;'>
					<li><a href="/#featured"><?php echo L::nav_press; ?></a></li>
					<li><a href="/presskit"><?php echo L::nav_press_kit; ?></a></li>
					<li><a href="/pressrelease"><?php echo L::nav_press_release; ?></a></li>
				</ul>
			</li>

			<!-- <a href='/#countdown'><?php echo L::nav_tournament_CX; ?></a>   -->
			<a href='/#team'><?php echo L::nav_team; ?></a>
			<a href='/#contact'><?php echo L::nav_contact; ?></a>  
			<a href='/orangearmy'><?php echo L::orange_army_name; ?></a>  
			<a class='active' style='border: 1px solid transparent; cursor: none'>|</a>  
			<li class="dropdown">
				<a href="http://sports.choxue.com/leagues" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo L::nav_leagues; ?> <span class="caret"></span></a>
				<ul class="dropdown-menu" style='min-width: 100px;'>
					<li><a href="http://sports.choxue.com/leagues/4">HBL</a></li>
					<li><a href="http://wsbl.choxue.com/">WSBL</a></li>
					<li><a href="http://sbl.choxue.com/">SBL</a></li>
					<li><a href="http://jonesCup.choxue.com/"><?php echo L::nav_tournament_JonesCup; ?></a></li>
				</ul>
			</li>
		</div>
		<div class="" id='menuFade'>
			<div class="cx-badge">
				<a href="https://v2.choxue.com"><img src="./img/cx_logo.png" title="球學平台" height="45px" /></a>

			</div>

		</div>				
    </div>