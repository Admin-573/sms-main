<!DOCTYPE html>
<html>
    <head> <title>Admin Panel </title></head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body {font-family: "Comic Sans MS"}
        
        #grad_back {
            background: linear-gradient(to right ,  #EEA47F , white , #00539C);
        }
        .navbar {  
            width: 67.7%;
            margin: auto;
            background-color: #E9967A;
            overflow: auto;
        }

        .navbar a {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        }

        .navbar a:hover {
        background-color: #FF5733;
        }

        .active {
        background-color: #FF5733;
        }

        @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }
        }
    </style>

    <body id="grad_back">

        <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px">

            <a style="background-color:#E9967A">
                <h7 style="margin-left: 20px;">Student Management System</h7>
            </a>

            <a style="margin-left: 57.5px" class="active" href="admin_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Admin Panel 
            </a> 

            <a href="notice_panel.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notice
            </a>

            <a href="faculty_panel.php">
                <i class="fa fa-fw fa-graduation-cap"></i> 
                Faculty
            </a> 

            <a href="student_panel.php">
                <i class="fa fa-fw fa-user"></i> 
                Student  
            </a>

            <a href="admin_login.php">
                <i class="fa fa-fw fa-power-off"></i> 
                Logout  
            </a>

        </div>
    
    </body>
</html> 
