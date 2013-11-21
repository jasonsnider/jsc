<?php if(isset($this->request->hasEditor)): ?>
    <?php echo $this->Html->script('tinymce/tinymce.min'); ?>
    <script>
        tinymce.init({
            selector: '.editor',
            content_css : '/theme/parbake/css/editor.css',
            plugins: 'autoresize, code',
            menubar: false,
            toolbar: "undo redo | styleselect | bold italic | numlist bullist | code"
        });
    </script>
<?php endif; ?>