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
				<h2>Lorem Ipsum</h2>
				<div class="block">
					<p>Sed orci enim, porttitor laoreet rhoncus ultricies, congue vel massa. In odio nibh, suscipit eu rhoncus eget, tempus sit amet leo. Sed porttitor est vitae ipsum tempor lobortis. Mauris nec nisl non tortor lacinia fringilla. Nunc tempor nibh nec enim iaculis sollicitudin. Quisque dictum porta lacus, ac suscipit nulla eleifend at. In tincidunt purus tellus. Praesent commodo, nibh et tristique facilisis, augue justo posuere lectus, nec varius dui nisi nec orci. Integer ut ullamcorper lacus. Nulla sit amet nunc mi, non varius lectus.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Lorem Ipsum</h2>
				<div class="block">
					<p>Sed orci enim, porttitor laoreet rhoncus ultricies, congue vel massa. In odio nibh, suscipit eu rhoncus eget, tempus sit amet leo. Sed porttitor est vitae ipsum tempor lobortis. Mauris nec nisl non tortor lacinia fringilla. Nunc tempor nibh nec enim iaculis sollicitudin. Quisque dictum porta lacus, ac suscipit nulla eleifend at. In tincidunt purus tellus. Praesent commodo, nibh et tristique facilisis, augue justo posuere lectus, nec varius dui nisi nec orci. Integer ut ullamcorper lacus. Nulla sit amet nunc mi, non varius lectus.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Lorem Ipsum</h2>
				<div class="block">
					<p>Sed orci enim, porttitor laoreet rhoncus ultricies, congue vel massa. In odio nibh, suscipit eu rhoncus eget, tempus sit amet leo. Sed porttitor est vitae ipsum tempor lobortis. Mauris nec nisl non tortor lacinia fringilla. Nunc tempor nibh nec enim iaculis sollicitudin. Quisque dictum porta lacus, ac suscipit nulla eleifend at. In tincidunt purus tellus. Praesent commodo, nibh et tristique facilisis, augue justo posuere lectus, nec varius dui nisi nec orci. Integer ut ullamcorper lacus. Nulla sit amet nunc mi, non varius lectus.</p>
				</div>
			</div>
		</div>
		<div class="grid_4">
			<div class="box">
				<h2>Lorem Ipsum</h2>
				<div class="block">
					<p>Sed orci enim, porttitor laoreet rhoncus ultricies, congue vel massa. In odio nibh, suscipit eu rhoncus eget, tempus sit amet leo. Sed porttitor est vitae ipsum tempor lobortis. Mauris nec nisl non tortor lacinia fringilla. Nunc tempor nibh nec enim iaculis sollicitudin. Quisque dictum porta lacus, ac suscipit nulla eleifend at. In tincidunt purus tellus. Praesent commodo, nibh et tristique facilisis, augue justo posuere lectus, nec varius dui nisi nec orci. Integer ut ullamcorper lacus. Nulla sit amet nunc mi, non varius lectus.</p>
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
