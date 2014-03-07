<?php if(isset($this->request->hasEditor)): ?>
    <?php echo $this->Html->script('/vendors/tinymce/tinymce.min'); ?>
    <script>
        tinymce.init({
            selector: '.editor',
            content_css : '<?php echo Configure::read('Parbake.Editor.css'); ?>',
            plugins: 'autoresize, code, spellchecker',
            menubar: false,
            toolbar: "undo redo | styleselect | bold italic | numlist bullist | code | spellchecker"
        });
    </script>
<?php endif; ?>