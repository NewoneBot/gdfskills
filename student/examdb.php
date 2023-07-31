<?php
  include 'connection.php';
  $limit_per_page = 1;
  $page = "";
  $output="";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }
  else{
    $page = 1;
  }
  
  $table = $_POST["table"];
  $offset = ($page - 1) * $limit_per_page;
  $sql_total = "SELECT * FROM $table";
  $records = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
  $total_record = mysqli_num_rows($records);
  $total_pages = ceil($total_record/$limit_per_page);

  $output .='<div id="pagination text-center d-flex justify-content-center">';
  for($i=1;$i<= $total_pages;$i++){
    $class_name = "";
    if($i == $page){
      $class_name = "active";
    }
    $output .= "<button class='{$class_name} m-1 next btn bg-primary' style='color:white;' id='{$i}' href=''>{$i}</button>";
  }

 
  $output .='</div>';

  echo $output;


  
  $sql = "SELECT * FROM $table LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
  $output= "";
  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        $output .= "
    <div class='card m-3'>
      <div class='card-header'>
        {$row["id"]} Q .  {$row["question"]}
        <input type='hidden' value='{$row["id"]}' id='questionNo'>
        <input type='' value='{$row["answer"]}' id='answer'>
        </div>
        <div class='card-body'>
        <div class='container'>
        <div class='row'>
        <div class='input-group p-3'>                 
                  <button type='button' class='btn w-100 filler option' style='text-align: inherit;' id='a' value='a' onclick='getQA(this.name,this.value)' name='{$row["id"]}'>
                           <span class='me-3'> A </span>
                      {$row["options_A"]}
                            </button>
                    </div>
                    <div class='input-group p-3'>                 
                  <button type='button' class='btn w-100 filler option' style='text-align: inherit;' id='b' value='b' onclick='getQA(this.name,this.value)' name='{$row["id"]}'>
                           <span class='me-3'> B </span>
                      {$row["options_B"]}
                            </button>
                    </div>
                    <div class='input-group p-3'>                 
                  <button type='button' class='btn w-100 filler option' style='text-align: inherit;' id='c' value='c' onclick='getQA(this.name,this.value)' name='{$row["id"]}'>
                           <span class='me-3'> C </span>
                      {$row["options_C"]}
                            </button>
                    </div>
                    <div class='input-group p-3'>                 
                  <button type='button' class='btn w-100 filler option' style='text-align: inherit;' id='d' value='d' onclick='getQA(this.name,this.value)' name='{$row["id"]}'>
                           <span class='me-3'> D </span>
                      {$row["options_D"]}
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";?>
<?php
      }
      if($page<=$total_pages){
        $output.="<div class='d-flex justify-content-between'><button class='btn  me-3 next bg-primary page-item' onClick='upl()' id='{$page}'><span class='' style='color:white;'>SUBMIT</span></button>";
      }
      if($page>1){
        $pagination= $page-1; 
        $output.="<div><button class='btn me-3  next bg-primary page-item' id='{$pagination}'><span class='' style='color:white;'>previous</span></button>"; 
      }
      if($page<$total_pages){
        $page++; 
        $output.="<button class='btn next bg-primary page-item' id='{$page}'><span class='' style='color:white;'>next</span></button></div></div>";
      }
     echo $output;
  }else{
    echo "<h2>Paper Not Upload yet</h2>";
  }
?>