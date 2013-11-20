<h1>Jason Snider's Blog</h1>

<div class="clearfix">
<?php $seed = 0; ?> 
<?php for($i=0; $i<count($data); $i++): ?>
    <?php 
        
        echo ($seed==0)?"<div class=\"row\">":null; 
        $content = $data[$i]; 
    ?>
    <style>
        .article-preview,
        .article-preview:hover{
            height: 400px; 
            overflow:hidden; 
            background: #fff;
            cursor: pointer;
            display: block;
            color: #630;
            text-decoration: none;
        }

    </style>
    <div class="col-md-4">
        <div
            data-href="<?php echo "/contents/posts/view/{$content['Content']['slug']}"; ?>"
            class="well well-small article-preview"
        >
            <article>
                <header>
                    <strong>
                        <?php echo $this->Html->link(
                            $content['Content']['title'], 
                            "/contents/posts/view/{$content['Content']['slug']}"
                        ); ?>
                    </strong>
                </header>
                <?php echo $content['Content']['body']; ?>
            </article>
        </div>
    </div>
    <?php 
        if($seed == count($data)){
            echo "</div>";
        }
        $seed++;
        if($seed == 3){
            echo "</div>";
            $seed=0;
        } 
        
        
    ?>
<?php endfor; ?>
</div>


<?php echo $this->element('pager'); ?>