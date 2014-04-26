<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            The Parbake Project:
            <?php echo $title_for_layout; ?>
        </title>
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
				//[TODO] Improve this implementation
				$plugin = Inflector::camelize($this->request->plugin);
				$controller = Inflector::camelize($this->request->controller);
				$action = $this->request->action;
				
				$pluginElement = "{$plugin}.{$controller}/{$action}";
				$element = "{$controller}/{$action}";
				$elementPath = null;
				
				if($this->elementExists($element)) {
					$elementPath = $this->element($element);
				}elseif($this->elementExists($element)){
					$elementPath = $this->element($element);
				}
			?>
			<?php if($elementPath): ?>
				<div class="col-sm-3 col-md-2 sidebar">
					<?php echo $elementPath; ?>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<?php else: ?>
					<div class="col-md-12 main">
			<?php endif; ?>			
				<?php echo $this->Html->tag('h1', $title_for_layout); ?>		
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			</div>

            <div class="footer text-center" role="footer">
                <div>&copy2012 - <?php echo date('Y'); ?> The Parbake Project</div>
                <div>
                    Built by <a href="https://jasonsnider.com" target="_blank">Jason</a> in Chicago
                    (<?php 
                        echo $this->Html->link(
                            'Admin',
                            '/admin'
                        );
                        
                        if ($this->Session->check('Auth.User')):
                            if(!empty($this->request->checkForMeta)):
                                echo ' | ';
                                echo $this->Html->link(
                                    'Manage Meta Data',
                                    array(
                                        'admin'=>true,
                                        'controller'=>'meta_data',
                                        'action'=>'edit',
                                        $this->request->controller,
                                        $this->request->action
                                    )

                                ); 

                            endif;

                            if($this->request->controller == 'posts' && $this->request->action == 'view'):
                                echo ' | ';
                                echo $this->Html->link(
                                    'Manage This Post',
                                    array(
                                        'admin'=>true,
                                        'controller'=>'contents',
                                        'action'=>'edit',
                                        $id
                                    )

                                ); 
                            endif;



                            if($this->request->controller == 'pages' && $this->request->action == 'view'):
                                echo ' | ';
                                echo $this->Html->link(
                                    'Manage This Page',
                                    array(
                                        'admin'=>true,
                                        'controller'=>'contents',
                                        'action'=>'edit',
                                        $id
                                    )

                                ); 
                            endif;

                        
                            echo ' | ';
                            echo $this->Html->link('Log Out', '/users/users/logout');
                        endif; 
                        
                        
                    ?>)
                </div>
                <div class="text-right">
                <?php 
                    $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
                    echo $this->Html->link(
                        $this->Html->image('cake.power.gif', 
                        array(
                            'alt' => $cakeDescription, 
                            'title'=> $cakeDescription,
                            'border' => '0')),
                        'http://www.cakephp.org/',
                        array('target' => '_blank', 'escape' => false)
                    );
                ?>
                </div>
            </div>
        </div>
        <?php echo $this->Html->script('/vendors/jquery/jquery'); ?>
        <?php echo $this->Html->script('/vendors/bootstrap/js/bootstrap.min'); ?>
        <?php echo $this->element('tinymce'); ?>
        <?php echo $this->Html->script('content_form'); ?>
    </body>
</html>
