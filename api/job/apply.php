<?php

    $send_to = $_POST["email"];
    $full_name = $_POST["name"];
    $job_title = $_POST["job_title"];
    $message = $_POST["message"];
    $refreemail=$_POST["refferer_name"];

    $send_to_ref=$_POST["refferer_name"];
    $full_name_ref="Prof doc Jhon doe";

    // if(isset($send_to) and isset($full_name) and isset($_FILES["file"]))
    // {


if(isset($send_to_ref) && isset($full_name_ref))
{
 include '../../send_mail_ref.php';
}else{
        echo  "couldnot perform query";
    }



     if(isset($send_to) and isset($full_name))
    {
       include '../../send_mail.php';
    

        $date = date("Y-m-d h:i:s");
        // $target_dir =__DIR__."/uploads".DIRECTORY_SEPARATOR ;
// $target_file_name = $date.basename($_FILES["file"]["name"]);

        $target_file_name="abjnjsn";

// $target_file = $target_dir.$target_file_name;

// move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        $con = include '../../config/database.php';
        $result = $con->query("INSERT INTO job_request(email,name,job_title,message,document_name,applied_at,referermail) values('$send_to','$full_name','$job_title','$message','$target_file_name','$date','$refreemail')");

        if($result)echo "Application Submitted";
        else {
            echo $con->error;            
            echo "Couldnot submit Application";

        }


    }

    else{
        echo $send_to."\n ".$full_name."<br/> $job_title <br/> $message couldnot perform query";
    }





?>