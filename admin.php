<?php
    include "model.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/> -->
    <link rel="stylesheet" href="js/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="registration">Register <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="phpadmin">phptable <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
        </div>
    </nav>
    
    <div class="container">
        <div class="row pb-5 pt-3">
            <h3 align="center">Data table</h3>
        </div>
        <div class="d-flex justify-content-between">
            <div class="paginationpage">
                
                <div class="form-group">
                <select name="state" id="maxRows" class="form-control" style="width:130px;">
                        <option value="5000">Select rows</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" id="search" type="text" placeholder="Search data">
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <form action="model.php" method="post">
                <table  id="employee_table" class="table table-bordered table-hover table-sortable">
                    <thead>
                        <tr>
                            <th class="pr-2">
                            <label for="showhide">
                                <input type="checkbox" id="showhide" />&nbsp;Multiple delete
                            </label>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Hobbies</th>
                            <th>Age</th>
                            <th>Date-of-birth</th>
                            <th class="btns ">Other</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $myrow=$obj->fetch("employees");
                            foreach($myrow as $row):
                        ?>
                        
                            <tr>
                                <td style="padding:0px;padding-right:-50px;">
                                    <div class="show" style="display:none;">
                                        <label for="<?php echo $row["e_id"]; ?>" style=" padding-left:2rem; padding-right:7rem;padding-top:0.5rem;padding-bottom:1rem;margin: 0px;">
                                            <input type="checkbox" id="<?php echo $row["e_id"]; ?>"  value="<?php echo $row["e_id"];?>" name="ids[]" />&nbsp;id- <?php echo $row["e_id"];?>
                                        </label>
                                    </div>
                                </td>
                                                        <td><?php echo $row["name"]?></td>
                                                        <td><?php echo $row["email"]?></td>
                                                        <td><?php echo $row["gender"]?></td>
                                                        <td><?php echo $row["hobbies"]?></td>
                                                        <td><?php echo $row["age"]?></td>
                                                        <td><?php echo $row["dob"]?></td>
                                                        <td class="btns">
                                                            <a href="model.php?select=<?php echo md5(1)?>&id=<?php echo $row["e_id"];?>" >
                                                                <!-- <button type="button" name="" id="" href="#" class="btn btn-primary p-2 mr-2" btn-lg btn-block">Update</button> -->
                                                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pen-fill mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                                </svg>
                                                            </a>
                                                            <a href="model.php?delete=1&id=<?php echo $row["e_id"];?>">
                                                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="red" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    endforeach;
                                                ?>
                                            
                                            </tbody>
                                        </table>
                                        <div class="show m-3 col-6"  style="text-align:center;display:none;">
                                            <button type="submit" name="multiple" class="btn btn-danger btn-lg btn-block" >Multiple Delete</button>
                                        </div>
            </form>                
            <div class="Page navigation example">
                <nav>
                    <ul class="pagination justify-content-center">
                    
                    </ul>
                </nav>
            </div>
            
        </div>
        
    </div>
   
   
 
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/check.js"></script>
    <script src="js/new.js"></script>
    <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
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