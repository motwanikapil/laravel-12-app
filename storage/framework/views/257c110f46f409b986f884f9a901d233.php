<div>
    <h1>Upload File</h1>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file">
        <button type="submit">Upload File</button>
    </form>
</div><?php /**PATH /home/kapil/Desktop/laravel-12-app/resources/views/upload.blade.php ENDPATH**/ ?>