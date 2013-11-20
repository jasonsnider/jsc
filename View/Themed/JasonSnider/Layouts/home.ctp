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
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('parbake.theme.css');
            echo $this->Html->css('home.css');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            
            //Load Google Fonts
            echo $this->Html->css('//fonts.googleapis.com/css?family=Cabin+Sketch:400,700'); 
            echo $this->Html->css('//fonts.googleapis.com/css?family=Allan:bold');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Cardo');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Rancho');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Rock+Salt');
            echo $this->Html->css('//fonts.googleapis.com/css?family=Source+Code+Pro');            
        ?>
    </head>
    <body>
        
        <?php //echo $this->element('navbar'); ?>

        <div class="container">
            
            <div id="Header">
				<div class="icons">
					<!--<a href="https://theprofessional.me/p/jason/" class="XXX"></a>-->

					<a href="http://www.linkedin.com/in/jdsnider" class="icon-linkedin"></a>
					<a href="https://twitter.com/jason_snider" class="icon-twitter"></a>
					<a href="https://plus.google.com/109232583343515319209/posts" class="icon-google-plus"></a>
					<a href="https://github.com/jasonsnider" class="icon-github-alt"></a>
					<a href="http://www.flickr.com/photos/jason-snider/" class="icon-flickr"></a>
				</div>
				<div class="profile">
					<h1 class="title">Hi, I'm Jason Snider</h1>
					<div class="bio">
						A full stack web developer,
						a systems architect,
						a Linux aficionado,
						an open source advocate,
						a sys admin and security enthusiast.
						I'm a senior developer at MicroTrain Technologies
						and the lead developer for TheProfessional.Me
					</div>
				</div>
				<nav>
					<a data-scroll="AboutMe" href="#AboutMe">ABOUT ME</a>
					<a data-scroll="Background" href="#Background">BACKGROUND</a>
					<a data-scroll="Credits" href="#Credits">CREDITS</a>
					<a href="/contents/posts">BLOG</a>
				</nav>
			</div>

            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>

            <div class="footer text-right">
                <div class="clearfix">
                    <div class="pull-left">Built by Jason in Chicago</div> 
                    <div class="pull-right">&copy; 2008 - 20013 Jason D Snider</div>
                </div>
            </div>
            
            <div class="sub-footer text-right">
                <div class="clearfix">
                    <div class="pull-right">
                    <?php echo $this->Html->link(
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
            
            <?php echo $this->element('sql_dump'); ?>
            
        </div>
        
        <?php echo $this->Html->script('jquery/jquery'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        
        <?php if(isset($this->request->hasEditor)): ?>
            <?php echo $this->Html->script('tinymce/tinymce.min'); ?>
            <script>
                tinymce.init({
                    selector: '.editor',
                    content_css : '/theme/parbake/css/editor.css',
                    plugins: 'autoresize, code',
                    menubar: false,
                    toolbar: "undo redo | styleselect | bold italic | numlist bullist | code"
                });
            </script>
        <?php endif; ?>
            
        <script>
			/**
			 * Sticks the navigation element to the top of the page after a bit of scrolling
		     */
			(function($){
				"use strict"; /*jslint browser:true */
				$(function() {

					var $s = $("nav"),
						$pos = $s.position();  

					$(window).scroll(function() {
						var windowpos = $(window).scrollTop();
						if (windowpos >= $pos.top) {
							$s.addClass("stick");
						} else {
							$s.removeClass("stick"); 
						}

					});

				});

			})(jQuery);

			/**
			 * Scrolls to a target element
			 */
			(function($){
				"use strict"; /*jslint browser:true */
				$(function() {

					$(document).on('click.data-api', '[data-scroll]', function (e) {

						e.preventDefault();

						var $target = $(this).attr('data-scroll'),
							$top = $('#' + $target).offset().top - 45,
							$duration= 1000;

						$('html, body').animate({scrollTop: $top}, $duration);

					});

				});

			})(jQuery);
            
        </script>
        
    </body>
</html>
