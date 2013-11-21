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
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
	
    </head>
    <body>
        
        <?php echo $this->element('navbar'); ?>

        <div class="container">
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

            <?php echo $this->element('footer'); ?>
            <?php echo $this->element('management_panel'); ?>
            <?php echo $this->element('sql_dump'); ?>
            
        </div>
        
        <!-- load the JS assets -->
        <?php echo $this->Html->script('jquery/jquery'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>

        <?php echo $this->element('tinymce'); ?>
        <script>
            /**
             * Exands a target element
             */
            (function($){
                "use strict"; /*jslint browser:true */
                $(function() {

                    $(document).on('click.data-api', '[data-expand]', function (e) {

                        e.preventDefault();

                        var $id = $(this).attr('id'),
                            $elToMeasure = $('#' + $id + '>' + $(this).attr('data-expand')),
                            $measueredHeight = $($elToMeasure).height(),
                            $height = $measueredHeight + 50;

                        $('#' + $id).attr('style', 'height:' + $height + 'px;');

                    });

                });

            })(jQuery);

            /**
             * Truns any element into a hyperlink
             */
            (function($){
                "use strict"; /*jslint browser:true */
                $(function() {

                    $(document).on('click.data-api', '[data-href]', function (e) {
                        e.preventDefault();
                        var $goto = $(this).attr('data-href');
                        location.href = $goto;
                    });

                });

            })(jQuery);
        </script>
        
    </body>
</html>
