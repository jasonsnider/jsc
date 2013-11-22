<?php 
if($this->request->isEmployee): 
    
    if(!empty($this->request->checkForMeta)):
        
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
    
endif; 