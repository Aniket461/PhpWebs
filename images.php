<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/>
</form>

<?php
    if(isset($_POST['submit']))
    {
     if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        echo " error ";
     }
     else
     {
        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        saveimage($image);
     }
    }
    function saveimage($image)
    {
        $dbcon=mysqli_connect('localhost','root','root','website');
        $qry="insert into images values ('$image')";
        $result=mysqli_query($dbcon,$qry);
        if($result)
        {
            echo " <br/>Image uploaded.";
            header('location:index.php');
        }
        else
        {
            echo " error ";
        }
    }
?>


</body>
</html>