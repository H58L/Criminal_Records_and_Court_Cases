<!-- 
    <?php include 'connection.php';  ?> connecting to server -->

    <!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <title> Data Entry</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="style.css"> -->
     
    <!----===== Iconscout CSS ===== -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body bgcolor=lightgreen>
    <div class="container">
        <form action="#">
            <table>
                <th><h3><b>Registrtion of Case:</b></h3></th>
                <th><h3><b></b></h3></th>
            <div class="form first">
                <div class="details personal">
                    <!-- <span class="title">Personal Details</span> -->
                    <div class="fields">
                        <tr>
                        <div class="input-field">
                        <!-- <div class="input-field"> -->
                           
                            <td><label>Case ID</label></td><td><input type="number" placeholder="Enter ID number" name="case_id" required></td>

                          
                        </div>
                        </tr>
                        <br>
                        <tr>
                        <div class="input-field">
                        <!-- <div class="input-field"> -->
                            <td><label>Crime ID</label></td>
                            <td><input type="number" placeholder="Enter ID number" name="crime_id" required></td>
                        </div>
                        </tr>
                        <br>
                        <tr>
                        <div class="input-field">
                           <td> <label>Case Type</label></td>
                            <td><select required name="case_type">
                                <option disabled selected>Select type</option>
                                <option>Murder</option>
                                <option>kidnapping</option>
                                <option>Smuggling</option>
                                <option>Rape</option>
                                <option>Terrorism</option>
                                <option>half murder</option>
                                <option>white collar</option>
                                <option>hijacking</option>
                            </select></td>
                            <br>
</tr>
                            <tr>
                            <div class="input-field">
                            <td><label>Court name</label></td>
                            <td><input type="text" name="court_name" ></td>
                        </div>
</tr>
                        <br>
                        <tr>
                        <div class="input-field">
                            <td><label>Judge name</label></td>
                           <td> <select required name="judge_name">
                                <option disabled selected>Judge name</option>
                                
                                <option>Malhotra</option>
                                <option>Agrawal</option>
                                <option>Sharma</option>
                                <option>Deshmukh</option>
                                <option>Patil</option>
                                <option>Deshpande</option>
                                <option>Gill</option>
                                <option>Kohli</option>
                                <option>Singh</option>
                                <option>Khan</option>
                                <option>Malpani</option>
                                <option>Patel</option>
                               
                            



                            </select></td>
                            <br>
</tr>
                           
                        <!-- <div class="input-field">
                            <label>Judge Name</label>
                            <input type="text" >
                        </div> -->
                        <tr>
                        <div class="input-field">
                            <td><label>Hearing Date</label></td>
                            <td><input type="date" name="hearing_date"></td>
                        </div>
</tr>
                        <br>
                        <tr>
                        <div class="input-field">
                            <td><label>Status</label></td>
                           <td> <select required name="case_status">
                                <!-- <option disabled selected>Select gender</option> -->
                                <option>Solved</option>
                                <option>Unsolved</option>
                            
                            </select></td>
                            <br>
                        </div>
</tr>
                        <br>
</table>
<br>
<br><br><br><br><br>
<table>
                        <span class="title"><b></b></span>
                        <th><h3><b>Criminal's Sentence information:</b></h3></th>
                        <th></th>
                        <tr>
                        <div class="input-field">
                            <td><label>Sentence type</label></td>
                    
                            <td><select required name="sentence_type">
                                <option disabled selected>Sentence Type</option>
                                
                                <option>Fine</option>
                                <option>Imprisonment</option>
                                <option></option>
                                <option>Deshmukh</option>
                            </select></td>
                            <br>
</tr>
                         <tr>  
                        <div class="input-field">
                            <td><label> start Date</label></td>
                            <td><input type="date" name="sentence_start_date"></td>
                        </div>
</tr>
                        <br>
                        <tr>
                        <div class="input-field">
                            <td><label>End date</label></td>
                            <td><input type="date" name="sentence_end_date" ></td>
                        </div>
</tr>

                        <br>
