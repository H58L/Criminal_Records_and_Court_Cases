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



</ol>
</form>


</div>
</body>
</html>


