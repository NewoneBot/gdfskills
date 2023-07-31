<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Fees:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />

    <?php include 'links.php'; ?>
    <style>

    </style>
</head>

<body oncontextmenu="return false;">
    <!-- home -->
    <div id="home" class="inner-gdf-page">
        <div class="overlay-innerpage">
            <?php include 'profile_header.php'; ?>
        </div>
        <!-- //banner -->
    </div>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary">Fees Details </h4>
                <table class="table">
                    <tr>
                        <td>Total Fees</td>
                        <td><?php echo $_SESSION["student_total_fees"]; ?></td>
                    </tr>
                    <tr>
                        <td>Addmission Fees</td>
                        <td><?php echo $_SESSION["student_admission_amount"]; ?></td>
                    </tr>
                    <tr>
                        <td>Total Installments</td>
                        <td><?php echo $_SESSION["student_total_installments"]; ?></td>
                    </tr>
                    <tr>
                        <td>Installment Amount</td>
                        <td><?php echo $_SESSION["student_installment_amount"]; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary">Fees Status </h4>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="table-success">
                            <th>S.No</th>
                            <th>Fee Pay Date</th>
                            <th>Fee Slip No.</th>
                            <th>Fee Amount</th>
                            <th>Fee Type</th>
                            <th>Remaning Fee</th>
                        </tr>
                    </thead>
                    <tbody id="feeTable">
                        <?php
                // session_start();
                // $server="Localhost";
                // $user="gdfims_root";
                // $password="Admin@123";
                // $dbname="gdfims_ims";
                
                // $con = mysqli_connect($server,$user,$password,$dbname);
               include 'connection.php'; 
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error($conn));
                } 
                
                else {
                     
                    $i=0;
                    $totalFeePaid = 0;
                    
                    $sql = "select student_fee.*,DATE_FORMAT(fee_paid_date,'%d %M %Y') fee_paid_date1,DATE_FORMAT(next_fee_paid_date,'%d %M %Y') next_fee_paid_date1 from student_fee where student_reg_no = '" . $_SESSION["student_reg_no"] . "' order by fee_id";
                    
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while($row=mysqli_fetch_assoc($result))
                      {
                          ?>
                        <tr>
                            <td><?php echo ++$i;?></td>
                            <td><?php echo $row["fee_paid_date"];?></td>
                            <td><?php echo $row["fee_receipt_no"];?></td>
                            <td><?php echo $row["fee_paid"];?></td>
                            <td><?php 
                                        if($row["fee_type"]==1)
                                        {
                                            echo "Installment Fees";
                                        }else if($row["fee_type"]==2)
                                        {
                                            echo "Admission Fees";
                                        }else if($row["fee_type"]==3)
                                        {
                                            echo "Registration Fees";
                                        }else if($row["fee_type"]==4)
                                        {
                                            echo "Confirmation Fees";
                                        }else if($row["fee_type"]==5)
                                        {
                                            echo "Book Fees";
                                        }else 
                                        {
                                            echo "Other Fees";
                                        }
                                
                                        ?></td>
                            <td>
                                <?php
                                    if ($row["fee_type"] == 2 || $row["fee_type"] == 1) {
                                        $totalFeePaid += $row["fee_paid"];
                                    }
                                    $remainingFee = $_SESSION["student_total_fees"] - $totalFeePaid;
                
                                    echo $remainingFee;
                                    ?>
                            </td>
                        </tr>
                        <?php
                      }
                    }
                }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 GDF. All rights reserved
        </p>

    </div>
    <!-- //copyright -->
    <script>
    $(document).ready(function() {
        $.ajax({
            url: "getFeestatusDB.php?reg="
            <?php echo $_SESSION['student_reg_no'];?>,
            type: "POST",
            success: function(result) {
                $("#feeTable").html(result);
            }

        });



    });
    </script>
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>