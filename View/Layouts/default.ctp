<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?></title>
        <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('cake.generic.stripped');
            echo $this->Html->css('/vendors/bootstrap/css/bootstrap.min.css');
            echo $this->Html->css('/vendors/font-awesome/css/font-awesome.min.css');
            echo $this->Html->css('parbake.theme.css');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php echo $this->element('navbar'); ?>

        <div class="container">
			<div class="row">
			<?php
				//[TODO] This should probably be a helper method
			
				//Is there a sidebar avilable for this page?
				$controller = Inflector::camelize($this->request->controller);
				$action = $this->request->action;
				
				$element = "{$controller}/{$action}";
				$elementPath = null;
								
				if($this->elementExists($element)){
					$elementPath = $this->element($element);
				}

				//Load the content for the main display area into a single variable
				$content = null;
				$content .= $this->Html->tag('a', '', array('id'=>'Top', 'class'=>'anchor'));
				if($this->request->showTitle):
					$content .= $this->Html->tag('h1', $this->request->title, array('class'=>'header'));
				endif;
				$content .= $this->Session->flash();
				$content .= $this->fetch('content');
					
				//Add the footer
				$content .= $this->element('footer');
				
				//If we found a sidebar load a two column layout, otherwise load a single column.
				if($elementPath):
					echo $this->Html->div(
						'col-sm-3 col-md-2 sidebar', 
						$elementPath, 
						array('id'=>'SideNav')
					);
					echo $this->Html->div(
						'col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main', 
						$content, 
						array('id'=>'Main')
					);
				else:
					echo $this->Html->div(
						'col-md-12 main', 
						$content, 
						array('id'=>'Main')
					);
				endif; 
			?>
			</div>
        </div>
        <?php echo $this->Html->script('/vendors/jquery/jquery'); ?>
        <?php echo $this->Html->script('/vendors/bootstrap/js/bootstrap.min'); ?>
		<?php echo $this->Html->script('parbake'); ?>
        <?php echo $this->element('tinymce'); ?>

    </body>
</html>
