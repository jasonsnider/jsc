<h1>Jason Snider's Blog</h1>
<?php for($i=0; $i<count($data); $i++): ?>
    <?php echo ($i>0)?'<hr>':null; ?>
    <article>
        <header>
            <h2>
            <?php 
                echo $this->Html->link(
                    $data[$i]['Content']['title'], 
                    "/contents/posts/view/{$data[$i]['Content']['slug']}"
                ); 
            ?>
            </h2>
            <strong>By: </strong><?php echo $data[$i]['CreatedUser']['username']; ?>
            <strong>On: </strong><?php echo date('m/d/y', strtotime($data[$i]['CreatedUser']['created'])); ?>
        </header>
        <?php echo $data[$i]['Content']['body']; ?>
    </article>
    <div class="clearfix">
        <div class="pull-right btn btn-default btn-sm">
        <?php 
            echo $this->Html->link(
                'Comments', 
                "/contents/posts/view/{$data[$i]['Content']['slug']}"
            ); 
        ?>
        </div>
    </div>
<?php endfor; ?>
<?php echo $this->element('pager'); ?>