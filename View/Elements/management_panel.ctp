<?php if($this->request->isEmployee): ?>
<div class="management-panel">       
<?php 
    echo $this->Html->link(
        'Admin',
        array(
            'admin'=>true,
            'controller'=>'pages',
            'action'=>'admin'
        )

    ); 

    if(!empty($this->request->checkForMeta)):
        echo ' | ';
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
        echo ' | ';
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
        echo ' | ';
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
    
    if ($this->Session->check('Auth.User')):
        echo ' | ';
        echo $this->Html->link('Log Out', '/users/users/logout');
    endif; 
?>
</div>    
<?php endif; ?> 