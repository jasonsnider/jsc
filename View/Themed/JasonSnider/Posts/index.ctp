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
    <div class="sidebar">
        <div class="stalk-me">
            Stalk Me On
            <!--<a href="https://theprofessional.me/p/jason/" class="XXX"></a>-->
            <a 
                href="http://www.linkedin.com/in/jdsnider" 
                class="icon icon-linkedin" 
                title="LinkedIn">&nbsp;LinkedIn</a>
            
            <a 
                href="https://twitter.com/jason_snider" 
                class="icon icon-twitter" 
                title="Twitter">&nbsp;Twitter</a>
            
            <a 
                href="https://plus.google.com/109232583343515319209/posts" 
                class="icon icon-google-plus" 
                title="Google+">&nbsp;Google+</a>
            
            <a 
                href="https://github.com/jasonsnider" 
                class="icon icon-github-alt" 
                title="GitHub">&nbsp;GitHub</a>
            
            <a 
                href="http://www.flickr.com/photos/jason-snider/" 
                class="icon icon-flickr" 
                title="Flickr">&nbsp;Flickr</a>
        </div>
    </div>
</div>