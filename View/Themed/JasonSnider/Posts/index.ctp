<div class="clearfix">
    <div class="content">
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
            </header>
            <?php 
                echo $this->Text->truncate(
                    $data[$i]['Content']['body'],
                    300,
                    array(
                        'ellipsis' => '[...]',
                        'exact' => false,
                        'html' => true
                    )
                );
            ?>
            <footer>
                <strong>Posted On: </strong><?php echo date('m/d/y', strtotime($data[$i]['Content']['created'])); ?>
            </footer>
        </article>
    <?php endfor; ?>
    
    </div>
    <div class="sidebar"></div>
</div>