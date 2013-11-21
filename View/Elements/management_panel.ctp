<?php if($this->request->isEmployee): ?>
    <?php if(!empty($this->request->checkForMeta)): ?>
        <?php 
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
        ?>
    <?php endif; ?>
<?php endif; ?>