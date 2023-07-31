<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Assignments:: GDF</title>
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
                <h4 class=" text-primary text-center">Assignments</h4>
                <table class="table">
                    <tr>
                        <td class="text-success">Word Assignments</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Day 1 (heading 1)</td>
                        <td><a href="assignments/word/word-1.docx" class="download-link"
                                id="download-link-1">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 2 (heading 2)</td>
                        <td><a href="assignments/word/word-2.docx" class="download-link"
                                id="download-link-2">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 3 (basic text)</td>
                        <td><a href="assignments/word/word-3.docx" class="download-link"
                                id="download-link-3">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 4 (modified text)</td>
                        <td><a href="assignments/word/word-4.docx" class="download-link"
                                id="download-link-4">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 5 (text & outline)</td>
                        <td><a href="assignments/word/word-5.docx" class="download-link"
                                id="download-link-5">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 6 (letter)</td>
                        <td><a href="assignments/word/word-6.docx" class="download-link"
                                id="download-link-6">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 7 (bullets)</td>
                        <td><a href="assignments/word/word-7.docx" class="download-link"
                                id="download-link-7">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 8 (formatting text)</td>
                        <td><a href="assignments/word/word-8.docx" class="download-link"
                                id="download-link-8">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 9 (table 1)</td>
                        <td><a href="assignments/word/word-9.docx" class="download-link"
                                id="download-link-9">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 10 (table 2)</td>
                        <td><a href="assignments/word/word-10.docx" class="download-link"
                                id="download-link-10">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 11 (formatting)</td>
                        <td><a href="assignments/word/word-11.docx" class="download-link"
                                id="download-link-11">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 12 (formatting)</td>
                        <td><a href="assignments/word/word-12.docx" class="download-link"
                                id="download-link-12">Download</a></td>
                    </tr>
                    <tr>
                        <td>File Organization Project</td>
                        <td><a href="assignments/word/project-1.docx" class="download-link"
                                id="download-link-13">Download</a></td>
                    </tr>
                </table>

                <table class="table">
                    <tr>
                        <td class="text-success">Excel Assignments</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Day 1 </td>
                        <td><a href="assignments/excel/excel-1.xlsx" class="download-link"
                                id="download-link-14">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 2 </td>
                        <td><a href="assignments/excel/excel-2.xlsx" class="download-link"
                                id="download-link-15">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 3 </td>
                        <td><a href="assignments/excel/excel-3.xlsx" class="download-link"
                                id="download-link-16">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 4 </td>
                        <td><a href="assignments/excel/excel-4.xlsx" class="download-link"
                                id="download-link-17">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 5 </td>
                        <td><a href="assignments/excel/excel-5.xlsx" class="download-link"
                                id="download-link-18">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 6 (logical function 1)</td>
                        <td><a href="assignments/excel/logical-function-1.xlsx" class="download-link"
                                id="download-link-19">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 7 (logical function 2)</td>
                        <td><a href="assignments/excel/logical-function-2.xlsx" class="download-link"
                                id="download-link-20">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 8 (Conditional formatting 1)</td>
                        <td><a href="assignments/excel/conditional-formatting-1.xlsx" class="download-link"
                                id="download-link-21">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 9 (Conditional formatting 2)</td>
                        <td><a href="assignments/excel/conditional-formatting-2.xlsx" class="download-link"
                                id="download-link-22">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 10 (pivot table & charts 1)</td>
                        <td><a href="assignments/excel/pivot-table-chart-1.xlsx" class="download-link"
                                id="download-link-23">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 11 (pivot table & charts 2)</td>
                        <td><a href="assignments/excel/pivot-table-chart-2.xlsx" class="download-link"
                                id="download-link-24">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 12 (vlookup 1)</td>
                        <td><a href="assignments/excel/vlookup-1.xlsx" class="download-link"
                                id="download-link-25">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 13 (vlookup 2)</td>
                        <td><a href="assignments/excel/vlookup-2.xlsx" class="download-link"
                                id="download-link-26">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 14 (data practice)</td>
                        <td><a href="assignments/excel/data-practice.xlsx" class="download-link"
                                id="download-link-27">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 15 (dashboard)</td>
                        <td><a href="assignments/excel/dashboard-data.xlsx" class="download-link"
                                id="download-link-28">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 16 </td>
                        <td><a href="assignments/excel/excel-16.xlsx" class="download-link"
                                id="download-link-29">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 17 </td>
                        <td><a href="assignments/excel/excel-17.xlsx" class="download-link"
                                id="download-link-30">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 18 </td>
                        <td><a href="assignments/excel/excel-18.xlsx" class="download-link"
                                id="download-link-31">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 19</td>
                        <td><a href="assignments/excel/excel-19.xlsx" class="download-link"
                                id="download-link-32">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 20 </td>
                        <td><a href="assignments/excel/excel-20.xlsx" class="download-link"
                                id="download-link-33">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 21 </td>
                        <td><a href="assignments/excel/excel-21.xlsx" class="download-link"
                                id="download-link-34">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 22 </td>
                        <td><a href="assignments/excel/excel-22.xlsx" class="download-link"
                                id="download-link-35">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 23 </td>
                        <td><a href="assignments/excel/excel-23.xlsx" class="download-link"
                                id="download-link-36">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 24 </td>
                        <td><a href="assignments/excel/excel-24.xlsx" class="download-link"
                                id="download-link-37">Download</a></td>
                    </tr>
                    <tr>
                        <td>Day 25 </td>
                        <td><a href="assignments/excel/excel-25.xlsx" class="download-link"
                                id="download-link-38">Download</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {

        $(".download-link").click(function() {

            var atb = $(this).attr("href");
            var id = $(this).attr("id");

            var res = atb.split("/");
            var idres = id.split("-");
            var atb2 = res[1];
            var atb3 = idres[2];

            $.ajax({

                url: "getAssignmentStatusDB.php?ass=" + atb2,
                type: "POST",
                success: function(data) {
                    if (data == 1) {
                        //document.location.href=atb;
                        //$("#download-link-"+atb3).click();
                    } else {
                        alert(data);
                    }
                }
            });

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