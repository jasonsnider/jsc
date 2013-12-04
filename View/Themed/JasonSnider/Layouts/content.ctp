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
            echo $this->Html->css('/vendors/webfontkit/content');
            
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');      
        ?>
        <link rel="author" href="https://plus.google.com/+JasonSnider/posts"/>
    </head>
    <body>
        <div id="Header">
            <nav class="clearfix">
                <div class="pull-left">
                    <a href="/" class="brand">Jason Snider</a>
                </div>

                <div class="pull-right">
                    <a href="/contents/posts">Blog</a>
                </div>
            </nav>
            
            <div style="position:absolute; top: 10px; width: 100%;">
                <?php echo $this->Session->flash(); ?>
            </div>
        </div>
        <div id="Wrapper">

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
