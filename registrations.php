<?php
include "model.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- <script src="js/script.js"></script> -->
  
</head>
  <body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="" disabled>Employee</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="admin">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container rows">
    <div class="heading pr-5 pb-5"><h1>Registration</h1></div>
        <form method="post" action="model.php" onsubmit="return validate()">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"  required>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" required id="inlineRadio1" value="other">
                            <label class="form-check-label" for="inlineRadio1">Other</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" required id="inlineRadio2" value="male">
                            <label class="form-check-label" for="inlineRadio2">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" required id="inlineRadio3" value="female">
                            <label class="form-check-label" for="inlineRadio3">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" oninput="Dobfunction()" type="date" required name="dob" min="1965-01-01" max="2010-01-01"  id="date">
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
                </div>
            </div>
           
            
            
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Hobbies</legend>
                    <div class="col-sm-10">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="cricket" name="hobbies[]" id="cricket" >
                            <label class="custom-control-label" for="cricket">Cricket</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="football" name="hobbies[]" id="football">
                            <label class="custom-control-label" for="football">Football</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="fighter" name="hobbies[]" id="fighter">
                            <label class="custom-control-label" for="fighter">Fighter</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="movies" name="hobbies[]" id="movies">
                            <label class="custom-control-label" for="movies">Movies</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="other" name="hobbies[]" id="others">
                            <label class="custom-control-label" for="others">Other's</label>
                        </div>
                    </div>
                    <p id="msg" style="color:red; font-size:20px;"></p>
                </div>
            </fieldset>        
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name="register" class="btn btn-primary " onclick="myFunction()">Sign in</button>
                
                <input type="button" value="alert" id="al">
                </div>
            </div>
        </form>
    </div>
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
        function validate()
        {
            var cricket=document.getElementById("cricket").checked;
            var football=document.getElementById("football").checked;
            var fighter=document.getElementById("fighter").checked;
            var movies=document.getElementById("movies").checked;
            var others=document.getElementById("others").checked;

            if ((cricket=="") && (football=="") && (fighter=="") && (movies=="")  && (others==""))
            {
                document.getElementById("msg").innerHTML = "fill up checkup first";
                return false;
            }
            return true;
        }
    </script>
    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status'];?>",
            text: "<?php echo $_SESSION['status_code'];?>",
            icon: "success",
        });
    </script>
   <?php
        unset($_SESSION['status']);
        }
   ?>
  </body>
</html>