</div>
</table>
<table>
                          <span class="title"><b></b></span> 
                            <th><h3><b>Victim Personal Details</b></h3></th>
                            <th></th>
                            <tr>
                        <div class="input-field">
                        <!-- <div class="input-field"> -->
                            <td><label>Victim ID</label></td>
                            <td><input type="number" placeholder="Enter ID number" name="victim_id" required></td>
                        </div>
</tr>
                        <br>
                        <tr>
                        <div class="input-field">
                            <td><label>First Name</label></td>
                            <td><input type="text" placeholder="Enter your first name" name="victim_first_name" required></td>
                        </div>
                        <br>
</tr>
                         <tr>
                        <div class="input-field">
                            <td><label>Last Name</label></td>
                            <td><input type="text" placeholder="Enter your last name" name="victim_last_name" required></td>
                        </div>
                        <br>
</tr>
<tr>

                        <div class="input-field">
                            <td><label>Date of Birth</label></td>
                            <td><input type="date" placeholder="Enter birth date" name="victim_dob" required></td>
                        </div>
                        <br>
</tr>

<tr>
                        <div class="input-field">
                            <td><label>Phone Number</label></td>
                            <td><input type="number" placeholder="Enter phone number" name = "victim_phno" required></td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                            <td><label>Gender</label></td>
                            <td><select name="victim_gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select></td>
                        </div>
                        <br>
</tr>
<tr>

                        <div class="input-field">
                            <td><label>Aadhaar Number</label></td>
                            <td><input type="text" placeholder="Enter your Aadhaar Number" name="victim_aadharno" required></td>
                        </div>
                        <br>
</tr>
<tr>
                        
                        <div class="input-field">
                           <td> <label>City</label></td>
                            <td><input type="text" name="victim_city" > </td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                            <td><label>State</label></td>
                             <td><input type="text" name="victim_state"> </td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                           <td> <label>Pincode</label></td>
                            <td><input type="number" name="victim_pincode" ></td>
                        </div>
                        <br>
</tr>

                    </div>
                </div>
</table>

<table>
               
                <th><h3><b>Criminal Personal Details:</b></h3></th>
                <th></th>
                <tr>
                        <div class="input-field">
                        <!-- <div class="input-field"> -->
                            <td><label>Criminal ID</label></td>
                            <td><input type="number" placeholder="Enter ID number" name="criminal_id" required></td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                            <td><label>First Name</label></td>
                            <td><input type="text" placeholder="Enter your first name" name="criminal_first_name" required></td>
                        </div>
                        <br>
</tr>
<tr>

                        <div class="input-field">
                            <td><label>Last Name</label></td>
                            <td><input type="text" placeholder="Enter your last name" name="criminal_last_name" required></td>
                        </div>
                        <br>
</tr>
<tr>

                        <div class="input-field">
                           <td> <label>Date of Birth</label></td>
                            <td><input type="date" placeholder="Enter birth date" name="criminal_dob" required></td>
                        </div>
                        <br>
</tr>

<tr>
                        <div class="input-field">
                           <td> <label>Phone Number</label></td>
                           <td> <input type="number" placeholder="Enter phone number" name = "criminal_phno" required></td>
                        </div>
                        <br>
</tr>

<tr>

                        <div class="input-field">
                            <td><label>Gender</label></td>
                            <td><select required name="criminal_gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select></td>
                        </div>
                        <br>
</tr>
<tr>

                        <div class="input-field">
                            <td><label>Aadhaar Number</label></td>
                           <td> <input type="text" placeholder="Enter your Aadhaar Number" name="criminal_aadharno" required></td>
                        </div>
                        <br>
</tr>

<tr>
                        
                        <div class="input-field">
                            <td><label>City</label></td>
                            <td><input type="text" name="criminal_city"> </td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                           <td> <label>State</label></td>
                            <td> <input type="text" name="criminal_state"> </td>
                        </div>
                        <br>
</tr>
<tr>
                        <div class="input-field">
                            <td><label>Pincode</label></td>
                            <td><input type="number" name="criminal_pincode" ></td>
                        </div>
                        <br>
</tr>
</table>

                    </div>
                </div>
                <input type="submit" name="sub_btn" value="Submit">


</form>



<!-- 
     ADDING DATA INTO DATABASE DEMO(IN PHP) --> 

     <?php 
