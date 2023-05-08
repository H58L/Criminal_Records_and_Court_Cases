<?php
require_once "connection.php";
?>

<!-- <body>
    <div class="container">
        <header>Registration</header>

        <form action="#">
            <div class="form first">
                <div class="details personal"> -->
                    

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="style.css"> -->
     
    <!----===== Iconscout CSS ===== -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
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

input[type="date"]{
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    margin-left: 20px;
}

select{
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

h3{
    font-size: 30px;
}
</style>

<body>
    <div class="container">
        <h3>Registration of Case</h3>
        <form action="" method="POST">
        <table>
                <th><h3><b></b></h3></th>
                <th><h3><b></b></h3></th>
            <div class="form first">
                <div class="details personal">
                    <!-- <span class="title">Personal Details</span> -->
                  
                    <div class="fields">
                        <div class="input-field">
                            <label>Case ID</label>
                            <input type="number" placeholder="Enter ID number" name="case_id" required>
                        </div>

                        <div class="input-field">
                            <label>Case Type</label>
                            <select required name="case_type">
                                <option disabled selected>Select type</option>
                                <option>Murder</option>
                                <option>Kidnapping</option>
                                <option>Smuggling</option>
                                <option>Rape</option>
                                <option>Terrorism</option>
                                <option>Half murder</option>
                                <option>White collar</option>
                                <option>Hijacking</option>
                            </select>
                        </div>

                        <div class="input-field">
                        <label>Court name</label>
                        <select required name="court_name">
                                <option disabled selected>Court name</option>
                                <option>Allahabad High Court</option>
                                 <option>Andhra Pradesh High Court</option>
                                <option>Bombay High Court</option>
                                <option>Calcutta High Court</option>
                                <option>Chhattisgarh High Court</option>
                                <option>Delhi High Court</option>
                                <option>Gujarat High Court</option>
                                <option>Himachal Pradesh High Court</option>
                                <option>Jammu and Kashmir High Court</option>
                                <option>Jharkhand High Court</option>
                                <option>Karnataka High Court</option>
                                <option>Kerala High Court</option>
                                <option>Madhya Pradesh High Court</option> 
                                <option>Madras High Court</option>
                                <option>Manipur High Court</option>
                                <option>Meghalaya High Court</option>
                                <option>Orissa High Court</option>
                                <option>Patna High Court</option>
                                <option>Punjab and Haryana High Court</option>
                                <option>Rajasthan High Court</option>
                                <option>Sikkim High Court</option>
                                <option>Telangana High Court</option>
                                <option>Tripura High Court</option>
                                <option>Uttarakhand High Court</option>
                                <option>High Court for the Union Territory of Jammu and Kashmir and Ladakhoption</option>
                            </select>
                    </div>

                        <div class="input-field">
                            <label>Judge name</label>
                            <select required name="judge_name">
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
                            </select>

                        <div class="input-field">
                            <label>Hearing Date</label>
                            <input type="date" name="hearing_date">
                        </div>

                        <div class="input-field">
                            <label>Status</label>
                            <select required name="case_status">
                                <option>Solved</option>
                                <option>Unsolved</option>
                            </select>
                            </div>
                        </div>
<br>
<!-- --------------------------------------CRIME DETAILS---------------------------------------- -->
<br>
                    <span class="title">Crime Details</span> 
                          <div class="fields">

                          <div class="input-field">
                            <label>Crime ID</label>
                            <input type="number" placeholder="Enter ID number" name="crime_id" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Crime</label>
                            <input type="date" placeholder="Enter crime date" name="crime_date" required>
                        </div>
                        
                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter City" name="crime_city" > 
                        </div>

                        <div class="input-field">
                        <label>State</label>
                         <select required name="crime_state">
                                <option disabled selected>State</option>
                                <option>Andhra Pradesh </option>
                                <option>Arunachal Pradesh </option>
                                <option>Assam </option>
                                <option>Bihar </option>
                                <option>Chhattisgarh </option>
                                <option>Goa </option>
                                <option>Gujarat </option>
                                <option>Haryana </option>
                                <option>Himachal Pradesh </option>                           
                                <option>Jharkhand </option>
                                <option>Karnataka </option>
                                <option>Kerala </option>
                                <option>Madhya Pradesh </option> 
                                <option>Maharashtra </option> 
                                <option>Manipur </option>
                                <option>Meghalaya</option>
                                <option>Mizoram </option> 
                                <option>Nagaland </option> 
                                <option>Orissa </option>
                                <option>Punjab </option>
                                <option>Rajasthan </option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu </option> 
                                <option>Telangana </option>
                                <option>Tripura </option>
                                <option>Uttarpradesh </option>
                                <option>Uttarakhand </option>
                                <option>West Bengal </option>
                                <option>Jammu Kashmir </option>
                           </select>
                    </div>

                        <div class="input-field">
                            <label>Pincode</label>
                            <input type="number" placeholder="Enter Pincode" name="crime_pincode" >
                        </div>
                    </div>
<br>
<!-- --------------------------------------SENTENCE DETAILS---------------------------------------- -->
<br>                        
                        <span class="title">Criminal's Sentence information</span>
                        <div class="input-field">
                            <label>Sentence type</label>
                            <select required name="sentence_type">
                                <option disabled selected>Sentence Type</option>
                                <option>Fine</option>
                                <option>Imprisonment</option>
                                <option>Life time Imprisonment</option>
                                <option>Death Sentence</option>
                            </select>

                        <div class="input-field">
                            <label> Start Date</label>
                            <input type="date" name="sentence_start_date">
                        </div>

                        <div class="input-field">
                            <label>End Date</label>
                            <input type="date" name="sentence_end_date" >
                        </div>
                        </div>
<br>
<!-- --------------------------------------VICTIM DETAILS---------------------------------------- -->
<br>
                    <span class="title">Victim Personal Details</span> 
                    <div class="fields">
                        <div class="input-field">
                            <label>Victim ID</label>
                            <input type="number" placeholder="Enter ID number" name="victim_id" required>
                        </div>
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="victim_first_name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your last name" name="victim_last_name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="victim_dob" required>
                        </div>

                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter phone number" name = "victim_phno" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="victim_gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Aadhaar Number</label>
                            <input type="text" placeholder="Enter your Aadhaar Number" name="victim_aadharno" required>
                        </div>
                        
                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter City" name="victim_city" > 
                        </div>

                        <div class="input-field">
                        <label>State</label>
                         <select required name="victim_state">
                                <option disabled selected>State</option>
                                <option>Andhra Pradesh </option>
                                <option>Arunachal Pradesh </option>
                                <option>Assam </option>
                                <option>Bihar </option>
                                <option>Chhattisgarh </option>
                                <option>Goa </option>
                                <option>Gujarat </option>
                                <option>Haryana </option>
                                <option>Himachal Pradesh </option>                           
                                <option>Jharkhand </option>
                                <option>Karnataka </option>
                                <option>Kerala </option>
                                <option>Madhya Pradesh </option> 
                                <option>Maharashtra </option> 
                                <option>Manipur </option>
                                <option>Meghalaya</option>
                                <option>Mizoram </option> 
                                <option>Nagaland </option> 
                                <option>Orissa </option>
                                <option>Punjab </option>
                                <option>Rajasthan </option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu </option> 
                                <option>Telangana </option>
                                <option>Tripura </option>
                                <option>Uttarpradesh </option>
                                <option>Uttarakhand </option>
                                <option>West Bengal </option>
                                <option>Jammu Kashmir </option>
                           </select>
                        </div>

                        <div class="input-field">
                            <label>Pincode</label>
                            <input type="number" placeholder="Enter Pincode" name="victim_pincode" >
                        </div>
                    </div>
<br>
<!-- --------------------------------------CRIMINAL DETAILS---------------------------------------- -->
<br>
                    <div class="fields">
                        <span class="title">Criminal Personal Details</span> 

                        <div class="input-field">
                            <label>Criminal ID</label>
                            <input type="number" placeholder="Enter ID number" name="criminal_id" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="criminal_first_name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your last name" name="criminal_last_name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="criminal_dob" required>
                        </div>

                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter phone number" name = "criminal_phno" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="criminal_gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Aadhaar Number</label>
                            <input type="text" placeholder="Enter your Aadhaar Number" name="criminal_aadharno" required>
                        </div>
                        
                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter City" name="criminal_city"> 
                        </div>

                        <div class="input-field">
                        <label>State</label>
                         <select required name="criminal_state">
                                <option disabled selected>State</option>
                                <option>Andhra Pradesh </option>
                                <option>Arunachal Pradesh </option>
                                <option>Assam </option>
                                <option>Bihar </option>
                                <option>Chhattisgarh </option>
                                <option>Goa </option>
                                <option>Gujarat </option>
                                <option>Haryana </option>
                                <option>Himachal Pradesh </option>                           
                                <option>Jharkhand </option>
                                <option>Karnataka </option>
                                <option>Kerala </option>
                                <option>Madhya Pradesh </option> 
                                <option>Maharashtra </option> 
                                <option>Manipur </option>
                                <option>Meghalaya</option>
                                <option>Mizoram </option> 
                                <option>Nagaland </option> 
                                <option>Orissa </option>
                                <option>Punjab </option>
                                <option>Rajasthan </option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu </option> 
                                <option>Telangana </option>
                                <option>Tripura </option>
                                <option>Uttarpradesh </option>
                                <option>Uttarakhand </option>
                                <option>West Bengal </option>
                                <option>Jammu Kashmir </option>
                           </select>
                        </div>

                        <div class="input-field">
                            <label>Pincode</label>
                            <input type="number" placeholder="Enter Pincode" name="criminal_pincode" >
                        </div>
                    </div>
                </div>
                <input type="submit" name="save_btn" value="Submit">
            </div>
</form>
    </div>
    <?php 
if(isset($_POST['save_btn'])){
//--------------------------------------CASE DETAILS----------------------------------------
    $case_id=$_POST['case_id'];
    $court_name=$_POST['court_name'];
    $judge_name=$_POST['judge_name'];
    $case_type=$_POST['case_type'];
    $hearing_date=$_POST['hearing_date'];
    $status=$_POST['case_status'];
//--------------------------------------CRIME DETAILS----------------------------------------
    $crime_id=$_POST['crime_id'];
    $crime_date=$_POST['crime_date'];
    $crime_city=$_POST['crime_city'];
    $crime_state=$_POST['crime_state'];
    $crime_pincode=$_POST['crime_pincode'];
//--------------------------------------SENTENCE DETAILS----------------------------------------
    $sentence_type=$_POST['sentence_type'];
    $sentence_id=$_POST['case_id']+1000;
    $sentence_start_date=$_POST['sentence_start_date'];
    $sentence_end_date=$_POST['sentence_end_date'];
//--------------------------------------VICTIM DETAILS----------------------------------------
    $victim_id=$_POST['victim_id'];
    $victim_first_name=$_POST['victim_first_name'];
    $victim_last_name=$_POST['victim_last_name'];
    $victim_DOB=$_POST['victim_dob'];
    $victim_pno=$_POST['victim_phno'];
    $victim_gender=$_POST['victim_gender'];
    $victim_aadhaarno=$_POST['victim_aadharno'];
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
    $criminal_aadhaarno=$_POST['criminal_aadharno'];
    $criminal_city=$_POST['criminal_city'];
    $criminal_state=$_POST['criminal_state'];
    $criminal_pincode=$_POST['criminal_pincode'];

    $case_query = "INSERT INTO cases(CaseID,CourtName,JudgeName,CaseType,HearingDate,case_status) 
    VALUES('$case_id','$court_name','$judge_name','$case_type','$hearing_date','$status')";

    $crime_query = "INSERT INTO crime(CrimeID,CriminalID,VictimID,CaseID,crime_date,States,City,Pincode) 
    VALUES('$crime_id','$criminal_id','$victim_id','$case_id','$crime_date','$crime_state','$crime_city','$crime_pincode')";

    $sentence_query = "INSERT INTO sentence1(SentenceID,CaseID,StartDate,EndDate,SentenceType) 
    VALUES('$sentence_id','$case_id','$sentence_start_date','$sentence_end_date','$sentence_type')";

    $victim_query = "INSERT INTO victimm(VictimID,CrimeID,FirstName,LastName,PhoneNo,Gender,Victim_DOB,AadhaarNo,States,City,Pincode) 
    VALUES('$victim_id','$crime_id','$victim_first_name','$victim_last_name','$victim_gender','$victim_DOB','$criminal_pno','$criminal_aadhaarno','$victim_state','$victim_city','$victim_pincode')";

    $criminal_query = "INSERT INTO criminal3(CriminalID,CrimeID,FirstName,LastName,Gender,criminal_dob,PhoneNumber,AadharNo,States,City,Pincode) 
    VALUES('$criminal_id','$crime_id','$criminal_first_name','$criminal_last_name','$criminal_gender','$criminal_DOB','$criminal_pno','$criminal_aadhaarno','$criminal_state','$criminal_city','$criminal_pincode')";

   
    $case_data = mysqli_query($con,$case_query)or die('Query 1 is failed'.mysqli_error($con));
    $crime_data = mysqli_query($con,$crime_query)or die('Query 2 is failed'.mysqli_error($con));
    $sentence_data = mysqli_query($con,$sentence_query)or die('Query 5 is failed'.mysqli_error($con));
    $victim_data = mysqli_query($con,$victim_query)or die('Query 4 is failed'.mysqli_error($con));
    $criminal_data = mysqli_query($con,$criminal_query)or die('Query 3 is failed'.mysqli_error($con));

}
?>
</body>
</html>
