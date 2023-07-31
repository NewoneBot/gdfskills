<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/gdf_logo.png" type="image/x-icon">
</head>

<style>
body::-webkit-scrollbar {
    display: none;
}
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
            include 'header.php';     
            include 'sidemanu.php';
?>
            <div class="col-md-10 p-0 bg-light p-3">
                <h1 class="px-2">Upload Exam Paper</h1>
                <hr>
                <form action="uploadExamdb.php" method="POST" enctype="multipart/form-data">
                    <div class="p-3 d-flex flex-wrap bg-white border rounded ">
                        <div class="form-group w-100 p-2" id="form-group" enctype="multipart/form-data">
                            <label class="fw-bold">Enter Exam Table Name To Upload Exam Paper</label>
                            <input class="form-control w-100" type="text" id="" name="file">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Upload Exam</label>
                            <input class="form-control w-100" type="file" name="import">
                        </div>
                        <div class="form-group w-50 p-2 d-flex align-items-end" id="form-group">
                            <button type="submit" class="btn btn-primary w-100" value='1' name="save_excel_data"
                                id="bt">Search</button>
                        </div>
                    </div>
                </form>
                <div class="p-3 mt-3 bg-white border rounded">
                    <div class="w-100 d-flex justify-content-between">
                        <h2 class="p-2 mt-2 text-muted"><i class="fa-sharp fa-solid fa-file-lines mx-2"></i> Exam List
                        </h2>
                        <h2 class="p-2 mt-2 text-muted bg-light rounded"><i class="fa-solid fa-filter"></i></h2>
                    </div>
                    <div class="table-responsive border rounded shadow-sm" style="z-index: -1;">
                        <table class="table ">
                            <thead class="bg-light">
                                <tr class="">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Exam Code</th>
                                    <th scope="col">Exam Time</th>
                                    <th scope="col">Total Marks</th>
                                    <th scope="col">Exam Type</th>
                                    <th scope="col">Exam Mode</th>
                                    <th scope="col">Is Active</th>
                                    <th scope="col">Modul Name</th>
                                    <th scope="col">Exam Date</th>
                                </tr>
                            </thead>
                            <tbody id="table-data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
function loadTable(data) {
    $.ajax({
        url: "showexamList.php",
        type: "POST",
        success: function(response) {
            $("#table-data").html(response);
        }
    });
}
loadTable();
</script>

</html>