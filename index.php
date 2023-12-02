<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./home.css">
    <title>Home</title>
    <link rel="shortcut icon" href="img/Frame 4.png" type="image/x-icon">

    <style>
        .page-loader {
            width: 100%;
            height: 100vh;
            position: absolute;
            background: #badcd8;
            z-index: 1000;

        }

        .page-loader .txt {
            color: #666;
            text-align: center;
            top: 40%;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 0.3rem;
            font-weight: bold;
            line-height: 1.5;
        }

        /* Spinner animation */
        .spinner {
            position: relative;
            top: 35%;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            background-color: #222;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
            }
        }
    </style>
</head>

<body onload="hideLoader()"> <!-- add onload="hideLoader()" to body-->

    <!-- div loader  -->
    <div class="page-loader">
        <div class="spinner"></div>
        <div class="txt">Loading...</div>
    </div>
    <!-- End div loader -->

    <header>
        <div class="logo">
           <h4>Logo</h4>
        </div>
        <div class="search">
            <div class="input-icons">
                <i class="fa-solid fa-magnifying-glass icon"></i>
              <a href="search.php">  <input class="input-field" type="text" placeholder="Search for anything"></a>
            </div>
        </div>
        <div class="user-info">
            <div class="user-img">
                <a href="#"><img src="imgs/user.jpeg" alt="User Image"></a>
            </div>
            <div class="user-detals">
                <div class="name">
                    <h4><a href="#">Admin</a></h4>
                    <a href="#"><img src="imgs/settings.png" alt class="i"></a>
                </div>
                <div class="rank">
                    <p>COACH</p>
                </div>
            </div>
        </div>
        <a class="buttonHandle" href="javascript:void(0);" class="icon" onclick="geeksforgeeks()">
            <i onclick="myFunction(this)" class="fa-solid fa-bars">
            </i>
        </a>
    </header>

    <div class="togglemenu" id="togglemenu">

        <div class="user-info">
            <div class="logo">
                <img src="img/Frame 2.png" alt="Logo">
            </div>
            <div class="info">
                <div class="user-img">
                    <a href="#"><img src="img/user.jpeg" alt="User Image"></a>
                </div>
                <div class="user-detals">
                    <div class="name">
                        <h4><a href="#">Admin</a></h4>
                    </div>
                    <div class="rank">
                        <p>COACH</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="search">
            <div class="input-icons">
                <input class="input-field" type="text" placeholder="Search for anything">
            </div>
        </div>

        <ul class="slider-list">

            <!------------- Non Dropdown List Item ------------->
            <li style="padding-right: 30px;">
                <div class="title">
                    <a class="active" href="home.html">
                        <img src="img/home.png" alt>
                        <span class="name">Home</span>
                    </a>
                    <!-- <i class='bx bx-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="home.html" class="link submenu-title">Home</a>
                </div>
            </li>

            <!------------- Non Dropdown List Item ------------->
            <li style="padding-right: 30px;">
                <div class="title">
                    <a class="active" href="serieA.html">
                        <img src="img/Serie A.png" alt>
                        <span class="name">Serie A</span>
                    </a>
                    <!-- <i class='bx bx-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="serieA.html" class="link submenu-title">Serie A</a>
                </div>
            </li>

            <!------------- Dropdown List Item ------------->
            <li class="dropdown">
                <div class="title">
                    <a class="active" href="#">
                        <img src="img/Analysis.png" alt>
                        <span class="name">Analysis</span>
                    </a>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Analysis</a>
                    <a href="#" class="link">page1</a>
                    <a href="#" class="link">page2</a>
                    <a href="#" class="link">page3</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page1</a>
                    <a href="#" class="link">page2</a>
                    <a href="#" class="link">page3</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>

                </div>
            </li>

            <!------------- Dropdown List Item ------------->
            <li class="dropdown">
                <div class="title">
                    <a class="active" href="#">
                        <img src="img/Ranking.png" alt>
                        <span class="name">Ranking</span>
                    </a>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Ranking</a>
                    <a href="#" class="link">page1</a>
                    <a href="#" class="link">page2</a>
                    <a href="#" class="link">page3</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page1</a>
                    <a href="#" class="link">page2</a>
                    <a href="#" class="link">page3</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page1</a>
                    <a href="#" class="link">page2</a>
                    <a href="#" class="link">page3</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                    <a href="#" class="link">page4</a>
                </div>
            </li>

            <!------------- Non Dropdown List Item ------------->
            <li>
                <div class="title">
                    <a class="active" href="#">
                        <img src="img/Calendar.png" alt>
                        <span class="name">Calendar</span>
                    </a>
                    <!-- <i class='bx bx-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Calendar</a>
                </div>
            </li>

            <!------------- Non Dropdown List Item ------------->
            <li>
                <div>
                    <a class="active logout-btn" href="login.html">
                        <span class="name">Log out</span>
                        <img src="img/log-out.png" alt>

                    </a>
                    <!-- <i class='bx bx-chevron-down'></i> -->
                </div>
            </li>

        </ul>

    </div>

    <!-- ============= Home Section ============= -->
    <section class="body-content">

        <!-- ============= Sidebar Section ============= -->
        <div class="sidebar">
            <!-- ========== List ========== -->
            <ul class="slider-list">

                <!------------- Non Dropdown List Item ------------->
                <li style="padding-right: 30px;">
                    <div class="title">
                        <a class="active" href="home.html">
                            <img src="img/home.png" alt>
                            <span class="name">Home</span>
                        </a>
                        <!-- <i class='bx bx-chevron-down'></i> -->
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Home</a>
                    </div>
                </li>

                <!------------- Non Dropdown List Item ------------->
                <li style="padding-right: 30px;">
                    <div class="title">
                        <a class="active" href="serieA.html">
                            <img src="img/Serie A.png" alt>
                            <span class="name">Serie A</span>
                        </a>
                        <!-- <i class='bx bx-chevron-down'></i> -->
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Serie A</a>
                    </div>
                </li>

                <!------------- Dropdown List Item ------------->
                <li class="dropdown">
                    <div class="title">
                        <a class="active" href="#">
                            <img src="img/Analysis.png" alt>
                            <span class="name">Analysis</span>
                        </a>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Analysis</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                  
                       
                    </div>
                </li>

                <!------------- Dropdown List Item ------------->
                <li class="dropdown">
                    <div class="title">
                        <a class="active" href="#">
                            <img src="img/Ranking.png" alt>
                            <span class="name">Ranking</span>
                        </a>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Ranking</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page1</a>
                        <a href="#" class="link">page2</a>
                        <a href="#" class="link">page3</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        <a href="#" class="link">page4</a>
                        
                    </div>
                </li>

                <!------------- Non Dropdown List Item ------------->
                <li>
                    <div class="title">
                        <a class="active" href="#">
                            <img src="img/Calendar.png" alt>
                            <span class="name">Calendar</span>
                        </a>
                        <!-- <i class='bx bx-chevron-down'></i> -->
                    </div>
                    <div class="submenu">
                        <a href="#" class="link submenu-title">Calendar</a>
                    </div>
                </li>
                <a href="logout.php" class="btn btn-warning">Logout</a>

                <!------------- Non Dropdown List Item ------------->

            </ul>
        </div>
          
        <div class="home-content" id="home-content">
        <!-- first pic content in home -->
            <div class="card1">
                <h2 class="col-12">Welcome For Tourism Management System</h2>
                <div class="card1-content row p-2">

                <img src="./imgs/firstUserInterface.jpg" alt="pic home page" >

                </div>
            </div>
            <!-- end first pic content in home -->

            <div class="ClassContianer1 ">

                <div class="total-shots">
                    <h4>BEST HOTELS NEAR PYRAMIDS OF GIZA WITH ROOFTOP VIEWS</h4>
                    <img src="./imgs/pyramids-comfort-inn-rooftop-sunset-view.webp" alt="dataNumberOne" style="    width: 100%;
                    height: 83%; border-bottom-left-radius: 14px; border-bottom-right-radius: 14px;">
                </div>

                <div class="score-table">
                    <h4>Hot Air Balloons Ride in Luxor Egypt By HOD-HOD SOLIMAN</h4>
                    <img src="./imgs/caption.jpg" alt="dataNumberOne" style="    width: 100%;
                    height: 83%; border-bottom-left-radius: 14px; border-bottom-right-radius: 14px; ">
                </div>
            </div>

            <div class="ClassContianer2  ">

                <div class="BPR">
                    <h4>Orange Bay Island Snorkeling Trip With Water Sports From Hurghada</h4>
                    <img src="./imgs/caption (1).jpg" alt="dataNumberOne" style="    width: 100%;
                    height: 82.5%;
                    border-bottom-left-radius: 14px; border-bottom-right-radius: 14px;">
                </div>

                <div class="BPL">
                    <h4>Private All Inclusive: Giza Pyramids , Sphinx, MemPhis , Saqqara , Lunch & Camels</h4>
                    <img src="./imgs/caption (3).jpg" alt="dataNumberOne" style="    width: 100%; height: 82%;
                    border-bottom-left-radius: 14px; border-bottom-right-radius: 14px;">
                </div>
            </div>

            <div class="ClassContianer3 ">

                <div class="Fouls-Committed">
                    <h4>Shows, Concerts & Sports</h4>
                    <img src="./imgs/caption (4).jpg" alt="dataNumberOne" style="    width: 100%;
                    height: 87%; border-bottom-left-radius: 14px; border-bottom-right-radius: 14px;">
                </div>

                <div class="Offsides">
                    <h4>Private tour to Giza Pyramids , Sphinx , Egyptian Museum With Local Lunch</h4>
                    <img src="./imgs/caption (2).jpg" alt="dataNumberOne" style="    width: 100%;
                    height: 81.5%; border-bottom-left-radius: 14px; border-bottom-right-radius: 14px;">
                </div>
            </div>

        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- add this script (loading)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- add this script (loading)-->
    <!-- add this script (loading)-->

    <script type="text/javascript">


        // Function Loader
        function hideLoader() {
            $('.page-loader').fadeOut('slow'); // Fun Loader
        }
        // end function loader

        // Function onLoader hide the page



        // Function to toggle the bar
        function geeksforgeeks() {
            let x = document.getElementById("togglemenu");
            let y = document.getElementById("home-content");


            if (x.style.display === "block") {
                x.style.display = "none";
                y.style.display = "block";
            } else {
                x.style.display = "block";
                y.style.display = "none";
            }
        }

        // Function to toggle the plus menu into minus
        function myFunction(x) {
            x.classList.toggle("fa fa-cog fa-spin");
        }
    

    </script>
    <script src="js/main.js"></script>
</body>

</html>