<?php
if(isset($_POST["title"]))
{
    $con = mysqli_connect('localhost', 'root', '', 'myblog');

    $title = $_POST['title'];
    $meta_description = $_POST['meta_description'];
    $keywords = $_POST['keywords'];
    $suggestion = $_POST['suggestion'];

    $sql = "INSERT INTO `details` (`Id`, `title`, `meta_description`, `keywords`, `suggestion`) VALUES ('0', '$title', '$meta_description', '$keywords', '$suggestion')";

    $contact = mysqli_query($con, $sql);
    if($contact == true)
    {
        echo "contact record saved successfully";
    }
}
else
{
    echo"An Error Ocurred...";
}

?>
<br>
<a href="getblog.php">
<button id="myrec">
Your records
</button>
</a>