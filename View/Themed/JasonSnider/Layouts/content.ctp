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

            //Load Google Fonts 
            echo $this->Html->css('/vendors/font-awesome/css/font-awesome.min');
            echo $this->Html->css('/vendors/webfontkit/stylesheet');
            
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');      
        ?>
        <style>
            /* apply a natural box layout model to all elements */
            /* http://www.paulirish.com/2012/box-sizing-border-box-ftw/ */
            * {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                font-size: 16px;
                color: #630;
                padding: 0;
                margin: 0;
                background: #f3e7d3;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            }
                
            a,
            a:link,
            a:hover,
            a:visited{
                color: rgb(0, 0, 238);
                text-decoration: none;
            }
            
            h2 a,
            h2 a:link,
            h2 a:hover,
            h2 a:visited{
                color: rgba(187, 68, 0, 0.8);
                text-decoration: underline;
            }
            
            #Header{
                margin: 0;
                padding: 0;
                position: fixed;
                top:0;
            }
            
            #Wrapper{
                margin: 0 auto;
                padding: 60px 0 0;
                width: 1140px;
                background: #fff;
            }

            #Content{
                padding: 0 12px;
            }

            nav{
                padding: 0;
                margin: 0;
                position:relative;
                width: 1140px;
                background: rgba(187, 68, 0, 0.8);
            }

            nav a, 
            nav a:link,
            nav a:visited{
                font-family: 'Cabin Sketch', "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 38px;
                line-height: 45px;
                color: #eeffdd;
                text-decoration: none;
                padding:0 .4em;
            }
            
            nav a.brand{
                font-family: 'Rock Salt', "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 24px;
                text-shadow: 1px 1px #000;
            }
            
            nav a:hover,
            nav a.brand:hover{
                color: #640;
                text-shadow: none;
            }
            
            /*
             * Clearfix: contain floats
             *
             * For modern browsers
             * 1. The space content is one way to avoid an Opera bug when the
             *    `contenteditable` attribute is included anywhere else in the document.
             *    Otherwise it causes space to appear at the top and bottom of elements
             *    that receive the `clearfix` class.
             * 2. The use of `table` rather than `block` is only necessary if using
             *    `:before` to contain the top-margins of child elements.
             */

            .clearfix:before,
            .clearfix:after {
                content: " "; /* 1 */
                display: table; /* 2 */
            }

            .clearfix:after {
                clear: both;
            }
            
            .pull-right {
                margin: 0;
                padding: 0;
                float: right !important;
            }

            .pull-left {
                margin: 0;
                padding: 0;
                float: left !important;
            }
            
            .content{
                width: 75%; 
                float: left; 
            }
            
            .sidebar{
                width: 25%; 
                float: left; 
            }
            
            pre{
                overflow: auto;
                background: #000;
                color: #8db600;
                padding: 1em;
            }

            #Footer{
                color: #fff;
                font-size: 14px;
                padding: 0 4px;
                background: rgba(187, 68, 0, 0.8);
                font-family: "Rock Salt", Helvetica, Arial, sans-serif;
                width: 100%;
                margin: 12px 0 0;
            }
        </style>
    </head>
    <body>

        <div id="Wrapper">
            <div id="Header">
                <div style="position:absolute; top: 10px; width: 100%;">
                    <?php echo $this->Session->flash(); ?>
                </div>
				
				<nav class="clearfix">
                    <div class="pull-left">
                        <a href="/" class="brand">Jason Snider</a>
                    </div>
                    
                    <div class="pull-right">
                        <a href="/contents/posts">Blog</a>
                    </div>
				</nav>
			</div>
            <?php echo $this->Session->flash(); ?>
            <div id="Content">
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="Footer" class="clearfix">
                <span class="pull-left">Built by Jason in Chicago</span>
                <span class="pull-right">&copy;2009-<?php echo date('Y'); ?> Jason Snider</span>
            </div>
            <?php echo $this->element('management_panel'); ?>
            <?php echo $this->element('analytics'); ?>
            <?php echo $this->element('sql_dump'); ?>
        </div> 
    </body>
</html>