if(isset($_POST['sub_btn'])){
//--------------------------------------CASE DETAILS----------------------------------------
    $case_id=$_POST['case_id'];
    $crime_id=$POST['crime_id'];
    $case_type=$_POST['case_type'];
    $court_name=$_POST['court_name'];
    $judge_name=$_POST['judge_name'];
    $hearing_date=$_POST['hearing_date'];
    $status=$_POST['case_status'];
    $sentence_type=$_POST['sentence_type'];
//--------------------------------------VICTIM DETAILS----------------------------------------
    $victim_id=$_POST['victim_id'];
    $victim_first_name=$_POST['victim_first_name'];
    $victim_last_name=$_POST['victim_last_name'];
    $victim_DOB=$_POST['victim_dob'];
    $victim_pno=$_POST['victim_phno'];
    $victim_gender=$_POST['victim_gender'];
    $victim_aadharno=$_POST['victim_aadharno'];
    $victim_city=$_POST['victim_city'];
    $victim_state=$_POST['victim_state'];
    $victim_pincode=$_POST['victim_pincode'];
//--------------------------------------CRIMINAL DETAILS----------------------------------------
    $criminal_id=$_POST['criminal_id'];
    $criminal_first_name=$_POST['criminal_first_name'];
    $criminal_last_name=$_POST['criminal_last_name'];
    $criminal_DOB=$_POST['criminal_dob'];
    $criminal_pno=$_POST['criminal_phno'];
    $criminal_gender=$_POST['criminal_gender'];
    $criminal_aadharno=$_POST['criminal_aadharno'];
    $criminal_city=$_POST['criminal_city'];
    $criminal_state=$_POST['criminal_state'];
    $criminal_pincode=$_POST['criminal_pincode'];
}
?>
</body>
</html>
  
   


<!-- $sql = "INSERT INTO table1 (column1, column2) VALUES ('$value1', '$value2');
        INSERT INTO table2 (column1, column2) VALUES ('$value3', '$value4');
        INSERT INTO table3 (column1, column2) VALUES ('$value5', '$value6')";

if ($con->multi_query($sql) === true) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   ?> --><!-- 
<?php include 'connection.php';  ?> connecting to server -->

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
<title> Data Entry</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!----======== CSS ======== -->
<!-- <link rel="stylesheet" href="style.css"> -->
 
<!----===== Iconscout CSS ===== -->
<!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->

<!--<title>Responsive Regisration Form </title>--> 
</head>
<body bgcolor=lightgreen>
<div class="container">
    <form action="#">
        <table>
            <th><h3><b>Registrtion of Case:</b></h3></th>
            <th><h3><b></b></h3></th>
        <div class="form first">
            <div class="details personal">
                <!-- <span class="title">Personal Details</span> -->
                <div class="fields">
                    <tr>
                    <div class="input-field">
                    <!-- <div class="input-field"> -->
                       
                        <td><label>Case ID</label></td><td><input type="number" placeholder="Enter ID number" name="case_id" required></td>

                      
                    </div>
                    </tr>
                    <br>
                    <tr>
                    <div class="input-field">
                    <!-- <div class="input-field"> -->
                        <td><label>Crime ID</label></td>
                        <td><input type="number" placeholder="Enter ID number" name="crime_id" required></td>
                    </div>
                    </tr>
                    <br>
                    <tr>
                    <div class="input-field">
                       <td> <label>Case Type</label></td>
                        <td><select required name="case_type">
                            <option disabled selected>Select type</option>
                            <option>Murder</option>
                            <option>kidnapping</option>
                            <option>Smuggling</option>
                            <option>Rape</option>
                            <option>Terrorism</option>
                            <option>half murder</option>
                            <option>white collar</option>
                            <option>hijacking</option>
                        </select></td>
                        <br>
</tr>
                        <tr>
                        <div class="input-field">
                        <td><label>Court name</label></td>
                        <td><input type="text" name="court_name" ></td>
                    </div>
