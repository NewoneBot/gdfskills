<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <?php
	include_once 'connection.php';
	// include_once 'header.php';


        $full__name = $_POST['first_name'];
		$father_name = $_POST['father'];
		$contact_no = $_POST['contact_number'];
		$home_address = $_POST['home_add'];
		$school_address = $_POST['school_loc'];
		$school_name = $_POST['school_name'];
		$branch= $_POST['branch'];
		$branch_time= $_POST['time'];
		$course= $_POST['courses'];

        $sql="INSERT INTO `demo_class`(`full__name`, `father_name`, `contact_no`, `school_name`, `school_address`, `home_address`, `branch`, `branch_time`, `course`) VALUES ('$full__name','$father_name','$contact_no','$school_name','$school_address','$home_address','$branch','$branch_time','$course')";
        
        if(mysqli_query($conn, $sql)){
		?>
    <div class="container p-5 mt-5 mb-5" style="border:2px solid black;">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12 d-flex justify-content-center">
                    <img src="img/GDF.png" alt="" style="height:150px;" class="">
                </div>
                <table>
                    <thead style="font-size:18px;">
                        <tr>
                            <th>Name :<?php echo $full__name?></th>
                        </tr>
                        <tr>
                            <th>Father :<?php echo $father_name?></th>
                        </tr>
                        <tr>
                            <th>Contact :<?php echo $contact_no?> </th>
                        </tr>
                        <tr>
                            <th>Address :<?php echo $home_address?> </th>
                        </tr>
                        <tr>
                            <th>GDF skills :<?php echo $branch?> </th>
                        </tr>
                        <tr>
                            <th>Class Time :<?php echo $branch_time?> </th>
                        </tr>

                    </thead>

                </table>
                <hr style="border:2px solid black">

                <h1 class="ml-5">Note:-</h1>
                <ul class="m-5" style="font-size: 20px;">
                    <li>Please carry this slip for takking free Demo classes</li>
                    <li>Demo classes Duration 15 Days </li>
                    <li>Please carry any photo ID proof (Aadhar,Voter ID,Pen card)</li>
                    <li>Please come on time Grass preriod</li>
                </ul>
                <br>
                <br>
                <br>


                <hr style="border:2px solid black">




            </div>

        </div>
        <div class="d-flex justify-content-between">



            <div>
                Career Counselor Name ...................................
            </div>


            <div>
                Contact No.: ..............................
            </div>
        </div>
        <br>
        <p style="font-weight:500;">
            Head Office: A-7A, Milap Nagar, Opposite: East Milap Nagar, Near Metro Pillar No.652, Uttam Nagar-110059
            Delhi Branches: UTTAM NAGAR I EAST AZAD NAGAR PALAM I NAJAFGARHI KALKAJI BADARPURI ROHINI SALIMAR BAGH
            9891768667 9584115575 9971024870 9667389159 9667389159 9891768667 9971024870 9717750164 Pan India Branches:
            Jaipur | Kota | Mumbai | Bhopal | Vidisa Kanpur Agra | Luknow kolkata

            E-mail: mail@gdfskills.com | Web.: gdfskills.com Cont.: 98917 68667 | 99710 24870 I Student helpline
            No. : 011 4045 4752
        </p>
        <!-- <a class="btn btn-success hidden-print" id="print">print</a> -->

        <a class="btn btn-success hidden-print" href="javascript:window.print()">print</a>
    </div>




    <?php
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
        mysqli_close($conn);
?>


</body>

</html>