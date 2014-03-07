<?php if(isset($this->request->hasEditor)): ?>
    <?php echo $this->Html->script('/vendors/tinymce/tinymce.min'); ?>
    <script>
        tinymce.init({
            
            setup: function(editor) {
                editor.on('focus', function(e) {
                    e.execCommand('mceAutoResize'); 
                });
            },

            selector: '.editor',
            content_css : '<?php echo Configure::read('Parbake.Editor.css'); ?>',
            plugins: 'autoresize, code, image, link, media',
            menubar: false,
            toolbar: "undo redo | styleselect | bold italic | numlist bullist | image link media | code",
            
            auto_resize : true,

            
			browser_spellcheck : true,
			schema: "html5",
                        
            //Fix for image src maddness
			//http://ellislab.com/forums/viewthread/130868/#645748
			relative_urls : false,
			remove_script_host : true,
			document_base_url : "/",
			convert_urls : true
        });
    </script>
<?php endif; ?>