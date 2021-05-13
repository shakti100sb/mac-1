<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Application</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

   

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900"
      rel="stylesheet"
    />
  </head>


  <body>

  
    
    <?php

// session_start();
//     if(isset($_SESSION["logged_in"]) and $_SESSION["logged_in"]==true){

//       $title = $_GET["jobtitle"];

//      }
//     else {

//     echo file_get_contents('../templates/please_login_first.html');

//       die();
//     }

      
    ?>
    <div class=" container shadow p-5 mt-3">

    <form action="../../api/job/apply.php" method="POST" enctype="multipart/form-data">






    <label for="title">Fullname</label>
    <input type="text" class="form-control" name="name" value="" required />


   <br/>
    <label for="contactnumber">Contact Number</label>
    <input type="text" class="form-control" name="name" value="" required />


<br/>

    <label for="title">Email</label>
    <input type="Email" class="form-control" name="name" value="" required />

<br/>
    <label for="title">How was the past work experence of this person?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>

<br/>
    <label for="title">What was the character of the person?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>



    <br/>
     <label for="title">Why did this candidate leave your company?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>


      <br/>
     <label for="title">On a scale of 1 to 10, compared to other people you’ve hired, how would you rate this candidate ?<th></th></label>
    <input type="text" class="form-control" name="refferer_name" placeholder="" required> 
    </label>


  <!--   <label>Upload Document </label>
    <input type="file" class="form-control" name="file" required/>

    <br/> -->

    <label for="message">Message</label>
<!--     <textarea name="message" class="form-control" rows="5" required></textarea> -->

    <center>
      <input type="submit" class="btn btn-success mt-4" value="Conform">
    </center>
    </form>

    </div>
      
  </body>

  </html>