</tr>
                    <br>
                    <tr>
                    <div class="input-field">
                        <td><label>Judge name</label></td>
                       <td> <select required name="judge_name">
                            <option disabled selected>Judge name</option>
                            
                            <option>Malhotra</option>
                            <option>Agrawal</option>
                            <option>Sharma</option>
                            <option>Deshmukh</option>
                            <option>Patil</option>
                            <option>Deshpande</option>
                            <option>Gill</option>
                            <option>Kohli</option>
                            <option>Singh</option>
                            <option>Khan</option>
                            <option>Malpani</option>
                            <option>Patel</option>
                           
                        



                        </select></td>
                        <br>
</tr>
                       
                    <!-- <div class="input-field">
                        <label>Judge Name</label>
                        <input type="text" >
                    </div> -->
                    <tr>
                    <div class="input-field">
                        <td><label>Hearing Date</label></td>
                        <td><input type="date" name="hearing_date"></td>
                    </div>
</tr>
                    <br>
                    <tr>
                    <div class="input-field">
                        <td><label>Status</label></td>
                       <td> <select required name="case_status">
                            <!-- <option disabled selected>Select gender</option> -->
                            <option>Solved</option>
                            <option>Unsolved</option>
                        
                        </select></td>
                        <br>
                    </div>
</tr>
                    <br>
</table>
<br>
<br><br><br><br><br>
<table>
                    <span class="title"><b></b></span>
                    <th><h3><b>Criminal's Sentence information:</b></h3></th>
                    <th></th>
                    <tr>
                    <div class="input-field">
                        <td><label>Sentence type</label></td>
                
                        <td><select required name="sentence_type">
                            <option disabled selected>Sentence Type</option>
                            
                            <option>Fine</option>
                            <option>Imprisonment</option>
                            <option></option>
                            <option>Deshmukh</option>
                        </select></td>
                        <br>
</tr>
                     <tr>  
                    <div class="input-field">
                        <td><label> start Date</label></td>
                        <td><input type="date" name="sentence_start_date"></td>
                    </div>
</tr>
                    <br>
                    <tr>
                    <div class="input-field">
                        <td><label>End date</label></td>
                        <td><input type="date" name="sentence_end_date" ></td>
                    </div>
</tr>

                    <br>
</div>
</table>
<table>
                      <span class="title"><b></b></span> 
                        <th><h3><b>Victim Personal Details</b></h3></th>
                        <th></th>
                        <tr>
                    <div class="input-field">
                    <!-- <div class="input-field"> -->
                        <td><label>Victim ID</label></td>
                        <td><input type="number" placeholder="Enter ID number" name="victim_id" required></td>
                    </div>
</tr>
                    <br>
                    <tr>
                    <div class="input-field">
                        <td><label>First Name</label></td>
                        <td><input type="text" placeholder="Enter your first name" name="victim_first_name" required></td>
                    </div>
                    <br>
</tr>
                     <tr>
                    <div class="input-field">
                        <td><label>Last Name</label></td>
                        <td><input type="text" placeholder="Enter your last name" name="victim_last_name" required></td>
                    </div>
                    <br>
</tr>
<tr>

                    <div class="input-field">
                        <td><label>Date of Birth</label></td>
                        <td><input type="date" placeholder="Enter birth date" name="victim_dob" required></td>
                    </div>
                    <br>
</tr>

<tr>
                    <div class="input-field">
                        <td><label>Phone Number</label></td>
                        <td><input type="number" placeholder="Enter phone number" name = "victim_phno" required></td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                        <td><label>Gender</label></td>
                        <td><select name="victim_gender" required>
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select></td>
                    </div>
                    <br>
</tr>
<tr>

                    <div class="input-field">
                        <td><label>Aadhaar Number</label></td>
                        <td><input type="text" placeholder="Enter your Aadhaar Number" name="victim_aadharno" required></td>
                    </div>
                    <br>
</tr>
<tr>
                    
                    <div class="input-field">
                       <td> <label>City</label></td>
                        <td><input type="text" name="victim_city" > </td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                        <td><label>State</label></td>
                         <td><input type="text" name="victim_state"> </td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                       <td> <label>Pincode</label></td>
                        <td><input type="number" name="victim_pincode" ></td>
                    </div>
                    <br>
</tr>

                </div>
            </div>
</table>

