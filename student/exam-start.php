<?php
include 'connection.php';
include 'links.php';
session_start();
if(isset($_SESSION["registeration_no"]))
{
    if (!$conn) {
        echo "register";
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
            $examId = $_GET['eid'];
            $sql="select * from gdfcreate_exam where examCode='$examId'";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
                if($row=mysqli_fetch_array($res)){
                    $examTime=$row['examTime'];
                    $totalMarks=$row['totalMarks'];
                    $examName=$row['examName'];
                    $examCode=$row['examCode'];
                }
            }
            else{
                header("Location:online-exam.php");  
              }
    }
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM START</title>
</head>
<style>
.filler {
    color: black !important;
    background-color: rgba(0, 0, 0, .03);
    box-shadow: 0px 0px 2px 0px #00000047;
    padding: 15px 20px;
}

.filler:hover {
    background-color: green !important;
    color: white !important;
}

.filler_active {
    background-color: green !important;
    color: white !important;
}
</style>

<body onload="f1()">
    <nav class="navbar  navbar-expand navbar-dark bg-primary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#"><?php echo $_SESSION["registeration_no"];?></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-end flex-wrap">
                    <li class="nav-item p-2">
                        <input type="hidden" name="examName" id="tableName" value="<?php echo $examName; ?>">
                        <input type="hidden" id="registeration_no" value="<?php echo $_SESSION["registeration_no"];?>">
                        <input type="hidden" id="examCode" value="<?php echo $examCode;?>">
                    </li>
                    <li class="nav-item p-2">
                        <button type="button" class="btn btn-warning">
                            EXAM NAME :-
                            <?php echo $examName ?>
                        </button>
                    </li>
                    <li class="nav-item p-2">
                        <button type="button" class="btn btn-warning">EXAM Total Marks :-<?php echo $totalMarks ?>
                        </button>
                    </li>
                    <li class="nav-item p-2">
                        <button type="button" class="btn btn-warning" id="starttime"></button>
                    </li>
                    <li class="nav-item p-2" id="starttime">
                        <button type="button" class="btn btn-warning" id="showtime"></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="studentResultDB.php" method="post" id="myExamForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 p-4" id="table-data">
                </div>
                <div class="col-lg-12 mb-3 p-4" id="update">
                </div>
            </div>
        </div>
    </form>

</body>
<script>
let storObj = {};

function getQA(clicked_id, check_name) {
    let questions = clicked_id;
    let answers = check_name;
    Store(questions, answers);
}

function Store(getquestions, getanswers) {
    storObj[getquestions] = [];
    storObj[getquestions] = getanswers;
    localStorage.setItem("storeAnswer", JSON.stringify(storObj));
    checkColor(storObj);
    readLoop();
    // total_count();
}

function readLoop() {
    const x = JSON.parse(localStorage.getItem("storeAnswer"));
    checkColor(x);

}

function checkColor(storObj) {
    const question = document.getElementById('questionNo').value;
    for (var key in storObj) {
        if (question == key) {
            let answer = storObj[key];
            if (answer == 'a') {
                $(".option").removeClass("filler_active");
                $("#a").addClass("filler_active");
            } else if (answer == 'b') {
                $(".option").removeClass("filler_active");
                $("#b").addClass("filler_active");
            } else if (answer == 'c') {
                $(".option").removeClass("filler_active");
                $("#c").addClass("filler_active");
            } else if (answer == 'd') {
                $(".option").removeClass("filler_active");
                $("#d").addClass("filler_active");
            }
        }
    }
}

function upl() {
    localStorage.clear();
    var table = document.getElementById("tableName").value;
    let registeration_no = document.getElementById('registeration_no').value;
    let examCode = document.getElementById('examCode').value;
    let studentAnswer = JSON.stringify(storObj);
    $.ajax({
        url: "insertResultTable.php",
        type: "POST",
        data: {
            registeration_no: registeration_no,
            examCode: examCode,
            studentAnswer: studentAnswer,
            table: table
        },
        success: function(data) {
            $("#update").html(data);
            if (data == 1) {
                window.location.href = "student-home.php";
            } else {
                alert("please consulte with teacher you exam is not inserted");
            }
        }
    });
}

function loadTable(page) {
    var table = document.getElementById("tableName").value;
    $.ajax({
        url: "examdb.php",
        type: "POST",
        data: {
            page_no: page,
            table: table
        },
        success: function(data) {
            $("#table-data").html(data);
            readLoop();
        }
    });
}
loadTable();


$(document).on("click", "#pagination button", function(e) {
    e.preventDefault();
    var page_id = $(this).attr("id");
    loadTable(page_id);
});
$(document).on("click", ".next", function(e) {
    e.preventDefault();
    var page_id = $(this).attr("id");
    loadTable(page_id);
});
var tim;
var min = <?php echo $examTime ?>;
var sec = 60;
var f = new Date();

function f1() {
    f2();
    document.getElementById("starttime").innerHTML = "Started your Exam at " + f.getHours() + ":" + f
        .getMinutes();
}

function f2() {
    if (parseInt(sec) > 0) {
        sec = parseInt(sec) - 1;
        document.getElementById("showtime").innerHTML = "Time Left :" + min + " Minutes " + sec +
            " Seconds";
        tim = setTimeout("f2()", 1000);
    } else {
        if (parseInt(sec) == 0) {
            min = parseInt(min) - 1;
            if (parseInt(min) == 0) {
                clearTimeout(tim);
                upl();
                // document.getElementById("myExamForm").submit();
            } else {
                sec = 60;
                document.getElementById("showtime").innerHTML = "Time Left :" + min + " Minutes " + sec +
                    " Seconds";
                tim = setTimeout("f2()", 1000);
            }
        }
    }
}
</script>

</html>
<?php
}
else
{
  header("Location:online-exam.php");  
}
?>