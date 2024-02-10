<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        body
        {
            background-color: yellowgreen;
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        fieldset
        {
            padding: 30px;
            border: 2px solid white;
            border-radius: 24px;
        }
    </style>
</head>
<body>
    <?php
     $n = $_POST['name'];
     $d = $_POST['dep'];
     $g = $_POST['gender'];
     $m = $_POST['email'];
     $p = $_POST['pwd'];
     $a = $_POST['age'];
     $con = mysqli_connect("localhost","root","","details");
     $sql = "INSERT INTO student_details(student_name,student_email,student_dep,student_gender,student_password,student_age) value('$n','$m','$d','$g','$p','$a')";
     $r = mysqli_query($con,$sql);
     if($r)
     {
        echo "succesfully added";
     }
     else
     {
        echo "some problem not added ";
     }
    ?>
    
    

</body>
</html>
