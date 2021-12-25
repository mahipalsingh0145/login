<?php
echo "<pre>"; 
print_r($_FILES); 
echo "</pre>"; 
?> 

<!DOCTYPE html>
<html>
<body>

<form action="<?php echo base_url();?>Image/image_upload" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="upload">
  
</form>

</body>
</html>
