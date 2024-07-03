
!<?php
if(isset($_POST["Name"]))
{
    $con = mysqli_connect('localhost', 'root', '', 'test');

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Message = $_POST['Message'];

    $sql = "INSERT INTO `information` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES ('0', '$Name', '$Email', '$Phone', '$Message')";

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
'<br>'
?>
<br>
<a href="myrecords.php">
    <button id="myrec">
        Your records
    </button>
</a>