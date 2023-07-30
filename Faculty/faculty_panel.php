<!DOCTYPE html>
<html>
    <head> <title>Faculty Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body {font-family: "Comic Sans MS"}

        #grad_back {
            background: linear-gradient(to right , red ,indigo , salmon);
        }

        .navbar {  
            width: 60%;
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

        <div class="navbar" style="border-radius:25px">

            <a style="background-color:#E9967A">
                <h7 style="margin-left: 20px;">Student Management System</h7>
            </a>

            <a class="active" style="margin-left: 6px" href="faculty_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Faculty Panel 
            </a> 

            <a href="faculty_results.php">
                <i class="fa fa-fw fa-file-text"></i> 
                Results
            </a> 

            <a href="faculty_assignment.php">
                <i class="fa fa-fw fa-book"></i> 
                Assignments
            </a> 

            <a href="faculty_notice.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notices  
            </a>

        </div>

    </body>
</html>