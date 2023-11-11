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
#notePad,  #done,#allnotes{
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
    
   tr{
    background-color: black;
    color: wheat;
   }
   .table:not(.table-sticky) {
    box-shadow: 10px 10px 5px black;
}
.table {
    border-collapse: collapse;
}


.table > tbody > tr > td, .table> thead > tr> th {
    padding: 6px;
    border: 1px solid black;
    text-align: left;
}
.table>thead:first-child>tr:first-child>th {
    border-top: 0;
    background: black;
}

</style>

   

    <title>Profile</title>
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
              <li><a href="#" data-toggle="modal">Logged as in <b>Username</b></a></li>
                <li><a href="#" data-toggle="modal">Log out</a></li>
                

              </ul>
                

             </div>
        </div>

    </nav>
      <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                 
                <h2 style="text-align: center; color:wheat">General Account Setting</h2>
                <div class="table-responsive" id="table">
                    <table class="table table-hover table-bordered">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                            <td>Value</td>
                        </tr>
                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td>Hidden</td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>

      </div>
    <!--  update username  -->
    <form method="post" id="updateusernameForm">
        <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3 id="myModalLAbel">Edit Username </h3>
                     </div>
                     <div class="modal-body">
                        <div id="loginmessage">

                        </div>
                     <div class="form-group">
                          <input type="text" name="username" id="username" class="form-control" value="usernamevalue">

                      </div>
                  
                      
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                         <button type="button" class="btn green">Update</button>

                    </div>

                </div>

            </div>  
            
        </div>
        </form>


    

    <!--   Update  emial -->
    <form method="post" id="updateemialForm">
        <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3 id="myModalLAbel">Edit Email Address </h3>
                     </div>
                     <div class="modal-body">
                        <div id="loginmessage">

                        </div>
                     <div class="form-group">
                          <input type="email" name="email" id="useremial" class="form-control" value="Email Value">

                      </div>
                  
                      
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                         <button type="button" class="btn green">Update</button>

                    </div>

                </div>

            </div>  
            
        </div>
        </form>
       

    <!-- Update Password-->

    <form method="post" id="updatepassworddForm">
        <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3 id="myModalLAbel">Enter current  & New Passowrd </h3>
                     </div>
                     <div class="modal-body">
                        <div id="loginmessage">

                        </div>
                     <div class="form-group">
                          <input type="password" name="currentpassowrd" id="currentpassowrd" class="form-control" placeholder="Your Current Password">

                      </div>
                     <div class="form-group">
                          <input type="password" name="password" id="passowrd" class="form-control" placeholder="Choose a Password">

                      </div>
                     <div class="form-group">
                          <input type="password" name="passowrd2" id="passowrd2" class="form-control" placeholder="Re-Enter the Password">

                      </div>
                  
                      
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                         <button type="button" class="btn green">Update</button>

                    </div>

                </div>

            </div>  
            
        </div>
        </form>
    

    <!-- footer -->

    <div class="footer" style="background-color: black;color:white">
 
        <div class="container" >
         <p>noteApp.com Copyright &copy 2020-<?php  $today=date("Y"); echo $today ?></p>
       </div>
    </div>
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

     <script src="js/bootstrap.min.js"></script>
</body>
</html>