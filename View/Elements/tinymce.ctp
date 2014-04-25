<?php if(isset($this->request->hasEditor)): ?>
    <?php echo $this->Html->script('/vendors/tinymce/tinymce.min'); ?>
    <script>
        tinymce.init({
            
            selector: '.editor',
            content_css : '<?php echo Configure::read('Parbake.Editor.css'); ?>',
            plugins: 'autoresize, code, image, link, media, paste',
            menubar: false,
            toolbar: "undo redo | styleselect | bold italic | numlist bullist | image link media | pastetext | code",
			
			//I do not want to import styles when I do a copy paste
			//http://stackoverflow.com/questions/16847324/tinymce-paste-includes-styles
			cleanup_on_startup : true,
			fix_list_elements : false,
			fix_nesting : false,
			fix_table_elements : false,
			paste_use_dialog : true,
			paste_auto_cleanup_on_paste : true,
  
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