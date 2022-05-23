<?php 
$conn = mysqli_connect('localhost:3306', 'root', 'reason*284fast', 'peddietasks');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
$query = "SELECT * FROM goal";
$result = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <header>
            <h1> Goals </h1>
            <img class="logo" src="farmerp2.png" alt="logo" width="100" height="100">
            <nav class="nav_links">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./createtask.html">Create Task</a></li>
                    <li><a href="./goals.php">Goals</a></li>
                    <li><a href="./creategoals.html">Create Goal</a></li>
                </ul>
            </nav>
            <a class="d&t" href="#">
                <button type="button" onclick="document.getElementById('date-time').innerHTML= Date();"
                >Date and time</button>
            </a>
        </header>
        <!-- <hr> -->
    </head>

    <table id="goals table">
        <?php 
            #while($rows=mysql_fetch_assoc($result)) {
            $result_Monday = mysqli_query($conn, $query); 
            $goal_count = 1;
                if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                        echo "<tr><td>" . "Goal " . $goal_count . ": <br>" . $row["Title"] . "<br>   Category: " . $row["Category"] . "<br>   Details: <br>" . $row["Details"] . "</td></tr>";
                    }
                    $goal_count = $goal_count+1;
        }
        ?> 
    </table>
</html>
