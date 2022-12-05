<!DOCTYPE html>
<html lang="en">

<head>
    <title>Banglore Tourist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse {
            background-color: #fff;
            border-color: #ffffff;

        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #060606;
            background-color: #ffffff;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #090909;
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #0c4ad4;
            background-color: transparent;
        }
        
        .navbar {
    position: relative;
    min-height: 20px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

.navbar-nav>li>a {
    padding-top: 0px;
    padding-bottom: 0px;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 0px;
}

th,tr, table {
  text-align: center; 
}
    </style>

</head>

<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
                <!-- <a class="navbar-brand" href="#">GSY Services</a> -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="bangalore tourist.html">
                        <h2>Bangalore Tourist</h2>
                    </a></li>

            </ul>
                </div>
                </div>
                </div>
 </nav>
    <nav class="navbar navbar-inverse">
        <div class="container">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="bangalore tourist.html" style="margin-top: 0px;font-size: 20px;color: #0c4ad4;">Home</a></li>
                
                <li class="dropdown">
                    <ul class="dropdown-menu">
                      <li><a href="member.php">Member Ship</a></li>
                      <li><a href="query.html">Queries</a></li>
                      
                    </ul>
                  </li>
                   
                <li><a href="ucontact.html" style="margin-top: 0px;font-size: 20px">Contact</a></li>
                <li><a href="logout.php" style="margin-top: 0px;font-size: 20px">Logout</a></li>
                
            </ul>
        </div>
    </nav>


    <div class="container">

       
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
              
                <hr />
                
                
                
               
            </div>
            <div class="col-md-8">
                
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                            $sql = "SELECT * FROM `events` ";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                                   <a style="text-align:center" href="eventdetails.php?id='. $row['eid'] .'">
                                   <img src="' . $row["img"] . '" class="img-thumbnail"  style="width:100%;height:150px"/></a>
                                    
                                    <h4 style="text-align:center">
                                    
                                     <a style="text-align:left" href="eventdetails.php?id='. $row['eid'] .'">' . $row["name"] . '</a>
                               
                                    </h4>
                                    
                                   
                                </div>
                              
                                
                            
                                ';
                                }
                            } else {
                                echo "No Events Found";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
        </div>
                    </div>
              
                
            </div>
            
        
       
    </div>




    




</body>

</html>