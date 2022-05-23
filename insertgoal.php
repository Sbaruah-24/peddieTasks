<?php 
$Title = $_POST['title'];
$Category = $_POST['category'];
$Details = $_POST['details'];

if (!empty($Title) || !empty($Category)  || !empty($Details)) {
    $host = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "reason*284fast";
    $dbname = "peddietasks";

    // create a connection to database
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) { // if failed
        die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT Title, Category, Details FROM goal"; // make sure primary key stays unique, no duplicates
        $INSERT = "INSERT INTO goal(Title, Category, Details) values (?, ?, ?)";

        // prepare statemetn 
        #$stmt = $conn->prepare($SELECT);
        #$stmt->bind_param("sisss", $Title, $Time, $Category, $Class, $Details);
        #$stmt->execute();
        #$stmt->bind_result($Title);
        #$stmt->store_result();
        #$rnum = $stmt->num_rows;

        #if ($rnum==0) { // if number of rows is zero, prepare for inserting a query
            #$stmt = $close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $Title, $Category, $Details);
            $stmt->execute();

        $stmt->close();
        $conn->close();
    }
    
} else {
    echo "All field are required";
    die();
}
?>