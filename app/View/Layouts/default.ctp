<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav'));
		echo '<!--[if IE 6]>'.$this->Html->css('ie6').'<![endif]-->';
		echo '<!--[if IE 7]>'.$this->Html->css('ie').'<![endif]-->';
		echo $this->Html->script(array('jquery-1.3.2.min.js', 'jquery-ui.js', 'jquery-fluid16.js'));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="container_16">			
		<div class="grid_16">
			<h1 id="branding">
				<a href="/">Portal de Vendas</a>
			</h1>
		</div>
		<div class="clear"></div>
		<div class="grid_16">
			 <?php echo $this->element('admin/main_menu'); ?>
		</div>
		
		<div class="clear" style="height: 10px; width: 100%;"></div>
		<div class="grid_4">
			<div class="box">
				<h2>Design Process</h2>
				<div class="block">
					<p>Design is based on the inspiration of past accomplishments. On that foundation, we can build upon those achievements to shape the future. Design is about life — past, present and future — and the learning process that happens between birth and death. It is about community and shared knowledge and experience. It is the passion to build on what we've learned to create something better.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Design Influences</h2>
				<div class="block">
					<p>The words "design influences" can be understood as both a plural noun and as subject and verb. The plural noun speaks of those who have come before us and paved the way. The verb speaks of the responsibility of design to lead the way. By understanding where we have come from, we have a better idea of where we are going and, perhaps, where we should be heading.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Inspiration</h2>
				<div class="block">
					<p>I have been inspired by the work of many who have pioneered advances in Web Standards, including 
			<a href="http://www.31three.com/" title="www.31three.com">Jesse Bennett-Chamberlain</a>, 
			<a href="http://www.stopdesign.com/" title="www.stopdesign.com">Douglas Bowman</a>, 
			<a href="http://www.chaoticpattern.com/" title="www.chaoticpattern.com">Allen Chang</a>, 
			<a href="http://www.stuffandnonsense.co.uk/" title="www.stuffandnonsense.co.uk">Andy Clarke</a>, 
			<a href="http://www.hicksdesign.co.uk/" title="www.hicksdesign.co.uk">Jon Hicks</a>, 
			<a href="http://www.shauninman.com/" title="www.shauninman.com">Shaun Inman</a>, 
			<a href="http://www.cameronmoll.com/" title="www.cameronmoll.com">Cameron Moll</a>, 
			<a href="http://veerle.duoh.com/" title="veerle.duoh.com">Veerle Pieters</a>, 
			<a href="http://www.jasonsantamaria.com/" title="www.jasonsantamaria.com">Jason Santa Maria</a>, 
			<a href="http://www.mezzoblue.com/" title="www.mezzoblue.com">Dave Shea</a>, 
			<a href="http://www.thebignoob.com/" title="www.thebignoob.com">Ryan Sims</a>, 
			<a href="http://www.sonspring.com/" title="www.sonspring.com">Nathan Smith</a>, and 
			<a href="http://www.zeldman.com/" title="www.zeldman.com">Jeffrey Zeldman</a>, 
			to name a few. Thank you for inspiring <a href="http://www.domain7.com/WhoWeAre/StephenBau.html" title="Stephen Bau, Designer, Domain7">me</a> to give something back.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Contribution</h2>
				<div class="block">
					<p>The <a href="/fluid960gs/">Fluid 960 Grid System</a> templates have been built upon the work of Nathan Smith and his <a href="http://960.gs/">960 Grid System</a> using effects from the <a href="http://mootools.net/">MooTools</a> and <a href="http://jquery.com/">jQuery</a>  JavaScript libraries. 
		 The idea for building these templates was inspired by Andy Clarke, author of <a href="http://www.transcendingcss.com/">Transcending CSS</a>, who advocates a content-out approach to rapid interactive prototyping, crediting Jason Santa Maria with the <a href="http://www.jasonsantamaria.com/archive/2004/05/24/grey_box_method.php">grey box method</a>.</p>
				</div>
			</div>
		</div>
		<div class="clear"></div>
			
			
		<div class="grid_3">
			<div class="box menu">
				<h2><a href="#" id="toggle-section-menu" style="cursor: pointer; ">Section Menu</a></h2>
				<div style="margin: 0px; position: static; overflow: hidden; "><div class="block" id="section-menu" style="margin: 0px; ">
					<ul class="section menu">
						<li>
							<a class="menuitem current">Menu 1</a>
							<ul class="submenu current" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 125px; ">
								<li><a>Submenu 1</a></li>
								<li><a>Submenu 2</a></li>
								<li><a class="active">Submenu 3</a></li>
								<li><a>Submenu 4</a></li>
								<li><a>Submenu 5</a></li>
							</ul>
						</li>
						<li>
							<a class="menuitem">Menu 2</a>
							<ul class="submenu" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px; ">
								<li><a>Submenu 1</a></li>
								<li><a>Submenu 2</a></li>
								<li><a>Submenu 3</a></li>
								<li><a>Submenu 4</a></li>
								<li><a>Submenu 5</a></li>
							</ul>
						</li>
						<li>
							<a class="menuitem">Menu 3</a>
							<ul class="submenu" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px; ">
								<li><a>Submenu 1</a></li>
								<li><a>Submenu 2</a></li>
								<li><a>Submenu 3</a></li>
								<li><a>Submenu 4</a></li>
								<li><a>Submenu 5</a></li>
							</ul>
						</li>
						<li>
							<a class="menuitem">Menu 4</a>
							<ul class="submenu" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px; ">
								<li><a>Submenu 1</a></li>
								<li><a>Submenu 2</a></li>
								<li><a>Submenu 3</a></li>
								<li><a>Submenu 4</a></li>
								<li><a>Submenu 5</a></li>
							</ul>
						</li>
					</ul>
				</div></div>
			</div>
			<div class="box">
				<h2><a href="#" id="toggle-list-items" style="cursor: pointer; ">List Items</a></h2>
				<div style="margin: 0px; position: static; overflow: hidden; "><div class="block" id="list-items" style="margin: 0px; ">
					<h5>A menu</h5>
					<ul class="menu">
						<li><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
					</ul>
				</div></div>
			</div>
		</div>
		<div class="grid_13">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
