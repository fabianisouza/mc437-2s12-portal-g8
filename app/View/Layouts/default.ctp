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
		<div class="grid_16" style='background:url(http://localhost/cake/img/header.png); height:180px; margin:3; text-align:right;'>
			<?php echo $this->element('admin/login'); ?>
			<?php echo $this->element('admin/search'); ?>
		</div>
		<div class="clear"></div>
		<div class="grid_16">
			 <?php echo $this->element('admin/main_menu'); ?>
		</div>
		
		<div class="clear" style="height: 40px; width: 100%;"></div>
		
		<div class="clear"></div>	
			
		<div class="grid_3">
			<div class="box">
				<h2><a href="#" id="toggle-list-items" style="cursor: pointer; ">Carrinho</a></h2>
				<div style="margin: 0px; position: static; overflow: hidden; "><div class="block" id="list-items" style="margin: 0px; ">
					<h5>Total</h5>
					
						
				</div></div>
			</div>
			
		
			<div class="box menu">
				<h2><a href="#" id="toggle-section-menu" style="cursor: pointer; ">Categorias</a></h2>
				<div style="margin: 0px; position: static; overflow: hidden; "><div class="block" id="section-menu" style="margin: 0px; ">
					<ul class="section menu">
						<? $cur = 0; foreach($categoryList as $c){ ?>
							<li>
								<a class="menuitem <? if($cur == 0){ echo 'current'; $cur =1; } ?>"><? echo $c["category"]; ?></a>
								<? if(count($c["children"]) > 0) { ?>									
								<ul class="submenu <? if($cur == 0){ echo 'current'; $cur =1; } ?>" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: <? echo count($c["children"])*25 ?>px; ">
									<? foreach($c["children"] as $cc) { ?>
									<li><a><? echo $cc; ?></a></li>
									<? } ?>						
								</ul>									
								<? } ?>
							</li>
						<?}?>
					</ul>
				</div></div>
			</div>
			
		</div>
		<div class="grid_13">
			<?php echo $this->Session->flash(); ?>
			<div id="content">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		
		<div class="grid_16" style='background:url(http://localhost/cake/img/footer.png); height:120px; margin:3; text-align:right;'>
			
		</div>
		
		<div class="clear"></div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
