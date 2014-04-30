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