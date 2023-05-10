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

<body bgcolor="lightblue">
<div class="container">
<form action="" method="POST">
    <ol>

    <div class="input field">
    <li><h3>Update Status of a Case</h3></li>
    <label>Enter CaseID</label>
    <input type="number" placeholder="Enter CaseID" name="case_id" >
    <input type="text" placeholder="Enter Status" name="status" >


    <?php global $caseid; global $casestatus; ?>

    <br>
    <input type="submit" name="update_1" value="Enter">

    <?php 
    if(isset($_POST['update_1']))
{
    $caseid=$_POST['case_id'];
    $casestatus=$_POST['status'];

    $display_before1 = "SELECT * FROM cases WHERE CaseID= '".$caseid."'";

    $sql="UPDATE cases
    SET case_status = '".$casestatus."'
    WHERE  CaseID= '".$caseid."'";
   
    $result_before= mysqli_query($con,$display_before1);
    
    echo "<table>";
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result_before)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['case_status']."</td></tr>";
    }
    echo "</table>";
    echo "<br>";

    $result= mysqli_query($con,$sql);

    $display_after1 = "SELECT * FROM cases WHERE CaseID= '".$caseid."'";

    $result_after= mysqli_query($con,$display_after1);

     echo "<table>";
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result_after)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['case_status']."</td></tr>";
    }
    echo "</table>";
}

?>
</div>

<div class="input field">
    <li><h3>Update Sentence Type</h3></li>
    <label>Enter CaseID</label>
    <input type="number" placeholder="Enter Sentence ID" name="sentence_id" >
    <input type="text" placeholder="Enter Sentence Type" name="sentence_type" >


    <?php global $sentencetype; global $sentenceid; ?>

    <br>
    <input type="submit" name="update_2" value="Enter">

    <?php 
    if(isset($_POST['update_2']))
{
    $sentenceid=$_POST['sentence_id'];
    $sentencetype=$_POST['sentence_type'];

    $display_before1 = "SELECT * FROM sentence1 WHERE SentenceID= '".$sentenceid."'";

    $sql="UPDATE sentence1
    SET SentenceType = '".$sentencetype."'
    WHERE  SentenceID= '".$sentenceid."'";
   
    $result_before= mysqli_query($con,$display_before1);
    
    echo "<table>";
    echo "<tr><th>SentenceID</th><th>Sentence Type</th></tr>";
    while ($row = mysqli_fetch_assoc($result_before)) {
        echo "<tr><td>".$row['SentenceID']."</td><td>".$row['SentenceType']."</td></tr>";
    }
    echo "</table>";
    echo "<br>";

    $result= mysqli_query($con,$sql);

    $display_after1 = "SELECT * FROM sentence1 WHERE SentenceID= '".$sentenceid."'";

    $result_after= mysqli_query($con,$display_after1);

     echo "<table>";
     echo "<tr><th>SentenceID</th><th>Sentence Type</th></tr>";
     while ($row = mysqli_fetch_assoc($result_after)) {
         echo "<tr><td>".$row['SentenceID']."</td><td>".$row['SentenceType']."</td></tr>";
     }
    echo "</table>";
}

?>
</div>

<div class="input field">
    <li><h3>Update Victim Phone Number</h3></li>
    <label>Enter Phone Number</label>
    <input type="number" placeholder="Enter Victim ID" name="victim_id" >
    <input type="number" placeholder="Enter Phone Number" name="phno" >


    <?php global $victimid; global $victimphno; ?>

    <br>
    <input type="submit" name="update_3" value="Enter">

    <?php 
    if(isset($_POST['update_3']))
{
    $victimid=$_POST['victim_id'];
    $victimphno=$_POST['phno'];

    $display_before1 = "SELECT * FROM victimm WHERE VictimID= '".$victimid."'";

    $sql="UPDATE victimm
    SET PhoneNo = '".$victimphno."'
    WHERE VictimID= '".$victimid."'";
   
    $result_before= mysqli_query($con,$display_before1);
    
    echo "<table>";
    echo "<tr><th>VictimID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result_before)) {
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['PhoneNo']."</td><td>";
    }
    echo "</table>";
    echo "<br>";

    $result= mysqli_query($con,$sql);

    $display_after1 = "SELECT * FROM victimm WHERE VictimID= '".$victimid."'";

    $result_after= mysqli_query($con,$display_after1);

    echo "<table>";
    echo "<tr><th>VictimID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result_after)) {
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['PhoneNo']."</td><td>";
    }
    echo "</table>";
}

?>
</div>


<div class="input field">
    <li><h3>Update Criminal Phone Number</h3></li>
    <label>Enter Phone Number</label>
    <input type="number" placeholder="Enter Criminal ID" name="criminal_id" >
    <input type="number" placeholder="Enter Phone Number" name="cphno" >


    <?php global $criminalid; global $criminalphno; ?>

    <br>
    <input type="submit" name="update_4" value="Enter">

    <?php 
    if(isset($_POST['update_4']))
{
    $criminalid=$_POST['criminal_id'];
    $criminalphno=$_POST['cphno'];

    $display_before1 = "SELECT * FROM criminal3 WHERE CriminalID= '".$criminalid."'";

    $sql="UPDATE criminal3
    SET PhoneNumber = '".$criminalphno."'
    WHERE CriminalID= '".$criminalid."'";
   
    $result_before= mysqli_query($con,$display_before1);
    
    echo "<table>";
    echo "<tr><th>VCrimialID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result_before)) {
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['PhoneNumber']."</td><td>";
    }
    echo "</table>";

    $result= mysqli_query($con,$sql);

    $display_after1 = "SELECT * FROM criminal3 WHERE CriminalID= '".$criminalid."'";

    $result_after= mysqli_query($con,$display_after1);

    echo "<table>";
    echo "<tr><th>VictimID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result_after)) {
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['PhoneNumber']."</td><td>";
    }
    echo "</table>";
}

?>
</div>

</ol>
</form>

</body>
</html>
