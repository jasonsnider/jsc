<div class="clearfix">
    <div class="content">
        <article>
            <header class="clearfix">
                <div class="avatar">
                    <?php 
                    echo $this->Html->image(
                        'https://secure.gravatar.com/avatar/57dd069b73a149098c4865f8f5813303.png'
                    ); 
                    ?>
                </div>
                <div class="meta-data clearfix">
                    <h2><?php echo $content['Content']['title']; ?></h2>
                    <strong>By: </strong><?php echo $content['CreatedUser']['UserProfile']['display_name']; ?>
                    <strong>On: </strong><?php echo date('m/d/y', strtotime($content['Content']['created'])); ?>
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                        <a class="addthis_button_google_plusone_share"></a>
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_pinterest_share"></a>
                        <a class="addthis_button_linkedin"></a>
                        <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
                    </div>
                </div>
            </header>
            <?php echo $content['Content']['body']; ?>
        </article>
        <a name="comments"></a>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'jasondsnider'; // required: replace example with your forum shortname
            var disqus_identifier = '<?php echo $content['Content']['slug']; ?>';
            var disqus_url = 'https://jasonsnider.com/<?php echo $this->here ?>';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>
            Please enable JavaScript to view the 
            <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
        </noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>
    <div class="sidebar"></div>
</div>


<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d73a14248ae2db"></script>
<!-- AddThis Button END -->