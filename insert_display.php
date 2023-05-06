<?php include 'connection.php';  ?> connecting to server -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Display of Cases</title>
</head>
<body>
    <div class="main-div">
        <h1>List of courts</h1>
        
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <h3><th>Case Id</th></h3>
                            <h3><th>Case Type</th></h3>
                            <h3><th>Court Name</th></h3>
                            <h3><th>Judge Name</th></h3>
                            <h3><th>Hearing Date</th></h3>
                            <h3><th>Case Status</th></h3>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        include "connection.php";

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
</html>