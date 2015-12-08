<?php include("includes/iheader.php"); ?>
        
        <p>Upload</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>    
                
<?php include("includes/ifooter.php"); ?>
