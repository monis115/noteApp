<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/8e2bd9acb0.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
<style>
    #container{
        margin: 150px;
    }
#notePad,  #done,#allnotes, .delete{
        display: none;
    }
    .buttons
    {
        margin-bottom: 20px;
    }
    textarea{
        width: 100%;
        max-width: 100%;
        font-size: 16px;
        line-height: 1.7em;
        border-left: 20px solid #00ff00;
        outline: none;
        padding: 10px;
         background-color: black;
         color:wheat;
         border-bottom: 2px solid #00ff00;
         border-right: 2px solid #00ff00;
         border-top: 2px solid #00ff00;
    }
    .notehead
    {
        border: 1px solid wheat;
        border-radius: 5px;
        margin-bottom: 10px;
        cursor: pointer;
        padding: 2px 10px 2px  10px;
         background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #434343 74%);;
    }
    .notetext
    {
        font-size: 20px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .notetime
    {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;

    }
</style>

   

    <title>My Notes</title>
</head>
<body>
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
             <div class="navbar-header">
                <a class="navbar-brand" href="#navbarCollapse"><strong>Online Notes</strong></a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             </div>
             <div class="navbar-collapse collapse" id="navbarCollapse">
              <ul class="nav navbar-nav">
                <li ><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li class="active"><a href="#">My Notes</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="modal">Logged as in <b><?php echo $_SESSION["username"] ?></b></a></li>
              <li><a href="index.php?logout=1">Log out</a></li>
                

              </ul>
                

             </div>
        </div>

    </nav>
      <div class="container" id="container">
        <!-- Alert Message -->
        <div id="alert" class="alert alert-danger collapse">
            <a href="" class="close" data-dismiss="alert">
                &times

            </a>
            <p id="alertContent"></p>
         
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                 <div class="buttons">
                   <button class=" btn btn-md btn-info"  id="addnote">Add Note</button>
                   <button class=" btn btn-md btn-warning pull-right" id="edit">Edit</button>
                   <button class=" btn btn-md  btn-success pull-right" id="done" >Done</button>
                   <button class=" btn btn-md btn-default" id="allnotes" >All Note</button>
                 </div>
                 <div id="notePad">
                    <textarea name="textarea" id="textarea" rows="10"></textarea>
                 </div>
                 <div class="notes" id="notes" style="color:wheat">
                    <!-- Ajax Call to a php file  -->

                 </div>

            </div>
        </div>

      </div>


  


    <!-- footer -->

    <div class="footer" style="background-color: black;color:white">
 
        <div class="container" >
         <p>noteApp.com Copyright &copy 2020-<?php  $today=date("Y"); echo $today ?></p>
       </div>
    </div>
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

     <script src="js/bootstrap.min.js"></script>
     <script src="mynotes.js"></script>
</body>
</html>