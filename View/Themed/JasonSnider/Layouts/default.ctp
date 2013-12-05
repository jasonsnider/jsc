<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('cake.generic');
            echo $this->Html->css('bootstrap.min.css');
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
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

            <div class="footer text-right">
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
            <?php echo $this->element('management_panel'); ?>
            <?php echo $this->element('sql_dump'); ?>
            
        </div>
        <?php echo $this->Html->script('jquery/jquery'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <?php echo $this->element('tinymce'); ?>
        
    </body>
</html>
