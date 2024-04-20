<?php
// error_reporting(0);

// session_start();
// if (($_SESSION["new_session_02"] || $_SESSION["new_session_03"]) == false) {
//     header("location: ../log.php");
// }
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "pro";

// $nm = $_SESSION['nm'];
// $year = $_POST['year'];
// $month = $_POST['month'];

// $conn = mysqli_connect($servername, $username, $password, $database,);

// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND ( SELECT * from salary WHERE year='$year' AND month='$month');");
// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND year = '$year' AND month = '$month';");


// if ($total = mysqli_num_rows($data) > 0) {
//     $j = 0;

//     while ($result = mysqli_fetch_array($data)) {
//         $net_salary =  $result['net_salary'];
//         $mode = $result['mode'];
//         $allowance = $result['allowance'];
//         $allo_amount = $result['allo_amount'];
//         $deduction = $result['deduction'];
//         $ded_amount = $result['ded_amount'];
//         $basic = $result['basic'];
//         $total_allo = $result['total_allo'];
//         $total_ded = $result['total_ded'];
//         $dt = $result['dt'];
//         $j++;
//     }
// }
//  else {
//     echo"No Result Found";
// }

// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND ( SELECT * from salary WHERE year='$year' AND month='$month');");
// $data2 = mysqli_query($conn, "SELECT * FROM staff WHERE name = '$nm';");


// if ($total2 = mysqli_num_rows($data2) > 0) {
//     $k = 0;

//     while ($result2 = mysqli_fetch_array($data2)) {
//         $man =  $result2['man'];
//         $deptm = $result2['deptm'];
//         $empid = $result2['empid'];
//         $img = $result2['img'];

//         $k++;
//     }
// }
//  else {
//     echo"No Result Found";
// }


$name =  $_POST['name'];
$roll =  $_POST['roll'];
$date =  $_POST['date'];
$subject =  $_POST['subject'];
// $subject += 1;
// $max = strval($may);
// $max = (string) $may;
// $imag = "../sub/" . $max . ".png";

require("fpdf.php");
$pdf = new FPDF();
$pdf2 = new FPDF();
if (isset($_POST['create'])) {

    // $net_salary = $_POST['net_salary'];
    // $mode = $_POST['mode'];

    // $fpdf->AddPage();
    // $fpdf->Image('background-image.png', 0, 0, $fpdf->w, $fpdf->h);
    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 22.5);

    // $pdf->Image('../Front GX.png', 0, 0, $pdf->w, $pdf->h);
    // $emr="../".$img;
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 2, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');

    $pdf->Image("../sub/$subject.png", 0, 0, 210, 297);
    // $pdf->Image("../l1.png", 0, 0, 210, 297);
    // $pdf->Image('../'.$img, 160, 9, 20, 20);
    // $pdf->Cell(180,10,"Payment Slip for ".$month." ".$year, 0, 1, 'L');

    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(110, 10, "$subject", 0,1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       NAME  :", 0, 0, 'L');
    $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(110, 10, $name, 0, 1, 'L');
    $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       ROLL  :", 0, 0, 'L');
    $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(110, 10, $roll, 0, 1, 'L');
    $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       COURSE  :", 0, 0, 'L');
    $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(110, 10, 'BACHELOR OF TECHNOLOGY', 0, 1, 'L');
    $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       BRANCH  :", 0, 0, 'L');
    $pdf->Cell(70, 5, "       ", 0, 0, 'L');
    $pdf->Cell(110, 8, 'COMPUTER SCIENCE AND ', 0, 1, 'L');
    $pdf->Cell(70, 5, "       ", 0, 0, 'L');
    $pdf->Cell(110, 8, 'ENGINEERING', 0, 1, 'L');
    $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       SUBJECT  :", 0, 0, 'L');
    // $pdf->Cell(70, 5, "       ", 0, 0, 'L');
    // $pdf->Cell(110, 10, $subject, 0, 1, 'L');
    // $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       SEMESTER  :", 0, 0, 'L');
    $pdf->Cell(70, 5, "       ", 0, 0, 'L');
    $pdf->Cell(110,12, '6TH SEMESTER', 0, 1, 'L');
    $pdf->Cell(180, 5, '', 0, 1, 'L');

    // $pdf->Cell(70, 10, "       DATE  :", 0, 0, 'L');
    // $pdf->Cell(70, 9.99, "       ", 0, 0, 'L');
    $pdf->Cell(70, 5, "       ", 0, 0, 'L');
    // $pdf->Cell(110, 0, "", 0, 1, 'L');
    // $pdf->Cell(110, 20, $date, 0, 1, 'L');
    $pdf->Cell(110, 9, date('d-m-Y', strtotime($date)), 0, 1, 'L');

    // $pdf->Cell(140, 10, "", 0, 0, 'L');
    // $pdf->Cell(20, 10, "Regards, Admin", 0, 1, 'L');
    // $pdf->Cell(140, 10, "", 0, 0, 'L');
    // $pdf->Cell(20, 10, "Arkajyoti Roy", 0, 1, 'L');
    // $pdf->Image('sign.png', 140, 230, 60, 20);

    $pdf->Output();
}
// generate.php (UTF-8)
