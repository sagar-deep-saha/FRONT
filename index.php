<!DOCTYPE html>
<html lang="en">
<code>Changes In The True Section and Crossover all the semester parts</code>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <form action="pdf/generate.php" method="POST" style="margin: 10%;">
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Roll</label>
            <input type="text" name="roll" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Date</label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Semester</label>
            <select class="form-select" aria-label="Default select example" name="semester" id="sem">
                <!-- <option value="1ST">1ST</option> -->
                <!-- <option value="2ND">2ND</option> -->
                <option value="" hidden>Select</option>
                <option value="3RD">3RD</option>
                <option value="4TH">4TH</option>
                <option value="5TH">5TH</option>
                <option value="6TH">6TH</option>
                <option value="7TH">7TH</option>
                <option value="8TH">8TH</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Subject</label>


            <select class="form-select" aria-label="Default select example" name="subject" id="alternate3">
                <option value="1">Effective Technical Communication </option>
                <option value="2">Mathematics-III</option>
                <option value="3">Biology for Engineers </option>
                <option value="4"> Engineering Mechanics</option>
                <option value="5"> Digital Logic & Microprocessor. </option>
                <option value="6"> Data Structure & Algorithm </option>
                <option value="7"> Java Programming Lab </option>
                <option value="8"> Data Structure Lab </option>
                <option value="9">Digital Electronics & Microprocessor Lab </option>
                <option value="10">Indian Constitution </option>

            </select>

            <select class="form-select" aria-label="Default select example" name="subject" id="alternate4">
                <option value="1">Engineering Economics and Accountancy</option>
                <option value="2">Universal Human Values-II</option>
                <option value="3">Discrete Mathematics </option>
                <option value="4">Computer Organization & Architecture </option>
                <option value="5"> Operating Systems </option>
                <option value="6">Object Oriented Programming </option>
                <option value="7">IT Workshop (Python/R) </option>
                <option value="8"> Operating System Lab </option>
                <option value="9">Object Oriented Programming Lab </option>
                <option value="10">Essence of Indian Knowledge Tradition </option>
            </select>

            <select class="form-select" aria-label="Default select example" name="subject" id="alternate5">
                <option value="1">Professional Practice, Law and Ethics </option>
                <option value="2">Design and Analysis of Algorithm</option>
                <option value="3">Database Management Systems </option>
                <option value="4">Formal Language & Automata Theory</option>
                <option value="5"> Artificial Intelligence </option>
                <option value="6">Computer Networks </option>
                <option value="7">Algorithm Lab </option>
                <option value="8">Database Management System Lab</option>
                <option value="9">Computer Hardware & Network Lab </option>
                <option value="10">Industry Internship - I </option>
            </select>

            <select class="form-select" aria-label="Default select example" name="subject" id="alternate6">
                <option value="1">Digital Image Processing</option>
                <option value="2">Compiler Design </option>
                <option value="3">Cryptography and Network Security </option>
                <option value="4">Software Engineering </option>
                <option value="5"> Advanced Java Lab </option>
                <option value="6">Web Technology Lab </option>
                <option value="7">Image Processing Lab </option>
                <option value="8">Advanced Computer Architecture</option>
                <option value="9">Data Mining</option>
                <option value="10">Web Technology</option>
            </select>
        </div>


        <script>
            $(document).ready(function() {
                $("#alternate3").hide();
                $("#alternate4").hide();
                $("#alternate5").hide();
                $("#alternate6").hide();
                $("#sem").change(function() {
                    var selectedValue = $(this).val();
                    if (selectedValue === "3RD") {
                        $("#alternate3").show();
                        $("#alternate4").hide();
                        $("#alternate5").hide();
                        $("#alternate6").hide();
                    } else if (selectedValue === "4TH") {
                        $("#alternate3").hide();
                        $("#alternate4").show();
                        $("#alternate5").hide();
                        $("#alternate6").hide();
                    } else if (selectedValue === "5TH") {
                        $("#alternate3").hide();
                        $("#alternate4").hide();
                        $("#alternate5").show();
                        $("#alternate6").hide();
                    } else if (selectedValue === "6TH") {
                        $("#alternate3").hide();
                        $("#alternate4").hide();
                        $("#alternate5").hide();
                        $("#alternate6").show();
                    } else {
                        $("#alternate3").hide();
                        $("#alternate4").hide();
                        $("#alternate5").hide();
                        $("#alternate6").hide();
                    }
                });
            });
        </script>


        <br>
        <button type="submit" name="create">Create</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>