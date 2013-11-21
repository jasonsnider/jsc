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
       
            <?php echo $this->element('management_panel'); ?>
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
