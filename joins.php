<?php include 'connection.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joins</title>
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
    <form action="" method="POST">
        <ol>
            
<div class="input field">
<li><h3>View Victim and associated Criminal and Case Type</h3></li>

<input type="submit" name="query_30" Value="View">

<?php 

if(isset($_POST['query_30']))
{
    $sql=" SELECT victimm.CrimeID, victimm.FirstName AS victim_FirstName, victimm.LastName as victim_LastName, criminal3.FirstName AS criminal_FirstName, criminal3.LastName as criminal_LastName, cases.CaseType AS case_type FROM victimm INNER JOIN criminal3 ON victimm.CrimeID = criminal3.CrimeID INNER JOIN crime ON criminal3.CrimeID = crime.CrimeID INNER JOIN cases ON crime.CaseID = cases.CaseID";
     
    
    $result= mysqli_query($con,$sql);
    
    if (!$result)
     {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }
    // else{
    //     header("Location: queries.php");
    //      exit();
    // }
    
    // Display the results
    echo "<table>";
    echo "<tr><th>Victim_FirstName</th><th>Victim_LastName</th><th>criminal_FirstName</th><th>criminal_LastName</th><th>Case Type</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>".$row['victim_FirstName']."</td><td>".$row['victim_LastName']."</td><td>".$row['criminal_FirstName']."</td><td>".$row['criminal_LastName']."</td><td>".$row['case_type']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div class="input field">
<li><h3>View criminal and his punsihment</h3></li>

<input type="submit" name="query_31" Value="View">

<?php 

if(isset($_POST['query_31']))
{
    $sql=" SELECT `criminal3`.`FirstName` AS criminal_FirstName, `criminal3`.`LastName` AS criminal_LastName, `cases`.`CaseType` AS case_type ,`sentence1`.`SentenceType` AS sentence_type FROM `criminal3` INNER JOIN `crime` ON `criminal3`.`CrimeID` = `crime`.`CrimeID` INNER JOIN `cases` ON `crime`.`CaseID` = `cases`.`CaseID` INNER JOIN `sentence1`ON `sentence1`.`CaseID`=`cases`.`CaseID`";
     
    $result= mysqli_query($con,$sql);
    
    if (!$result)
     {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }
    // else{
    //     header("Location: queries.php");
    //      exit();
    // }
    
    // Display the results
    echo "<table>";
    echo "<tr><th>criminal_FirstName</th><th>criminal_LastName</th><th>case_type</th><th>sentence_type</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>".$row['criminal_FirstName']."</td><td>".$row['criminal_LastName']."</td><td>".$row['case_type']."</td><td>".$row['sentence_type']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>
        </ol>
    </form>
</body>
</html>
