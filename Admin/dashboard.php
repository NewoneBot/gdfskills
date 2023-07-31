<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">
</head>

<style>
body::-webkit-scrollbar {
    display: none;
}
</style>


<body>
    <?php  
    include 'header.php';     
    ?>



    <div class="container-fluid">
        <div class="row">
            <?php 
include 'sidemanu.php';
?>

            <div class="col-md-10 p-0">
                <div class="p-2">
                    <div class="alert alert-primary m-0" role="alert">
                        Daily visits list as per date
                    </div>
                    <div class="d-flex">
                        <div class="form-group w-50 p-2" id="form-group">
                            <label for="">From Date</label>
                            <input class="form-control w-100" type="date" id="from" name="from">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label for="">Too Date</label>
                            <input class="form-control w-100" type="date" id="to" name="to">
                        </div>
                    </div>
                </div>

                <div class="form-group w-100 p-2" id="form-group">
                    <button class="btn btn-primary w-100" id="bt" onclick="datechange()">Search</button>
                </div>
                <div class="table-responsive" style="z-index: -1;">
                    <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar">
                        <thead class="thead table-primary sticky-top">
                            <tr>
                                <th>S.No.</th>
                                <th>name</th>
                                <th>Father’s name</th>
                                <th>Contact no</th>
                                <th>School name</th>
                                <th>Pin code</th>
                                <th>Date of visit</th>
                                <th>Branch code</th>
                                <th>enquiry member</th>
                                <th>Close enquiry </th>
                            </tr>
                        </thead>
                        <tbody id="table-data" class="">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function datechange() {
    var from_date = document.getElementById("from").value;
    var to_date = document.getElementById("to").value;
    var institue = document.getElementById("institute").value;
    loadTable(from_date, to_date, institue);
}

function loadTable(date1, date2, date3) {
    $.ajax({
        url: "visitD.php",
        type: "POST",
        data: {
            date1: date1,
            date2: date2,
            date3: date3
        },
        success: function(response) {
            $("#table-data").html(response);
        }
    });
}
loadTable();
</script>



</html>