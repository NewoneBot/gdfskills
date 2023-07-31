<!DOCTYPE html>
<html>
<head>
<title>SCHEDULE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
    
<style>

</style>
</head>
<body oncontextmenu="return false;">
<?php include 'header.php'; ?>
<!-- <img class="ban" src="" > -->
<!-- <div class="mainpage" style="background-color:red; padding:100px;"> -->
<div class="page_top_img">
                    <img src="img/f.jpg">
                    </div>

<div class="content"  style="background-color:yellow; padding:50px;text-align: center; ">
<div class="containerform" >
<br><br><br><h2>Online class Schedule</h2>

<table class="online" >
  <tr>
<!--    <td><a href="schedule/Revision_class.xlsx">Revision Classes</a></td> --> <td><a href="schedule/Diploma_Exam_March.xlsx">Exam Schedule</a></td>
  </tr>
</table>
    <h2>Find User ID & Password</h2>
  <form name="RegForm" onSubmit="return validateForm();" method="post" action="searchIdpawrdDB.php">
    <div class="row">
      <div class="col-3">
        <label for="course">Branch</label>
      </div>
      <div class="col-6">
        <select id="branch" name="selbranch">
          <option value = "-1">--- Select Branch ---</option>
          <option value="05">Uttam Nagar</option>
          <option value="06">East Azad Nagar</option>
            <option value="07">Pitampura</option>
          <option value="08">Kalkaji</option>
            <option value="09">Badarpur</option>
          <option value="10">Dilshad Garden</option>
            <option value="11">Jaipur</option>
          <option value="12">Kota</option>
            <option value="13">Mumbai</option>
          <option value="14">Bhopal</option>
            <option value="15">Vidisa</option>
            <option value="16">Kanpur</option>
            <option value="17">Agra</option>
            <option value="18">Lakhnow</option>
            <option value="19">Kolkata</option>
        </select>
      </div>
      </div>
    <div class="row">
      <div class="col-3">
        <label for="fname">First Name</label>
      </div>
      <div class="col-6">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
      </div>
        <div class="row">
      <div class="col-3">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-6">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="lname">Father's Name</label>
      </div>
      <div class="col-6">
        <input type="text" id="ftname" name="fathername" placeholder="Your Father's name..">
      </div>
      </div>
        <div class="row">
      <div class="col-3">
        <label for="contact">Mobile No.</label>
      </div>
      <div class="col-6">
        <input type="text" id="mob" name="mobile" placeholder="Your Mobile No.">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="course">Course</label>
      </div>
      <div class="col-6">
        <select id="course" name="selcourse">
          <option>--- Select Course ---</option>
          <option value="62">IT Expert LEVEL 1</option>
          <option value="63">IT Expert LEVEL 2</option>
          <option value="81">IT Expert LEVEL 3</option>
          <option value="64">FCIT</option>
          <option value="68">MDSE</option>
          <option value="53">E-Accounting Level 1</option>
    <option value="54">E-Accounting Level 2</option>
          <option value="69">Hardware Card Level</option>
      <option value="75">Hardware Chip Level</option>
        </select>
      </div>
    </div>
    <div class="row">
        <div class="col-3">
      <input id="sub" type="submit" name="save" value="Submit" style="weight:50px!important;">
      </div>
    </div>  
  </form>
</div>
</div>



<!-- footer -->
<!-- //footer -->
<?php include 'footer.php'; ?>
<!-- copyright -->
    
</body>
</html>
<script>
function validateForm()
{
var fname = document.forms["RegForm"]["firstname"];
var lname = document.forms["RegForm"]["lastname"];
var ftname = document.forms["RegForm"]["fathername"];
var phoneNo = document.forms["RegForm"]["mobile"];
var slcourse = document.forms["RegForm"]["selcourse"];
var branch = document.forms["RegForm"]["selbranch"];
var stmatch=/^[A-Za-z\s]+$/;
var stmatch1=/^(?!\.)(?!.*\.$)(?!.*?\.\.)[A-Za-z\s.]+$/;
var stmatch2=/^(?!\.)(?!.*\.$)(?!.*?\.\.)[A-Za-z\s,]+$/;
var phone = /^\d{10}$/;
var reg = /(?!.*\.$)[a-zA-Z\s!@#$%\^&*)(+=._-]*$/;
var loc=/^[a-zA-Z0-9\s!@#$%\^&*)(+=,._-]*$/;;

if (branch.selectedIndex < 1) {
alert("Please enter your course.");
branch.focus();
return false;
}
if (fname.value == ""|| !fname.value.match(stmatch)) {
window.alert("Please enter your name.");
fname.focus();
return false;
}

if (ftname.value == ""||!ftname.value.match(stmatch1)) {
window.alert(
"Please enter your father name.");
ftname.focus();
return false;
}


if(phoneNo.value==""||phoneNo.value==null||!(phoneNo.value.match(phone)))
{
alert("Please enter valid 10 digit Mobile No.");
phoneNo.focus();
return false;
}

if (slcourse.selectedIndex < 1) {
alert("Please enter your course.");
slcourse.focus();
return false;
}
return true;
}
</script>
