<?php require_once("header.php") ?>
<?php
if(isset($_POST["Name"]));
{
    $con = mysqli_connect('localhost', 'root', '', 'test');

    // $Name = $_POST['Name'];
    // $Email = $_POST['Email'];
    // $Phone = $_POST['Phone'];
    // $Message = $_POST['Message'];

    
    $str = "SELECT * FROM information";

        $result = $con->query($str);

        if($result->num_rows > 0)
        {
            while ($row = $result-> fetch_assoc()){
                echo "<h3>Name:"  . $row["Name"] . "</h3>" ; 
                echo "<h3>Email:"  . $row["Email"] . "</h3>";
                echo "<h3>Phone:"  . $row["Phone"] . "</h3>";
                echo "<h3>Message:"  . $row["Message"] . "</h3>". "<hr>";

            }
        }

    // $sql = "INSERT INTO `information` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES ('0', '$Name', '$Email', '$Phone', '$Message')";

    // $contact = mysqli_query($con, $sql);
    // if($contact == true)
    // {
    //     echo "contact record saved successfully";
    // }
};

?>
<?php require_once("footer.php") ?>
