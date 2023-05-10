<?php
require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    
body{
        background: linear-gradient(to right,#7d2ae8, #9198e5);
    }

    li{
        font-size: 20px;
    }

    input[type=submit] {
    background-color: whitesmoke;
    border: 2px solid black;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type="text"] {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    margin-left: 20px;
}

input[type="number"] {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    margin-left: 20px;

}

label{
    font-size: 20px;
}

</style>

<body>
<div class="container">
<form action="" method="POST">
    <ol>
        <div class="input field">
<h3><li>View Cases and their details</h3></li>
<input type="submit" name="query_case" value="View">



        <?php 
if(isset($_POST['query_case']))
{
    $sql=" SELECT * from cases;";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }

    echo "<table>";
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>Case_Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['case_status']."</td></tr>";
    }
    echo "</table>";
}

?>
</div>

<div class="input field">
<h3><li>View Criminals and their details</h3></li>
<input type="submit" name="query_criminal" value="View">



        <?php 
if(isset($_POST['query_criminal']))
{
    $sql=" SELECT * from criminal3;";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }

    echo "<table>";
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>Gender</th><th>DOB</th><th>PhoneNumber</th><th>AadhaarNumber</th><th>State</th><th>City</th><th>Pincode</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['Gender']."</td><td>".$row['criminal_dob']."</td><td>".$row['PhoneNumber']."</td><td>".$row['AadharNo']."</td><td>".$row['States']."</td><td>".$row['City']."</td><td>".$row['Pincode']."</td></tr>";
    }
    echo "</table>";
}

?>
</div>


<div class="input field">
<h3><li>View Victims and their details</h3></li>
<input type="submit" name="query_victim" value="View">



        <?php 
if(isset($_POST['query_victim']))
{
    $sql=" SELECT * from victimm;";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }

    echo "<table>";
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>Gender</th><th>DOB</th><th>PhoneNumber</th><th>AadhaarNumber</th><th>State</th><th>City</th><th>Pincode</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['Gender']."</td><td>".$row['Victim_DOB']."</td><td>".$row['PhoneNo']."</td><td>".$row['AadhaarNo']."</td><td>".$row['States']."</td><td>".$row['city']."</td><td>".$row['Pincode']."</td></tr>";
    }
    echo "</table>";
}

?>
</div>
</body>
</html>






































<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main-div">
        <h1>List of courts</h1>
        
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Case Id</th>
                            <th>Case Type</th>
                            <th>Court Name</th>
                            <th>Judge Name</th>
                            <th>Hearing Date</th>
                            <th>Case Status</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        include "conn.php";

                        $selectquery = "SELECT * FROM cases";
                        $query = mysqli_query($con,$selectquery);

                        while($res = mysqli_fetch_array($query)){

                            ?>
                        <tr>
                            <th><?php echo $res['CaseID']; ?></th>
                            <th><?php echo $res['CaseType']; ?></th>
                            <th><?php echo $res['CourtName']; ?></th>
                            <th><?php echo $res['JudgeName']; ?></th>
                            <th><?php echo $res['HearingDate']; ?></th>
                            <th><?php echo $res['Case_Status']; ?></th>
                        </tr>    

                        <?php 
                        }

                        ?>
                        
                    </tbody>

                </table>
            </div>

        </div>
        

</body>
</html> -->
