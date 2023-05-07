<?php include 'connection.php';  ?>

<!-- This is for user to execute qureies -->
<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MySQL queries</title>
</head>
<body bgcolor=lightblue>
<div class="container">
<form action="" method="POST">
    <ol>
        <div class="input field">
<h3><li>View Cases and their details</h3></li>
<input type="submit" name="query_4" value="View">



                    

        
        <?php 
if(isset($_POST['query_4']))
{
    $sql=" SELECT * from cases;
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
        echo "FAILED";
        die("Query failed: " . mysqli_error($con));
        exit();
    
    }

    echo "<table>";
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>Case_Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['Case_Status']."</td></tr>";
    }
    echo "</table>";
    
    
    
    
    

    
}

?>
</div>





<div class="input field">




<h3><li>View number of crimes per state</li></h3>
<input type="submit" name="query_1" value="View">

<?php 
if(isset($_POST['query_1']))
{
    $sql="SELECT State, COUNT(*) as num_crimes
    FROM crime
    GROUP BY State
    ORDER BY num_crimes  DESC
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>State</th><th>Number of Crimes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['State']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>
<div class="input field">
    <li> <h3>View State with maximum crimes</li></h3>
    <input type="submit" name="query_2" value="View">

    <?php 
if(isset($_POST['query_2']))
{
    $sql="SELECT State, COUNT(*) as num_crimes
    FROM crime
    GROUP BY State
    ORDER BY num_crimes  DESC LIMIT 1
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>State</th><th>Crimes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['State']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div class="input field">
<li><h3>View number of crimes year wises</h3></li>
<input type="submit" name="query_3" value="View">

<?php 
if(isset($_POST['query_3']))
{
    $sql="SELECT YEAR(Date) AS year, COUNT(*) AS num_crimes FROM crime GROUP BY year ORDER BY num_crimes DESC
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>Year</th><th>Crimes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['year']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>
<div class="input field">
<li><h3>View number of crimes city wise</h3></li>
<input type="submit" name="query_5" value="View">

<?php 
if(isset($_POST['query_5']))
{
    $sql="SELECT City, COUNT(*) as num_crimes
    FROM crime
    GROUP BY City
    ORDER BY num_crimes  DESC
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>City</th><th>Number of Crimes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['City']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>




</div>
<div class="input field">

<li><h3>View City with maximum number of crimes</h3></li>
<input type="submit" name="query_6" Value="View">
<?php 
if(isset($_POST['query_6']))
{
    $sql="SELECT City, COUNT(*) as num_crimes
    FROM crime
    GROUP BY City
    ORDER BY num_crimes  DESC LIMIT 1
    ";
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>City</th><th>Number of Crimes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['City']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>
<div class ="input field">
<li><h3>View details of solved Cases</h3>
<input type="submit" name="query_7" Value="View">

<?php 
$stat="SOLVED";
if(isset($_POST['query_7']))
{
    $sql=" SELECT * FROM cases WHERE Case_Status = 'SOLVED' ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>CaseStatus</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['Case_Status']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div class="input fields">
    <li><h3>View details of Unsolved Case</h3></li>
    <input type="submit" name="query_8" value="View">
    
<?php 

if(isset($_POST['query_8']))
{
    $sql=" SELECT * FROM cases WHERE Case_Status = 'UNSOLVED' ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>CaseType</th><th>HearingDate</th><th>CaseStatus</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['Case_Status']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>
<div class="input field">
    <li><h3>View criminals by Age</h3></li>
    <input type="submit" name="query_9" value="View">
    <?php 

if(isset($_POST['query_9']))
{
    $sql=" SELECT CriminalID,CrimeID,FirstName,LastName, YEAR(CURDATE()) - YEAR(criminal_dob) AS age FROM criminal3 ORDER BY age ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>age</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>
<div class="input field">
    <li><h3>View Victims as per age </h3>
    </li>
<input type="submit" name="query_10" value="View">

<?php 

if(isset($_POST['query_10']))
{
    $sql=" SELECT VictimID,CrimeID,firstname,lastname, YEAR(CURDATE()) - YEAR(Victim_DOB) AS age FROM victimm ORDER BY age ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>age</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>
<div class="input field">
    <li><h3>View number of criminals as per age</h3></li>
    <input type="submit" name="query_11" Value="View">
    <?php 

if(isset($_POST['query_11']))
{
    $sql=" SELECT YEAR(CURDATE()) - YEAR(criminal_dob) AS age, COUNT(*) AS criminal_count FROM criminal3 GROUP BY age ORDER BY age ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>Number of Criminals</th><th>Age</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['criminal_count']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div class="input fields">
<li><h3>View number of Victims as per age</h3></li>
<input type="submit" name="query_12" value="View">
<?php 

if(isset($_POST['query_12']))
{
    $sql=" SELECT YEAR(CURDATE()) - YEAR(Victim_DOB) AS age, COUNT(*) AS victim_count FROM victimm GROUP BY age ORDER BY age ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>Number of Victims</th><th>Age</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['victim_count']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>
<div class="input field">
    <li><h3>View number of Victims of a an entered age</h3></li>
    <label>Enter Victim age</label>
    <input type="number" placeholder="Enter Victim age" name="victim_age_userinput" >
    <input type="submit" name="victim_age_btn" value="Enter">
    <?php
global $vic_age;
if(isset($_POST['victim_age_btn']))
{
$vic_age=$_POST['victim_age_userinput'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_13" value="View">

    <?php 
echo $vic_age;
if(isset($_POST['query_13']))
{
    $sql=" SELECT VictimID,CrimeID,firstname,lastname,YEAR(CURDATE()) - YEAR(Victim_DOB) AS age FROM victimm where Victim_DOB = '".$vic_age."'";
    
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
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>age</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>

<div class="input field">
    <li><h3>View number of Criminal of a an entered age</h3></li>
    <label>Enter Criminal age</label>
    <input type="number" placeholder="Enter Criminal age" name="criminal_age_userinput" >
    <input type="submit" name="crimnal_age_btn" value="Enter">
    <?php
global $criminal_age;
if(isset($_POST['criminal_age_btn']))
{
$criminal_age=$_POST['criminal_age_userinput'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_14" value="View">

    <?php 
echo $criminal_age;
if(isset($_POST['query_14']))
{
    $sql=" SELECT CriminalID,CrimeID,FirstName,LastName,YEAR(CURDATE()) - YEAR(Criminal_DOB) AS age FROM criminal3 where Criminal_DOB = '.$criminal_age.'";
    
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>age</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['age']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>

<div class="input field">
<li><h3>Count number of victims as per gender</h3></li>
<label>Enter gender</label>
<input type="text" name="victim_gender" Value="Enter" placeholder="ENter gender">
<input type="submit" name="victim_gender_btn" Value="Enter">
<?php
global $victim_gender;
if(isset($_POST['victim_gender_btn']))
{
$victim_gender=$_POST['victim_gender'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_15" value="View">

    <?php 
echo $victim_gender;
if(isset($_POST['query_15']))
{
    $sql="SELECT VictimID,CrimeID,FirstName,LastName,Gender FROM victimm WHERE Gender= '.$victim_gender.'  ";
    
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
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>Gender</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['Gender']."</td></tr>";
    }
    echo "</table>";
    
}

?>




</div>


<div class="input field">
<li><h3>Count number of Criminal as per gender</h3></li>
<label>Enter gender</label>
<input type="text" name="criminal_gender" Value="Enter" placeholder="ENter gender">
<input type="submit" name="criminal_gender_btn" Value="Enter">
<?php
global $criminal_gender;
if(isset($_POST['criminal_gender_btn']))
{
$criminal_gender=$_POST['criminal_gender'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_16" value="View">

    <?php 
echo $criminal_gender;
if(isset($_POST['query_16']))
{
    $sql="SELECT CriminalID,CrimeID,FirstName,LastName,Gender FROM criminal3 WHERE Gender= '.$criminal_gender.'  ";
    
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>Gender</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['Gender']."</td></tr>";
    }
    echo "</table>";
    
}

?>




</div>
<div class="input fields">
<li><h3>Counting Victims by gender</h3></li>
<input type="submit" name="query_17" value="view">

<?php 

if(isset($_POST['query_17']))
{
    $sql=" SELECT `Gender`, COUNT(*) as Count FROM victimm GROUP BY Gender ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>Gender</th><th>COunt</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Gender']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>

<div class="input fields">
<li><h3>Counting Criminals by gender</h3></li>
<input type="submit" name="query_18" value="view">

<?php 

if(isset($_POST['query_18']))
{
    $sql=" SELECT Gender, COUNT(*) as Count FROM criminal3 GROUP BY Gender ";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>Gender</th><th>COunt</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Gender']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>

<div class="input fields">
<li><h3>View Victims by State</h3></li>
<input type="submit" name="query_19" value="view">

<?php 

if(isset($_POST['query_19']))
{
    $sql=" SELECT VictimID,CrimeID,FirstName,LastName,States FROM victimm ORDER by States";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>State</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['States']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>


<div class="input fields">
<li><h3>View Criminals by State</h3></li>
<input type="submit" name="query_20" value="view">

<?php 

if(isset($_POST['query_20']))
{
    $sql=" SELECT CriminalID,CrimeID,FirstName,LastName,States FROM criminal3 ORDER by States";
    
    $result= mysqli_query($con,$sql);
    
    if (!$result) {
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>State</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['States']."</td></tr>";
    }
    echo "</table>";
    
}

?>


</div>

<div class="input field">
<li><h3>View Victims By user input state</h3></li>
<label>Enter State</label>
<input type="text" name="victim_state" Value="Enter" placeholder="ENter State">
<input type="submit" name="victim_state_btn" Value="Enter">
<?php
global $victim_state;
if(isset($_POST['victim_state_btn']))
{
$victim_state=$_POST['victim_state'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_21" value="View">

    <?php 
echo $victim_state;
if(isset($_POST['query_21']))
{
    $sql="SELECT VictimID,CrimeID,FirstName,LastName,Gender FROM victimm WHERE States= '.$victim_state.'  ";
    
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
    echo "<tr><th>VictimID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>States</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['VictimID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['States']."</td></tr>";
    }
    echo "</table>";
    
}

?>

<div class="input field">
<li><h3>View Criminal By user input state</h3></li>
<label>Enter State</label>
<input type="text" name="criminal_state" Value="Enter" placeholder="ENter State">
<input type="submit" name="criminal_state_btn" Value="Enter">
<?php
global $criminal_state;
if(isset($_POST['criminal_state_btn']))
{
$victim_state=$_POST['criminal_state'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_22" value="View">

    <?php 
echo $criminal_state;
if(isset($_POST['query_22']))
{
    $sql="SELECT CriminalID,CrimeID,FirstName,LastName,Gender FROM criminal3 WHERE States= '.$criminal_state.'  ";
    
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>States</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['States']."</td></tr>";
    }
    echo "</table>";
    
}

?>
</div>

<div class="input field">
<li><h3>View Criminals by user input state</h3></li>
<label>Enter State</label>
<input type="text" name="criminal_state" Value="Enter" placeholder="ENter State">
<input type="submit" name="criminal_state_btn" Value="Enter">
<?php
global $criminal_state;
if(isset($_POST['criminal_state_btn']))
{
$victim_state=$_POST['criminal_state'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_22" value="View">

    <?php 
echo $criminal_state;
if(isset($_POST['query_22']))
{
    $sql="SELECT CriminalID,CrimeID,FirstName,LastName,Gender FROM criminal3 WHERE States= '.$criminal_state.'  ";
    
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
    echo "<tr><th>CriminalID</th><th>CrimeID</th><th>FirstName</th><th>LastName</th><th>States</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CriminalID']."</td><td>".$row['CrimeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['States']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>


<div class="input field">
<li><h3>View number Crimes of a particular state</h3></li>
<label>Enter State</label>
<input type="text" name="crime_state" Value="Enter" placeholder="ENter State">
<input type="submit" name="crime_state_btn" Value="Enter">
<?php
global $crime_state;
if(isset($_POST['crime_state_btn']))
{
$crime_state=$_POST['crime_state'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_23" value="View">

    <?php 
echo $crime_state;
if(isset($_POST['query_23']))
{
    $sql=" SELECT
    States,
    COUNT(*) as num_crimes
  FROM
    crime
  GROUP BY
    States
  HAVING
    States = '.$crime_state.' "; 
    
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
    echo "<tr><th>State</th><th>num_crimes</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['State']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>
</div>


<div class="input field">
<li><h3>View number Crimes of a particular year</h3></li>
<label>Enter year</label>
<input type="text" name="crime_year" placeholder="ENter year">
<input type="submit" name="crime_year_btn" Value="Enter">
<?php
global $crime_year;
if(isset($_POST['crime_year_btn']))
{
$crime_year=$_POST['crime_year'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_24" value="View">

    <?php 
echo $crime_year;
if(isset($_POST['query_24']))
{
    $sql=" SELECT YEAR(crime_date) AS years, COUNT(*) AS num_crimes FROM crime GROUP BY years HAVING years= '.$crime_year.' "; 
    
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
    echo "<tr><th>years</th><th>num_crimes</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['years']."</td><td>".$row['num_crimes']."</td></tr>";
    }
    echo "</table>";
    
}

?>
</div>

<div class="input field">

<li><h3>View number of cases as per case type</h3></li>
<input type="submit" Value="Submit" name="query_25">

<?php 

if(isset($_POST['query_25']))
{
    $sql=" SELECT CaseType,COUNT(*) as Count FROM  cases GROUP BY CaseType "; 
    
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
    echo "<tr><th>CaseType</th><th>Count</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CaseType']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div>
    <li><h3>Count number of cases as per Case status</h3></li>
    <input type="submit" Value="Submit" name="query_26">

<?php 

if(isset($_POST['query_26']))
{
    $sql=" SELECT Case_Status,COUNT(*) as Count FROM  cases GROUP BY Case_Status"; 
    
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
    echo "<tr><th>Case Status</th><th>Count</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>".$row['Case_Status']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div>
    <li><h3>Count number of cases as per Courts</h3></li>
    <input type="submit" Value="Submit" name="query_27">

<?php 

if(isset($_POST['query_27']))
{
    $sql=" SELECT CourtName,COUNT(*) as Count FROM  cases GROUP BY CourtName"; 
    
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
    echo "<tr><th>CourtName</th><th>Count</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>".$row['CourtName']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>



<div class="input field">
<li><h3>View Crimes as per user input Court name</h3></li>
<label>Enter year</label>
<input type="text" name="court_name" placeholder="ENter COurt Name">
<input type="submit" name="court_name_btn" Value="Enter">
<?php
global $court_name;
if(isset($_POST['court_name_btn']))
{
$court_name=$_POST['court_name'];
    
   
}
    ?>
    <br>
    <input type="submit" name="query_28" value="View">

    <?php 
echo $court_name;
if(isset($_POST['query_28']))
{
    $sql=" SELECT `CourtName`,COUNT( *) as Count FROM cases GROUP BY CourtName HAVING CourtName= '.$court_name.' "; 
    
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
    echo "<tr><th>Court Name</th><th>Count</th></tr>";
    echo "Yooo";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "hiii";
        echo "<tr><td>".$row['CourtName']."</td><td>".$row['Count']."</td></tr>";
    }
    echo "</table>";
    
}

?>
</div>

<div class="input field">

<li><h3>View details of ongoing cases</h3></li>
<input type="submit" name="query_29" Value="Submit">

<?php 

if(isset($_POST['query_29']))
{
    $sql="SELECT * 
    FROM cases 
    WHERE YEAR(`HearingDate`) = YEAR(CURDATE())";
     
    
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
    echo "<tr><th>CaseID</th><th>CourtName</th><th>JudgeName</th><th>Case Type</th><th>HearingDate</th><th>case_status</th></tr>";
   
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>".$row['CaseID']."</td><td>".$row['CourtName']."</td><td>".$row['JudgeName']."</td><td>".$row['CaseType']."</td><td>".$row['HearingDate']."</td><td>".$row['case_status']."</td></tr>";
    }
    echo "</table>";
    
}

?>

</div>

<div class="input field">
<li><h3>View Victim and associated Criminal and Case Type</h3></li>

<input type="submit" name="query_30" Value="Submit">

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

<input type="submit" name="query_31" Value="Submit">

<?php 

if(isset($_POST['query_31']))
{
    $sql=" SELECT `criminal3`.`FirstName` AS criminal_FirstName, `criminal3`.`LastName` AS criminal_LastName, `cases`.`CaseType` AS case_type ,`sentence`.`SentenceType` AS sentence_type FROM `criminal3` INNER JOIN `crime` ON `criminal3`.`CrimeID` = `crime`.`CrimeID` INNER JOIN `cases` ON `crime`.`CaseID` = `cases`.`CaseID` INNER JOIN `sentence`ON `sentence`.`CaseID`=`cases`.`CaseID`";
     
    
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


</div>
</body>
</html>


