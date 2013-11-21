<div class="footer text-right">
    <div class="clearfix">
        <div class="pull-left">Built by Jason in Chicago</div> 
        <div class="pull-right">&copy; 2008 - 2013 Jason D Snider</div>
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