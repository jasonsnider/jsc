<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework'); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo isset($this->request->title)?$this->request->title:'jasonsnider.com'; ?>
        </title>
        <?php
            echo isset($this->request->description)?$this->Html->meta('description', $this->request->description):null;
            echo isset($this->request->keywords)?$this->Html->meta('keywords', $this->request->keywords):null;
            echo $this->Html->meta('icon');

            echo $this->Html->css('cake.generic');

            echo $this->Html->css('/vendors/font-awesome/css/font-awesome.min');
            echo $this->Html->css('/vendors/webfontkit/home-page');
            
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');      
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div id="Wrapper">
            <div id="Header">
                <h1 class="title">Hi, I'm Jason Snider</h1>
				<div class="profile">
					<div class="bio">
                        I'm Jason Snider,
                        a full stack web developer,
                        designer,
                        systems architect,
                        security enthusiast,
                        Linux aficionado,
                        open source advocate,
                        sys admin,
                        business analyst,
                        project manager,
                        researcher and marketer.
                        I'm a senior developer at MicroTrain Technologies
                        and the lead developer for TheProfessional.Me
					</div>
				</div>
                
				<nav>
					<a href="/">About Me</a>
					<!--<a data-scroll="Skills" href="#Skills">Resume</a>-->
					<a href="/contents/posts">Blog</a>
				</nav>
                
				<div class="icons">
					<!--<a href="https://theprofessional.me/p/jason/" class="XXX"></a>-->
					<a href="http://www.linkedin.com/in/jdsnider" class="icon icon-linkedin"></a>
					<a href="https://twitter.com/jason_snider" class="icon icon-twitter"></a>
					<a href="https://plus.google.com/109232583343515319209/posts" class="icon icon-google-plus"></a>
					<a href="https://github.com/jasonsnider" class="icon icon-github-alt"></a>
					<a href="http://www.flickr.com/photos/jason-snider/" class="icon icon-flickr"></a>
				</div>
                
                <div id="Footer" class="clearfix">
                    <span class="pull-left">Built by Jason in Chicago</span>
                    <span class="pull-right">&copy;2009-<?php echo date('Y'); ?> Jason Snider</span>
                </div>
			</div>

            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
            
            <?php echo $this->element('management_panel'); ?>
            <?php echo $this->element('analytics'); ?>
            <?php echo $this->element('sql_dump'); ?>
            
        </div>
        
    </body>
</html>
