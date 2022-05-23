<?php 
$conn = mysqli_connect('localhost:3306', 'root', 'reason*284fast', 'peddietasks');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
$query = "SELECT * FROM task";
$result = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="main.css" type="text/css">
        <header>
            <h1> Peddie Tasks</h1>
            <img class="logo" src="farmerp2.png" alt="logo" width="80" height="80">
            <nav class="nav_links">
                <ul>
                    <li><a href="./index.php ">Home</a></li>
                    <li><a href="./createtask.html">Create Task</a></li>
                    <li><a href="./goals.php">Goals</a></li>
                    <li><a href="./creategoals.html">Create Goal</a></li>
                </ul>
            </nav>
            <a class="d&t" href="#">
                <button type="button" onclick="document.getElementById('date-time').innerHTML= Date();"
                class="cta">Date and time</button>
            </a>
            
        </header>
        <hr>
    </head>
    <body>
        <p id='date-time'>Current date is</p>
        <table>
            <tr>
                <td> Monday 
                    <style> 
                        td{background: #001d3d;
                    color: #FFF;
                    font-family: 'Lato', sans-serif;
                    font-size: 16px;
                    font-weight: 100;
                    letter-spacing: 2px;
                    text-transform: uppercase;}
                    </style>


                </td>
                <?php 
                        #while($rows=mysql_fetch_assoc($result)) {
                        $query_Monday = "SELECT * FROM task WHERE (Day='Monday') ORDER BY Time ASC;";
                        $result_Monday = mysqli_query($conn, $query_Monday); 
                        if ($result_Monday-> num_rows > 0) {
                            while ($row = $result_Monday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        } 
                ?> 
            </tr>
            <tr>
                <td> Tuesday 
                 <style> 
                    td{background: #001d3d;
                    color: #FFF;
                    font-family: 'Lato', sans-serif;
                    font-size: 16px;
                    font-weight: 100;
                    letter-spacing: 2px;
                    text-transform: uppercase;}
                  </style>
                </td>
                <?php 
                        $query_Tuesday = "SELECT * FROM task WHERE (Day='Tuesday') ORDER BY Time ASC;";
                        $result_Tuesday = mysqli_query($conn, $query_Tuesday); 
                        if ($result_Tuesday-> num_rows > 0) {
                            while ($row = $result_Tuesday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . 
                                    <style> 
                                        td{background #003566}
                                    </style>
                                "</td>";
                            }
                        } 
                ?> 
            </tr>
            <tr>
                <td> Wednesday
                <style> 
                    td{background: #001d3d;
                    color: #FFF;
                    font-family: 'Lato', sans-serif;
                    font-size: 16px;
                    font-weight: 100;
                    letter-spacing: 2px;
                    text-transform: uppercase;}
                  </style>
                </td>
                <?php
                        $query_Wednesday = "SELECT * FROM task WHERE Day='Wednesday' ORDER BY Time ASC;";
                        $result_Wednesday = mysqli_query($conn, $query_Wednesday); 
                        if ($result_Wednesday-> num_rows > 0) {
                            while ($row = $result_Wednesday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        }
                ?> 
            </tr>
            <tr>
                <td> Thursday 
                 <style> 
                    td{background: #001d3d;
                    color: #FFF;
                    font-family: 'Lato', sans-serif;
                    font-size: 16px;
                    font-weight: 100;
                    letter-spacing: 2px;
                    text-transform: uppercase;}
                  </style>
                </td>
                <?php 
                        $query_Thursday = "SELECT * FROM task WHERE Day='Thursday' ORDER BY Time ASC;";
                        $result_Thursday = mysqli_query($conn, $query_Thursday); 
                        if ($result_Thursday-> num_rows > 0) {
                            while ($row =  $result_Thursday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        } 
                        ?> 
            </tr>
            <tr>
                <td> Friday 
                    <style> 
                        td{background: #001d3d;
                        color: #FFF;
                        font-family: 'Lato', sans-serif;
                        font-size: 16px;
                        font-weight: 100;
                        letter-spacing: 2px;
                        text-transform: uppercase;}
                     </style>
                </td>
                <?php 
                        $query_Friday = "SELECT * FROM task WHERE Day='Friday' ORDER BY Time ASC;";
                        $result_Friday = mysqli_query($conn, $query_Friday); 
                        if ($result_Friday-> num_rows > 0) {
                            while ($row = $result_Friday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        } 
                        ?> 
            </tr>
            <tr>
                <td> Saturday 
                    <style> 
                        td{background: #001d3d;
                        color: #FFF;
                        font-family: 'Lato', sans-serif;
                        font-size: 16px;
                        font-weight: 100;
                        letter-spacing: 2px;
                        text-transform: uppercase;}
                     </style>
                </td>
                <?php  
                        $query_Saturday = "SELECT * FROM task WHERE Day='Saturday' ORDER BY Time ASC;";
                        $result_Saturday = mysqli_query($conn, $query_Saturday); 
                        if ($result_Saturday-> num_rows > 0) {
                            while ($row = $result_Saturday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        }  
                        ?> 
            </tr>
            <tr>
                <td> Sunday 
                    <style> 
                        td{background: #001d3d;
                        color: #FFF;
                        font-family: 'Lato', sans-serif;
                        font-size: 16px;
                        font-weight: 100;
                        letter-spacing: 2px;
                        text-transform: uppercase;}
                     </style>
                </td>
                <?php 
                        $query_Sunday = "SELECT * FROM task WHERE Day='Sunday' ORDER BY Time ASC;";
                        $result_Sunday = mysqli_query($conn, $query_Sunday); 
                        if ($result_Sunday-> num_rows > 0) {
                            while ($row = $result_Sunday-> fetch_assoc()) {
                                echo "<td>" . $row["Title"] . "<br> Time: " . $row["Time"] . "<br> Category: " . $row["Category"] . "<br>       " . $row["Class"] . "<br> Details: " . $row["Details"] . "</td>";
                            }
                        }
                    ?> 
                
        </table>
    </body>

    <?php
    $conn->close();
    ?>

</html>
