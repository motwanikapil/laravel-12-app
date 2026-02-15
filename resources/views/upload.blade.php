<div>
    <h1>Upload File</h1>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload File</button>
    </form>
</div>