<table>
           
            <th><h3><b>Criminal Personal Details:</b></h3></th>
            <th></th>
            <tr>
                    <div class="input-field">
                    <!-- <div class="input-field"> -->
                        <td><label>Criminal ID</label></td>
                        <td><input type="number" placeholder="Enter ID number" name="criminal_id" required></td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                        <td><label>First Name</label></td>
                        <td><input type="text" placeholder="Enter your first name" name="criminal_first_name" required></td>
                    </div>
                    <br>
</tr>
<tr>

                    <div class="input-field">
                        <td><label>Last Name</label></td>
                        <td><input type="text" placeholder="Enter your last name" name="criminal_last_name" required></td>
                    </div>
                    <br>
</tr>
<tr>

                    <div class="input-field">
                       <td> <label>Date of Birth</label></td>
                        <td><input type="date" placeholder="Enter birth date" name="criminal_dob" required></td>
                    </div>
                    <br>
</tr>

<tr>
                    <div class="input-field">
                       <td> <label>Phone Number</label></td>
                       <td> <input type="number" placeholder="Enter phone number" name = "criminal_phno" required></td>
                    </div>
                    <br>
</tr>

<tr>

                    <div class="input-field">
                        <td><label>Gender</label></td>
                        <td><select required name="criminal_gender">
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select></td>
                    </div>
                    <br>
</tr>
<tr>

                    <div class="input-field">
                        <td><label>Aadhaar Number</label></td>
                       <td> <input type="text" placeholder="Enter your Aadhaar Number" name="criminal_aadharno" required></td>
                    </div>
                    <br>
</tr>

<tr>
                    

                    <div class="input-field">
                        <td><label>City</label></td>
                        <td><input type="text" name="criminal_city"> </td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                       <td> <label>State</label></td>
                        <td> <input type="text" name="criminal_state"> </td>
                    </div>
                    <br>
</tr>
<tr>
                    <div class="input-field">
                        <td><label>Pincode</label></td>
                        <td><input type="number" name="criminal_pincode" ></td>
                    </div>
                    <br>
</tr>
</table>

                </div>
            </div>
            <input type="submit" name="sub_btn" value="Submit">


</form>



<!-- 
 ADDING DATA INTO DATABASE DEMO(IN PHP) --> 

 <?php 
if(isset($_POST['sub_btn'])){
//--------------------------------------CASE DETAILS----------------------------------------
$case_id=$_POST['case_id'];
$crime_id=$POST['crime_id'];
$case_type=$_POST['case_type'];
$court_name=$_POST['court_name'];
$judge_name=$_POST['judge_name'];
$hearing_date=$_POST['hearing_date'];
$status=$_POST['case_status'];
$sentence_type=$_POST['sentence_type'];
//--------------------------------------VICTIM DETAILS----------------------------------------
$victim_id=$_POST['victim_id'];
$victim_first_name=$_POST['victim_first_name'];
$victim_last_name=$_POST['victim_last_name'];
$victim_DOB=$_POST['victim_dob'];
$victim_pno=$_POST['victim_phno'];
$victim_gender=$_POST['victim_gender'];
$victim_aadharno=$_POST['victim_aadharno'];
$victim_city=$_POST['victim_city'];
$victim_state=$_POST['victim_state'];
$victim_pincode=$_POST['victim_pincode'];
//--------------------------------------CRIMINAL DETAILS----------------------------------------
$criminal_id=$_POST['criminal_id'];
$criminal_first_name=$_POST['criminal_first_name'];
$criminal_last_name=$_POST['criminal_last_name'];
$criminal_DOB=$_POST['criminal_dob'];
$criminal_pno=$_POST['criminal_phno'];
$criminal_gender=$_POST['criminal_gender'];
$criminal_aadharno=$_POST['criminal_aadharno'];
$criminal_city=$_POST['criminal_city'];
$criminal_state=$_POST['criminal_state'];
$criminal_pincode=$_POST['criminal_pincode'];
}
?>
</body>
</html>



<!-- $sql = "INSERT INTO table1 (column1, column2) VALUES ('$value1', '$value2');
    INSERT INTO table2 (column1, column2) VALUES ('$value3', '$value4');
    INSERT INTO table3 (column1, column2) VALUES ('$value5', '$value6')";

if ($con->multi_query($sql) === true) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
?> -->