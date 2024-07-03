<?php require_once("header.php") ?>
<?php
if(isset($_POST["Name"]));
{
    $con = mysqli_connect('localhost', 'root', '', 'myblog');

    
    $str = "SELECT * FROM details";

        $result = $con->query($str);

        if($result->num_rows > 0)
        {
            while ($row = $result-> fetch_assoc()){
                echo "<h3>title:"  . $row["title"] . "</h3>" ; 
                echo "<h3>meta_description:"  . $row["meta_description"] . "</h3>";
                echo "<h3>keywords:"  . $row["keywords"] . "</h3>";
                echo "<h3>suggestion:"  . $row["suggestion"] . "</h3>". "<hr>";

            }
        }

};

?>
<?php require_once("footer.php") ?>