<?php 
    include_once 'includes/mail.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThinZar BookShop::Contact && Feedback</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
       @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Myanmar&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.bg-cl {
    background-color: rgb(68, 60, 65);
}

.vv1 {
    background-color: rgb(100, 91, 91);
    transition: 1s;
}

.vv1:hover {
    background-color: #fff;
    transition: 1s;
}


.txt {
    color: rgb(221, 128, 14);
    font-size: 30px;
    font-family: 'Fjalla One', sans-serif;
    font-weight: 700;
}

.txt-1 {
    font-family: 'Fjalla One', sans-serif;
    font-size: 29px;
    font-weight: 500;
    color: #fff;
}

.btn-bg {
    border: 2px rgb(221, 128, 14) solid;
}

.bod-0 a{
    color: aliceblue;
    font-size: 20px;
}
.offcanvas {
    transition: all 0.8s;
}

/*.bod-0 a:hover {
    color: rgb(221, 128, 14);
    
}*/

::selection {
    background-color: rgb(221, 128, 14);
}

.bod-4 {
    cursor: pointer;
}

.intro {
    background-color: rgb(34, 38, 38);
}

.intro-1 {
    width: 100%;
    min-height: 100%;
}

.intro-1 p {
    font-size: 25px;
    vertical-align: middle;
    position: relative;
    top: 9px;
    color: rgb(221, 128, 14);
}

/*read more */

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: block;
}

.read-more-container img {
    width: 100%;
    height: 230px;
}

.first-page {
    background: linear-gradient(rgb(187, 142, 88), rgb(200, 165, 122));
    padding-top: 90px;
    padding-bottom: 1rpx;
}



/* footer */

.footer {
    background-color: rgb(68, 60, 65);
    padding-top: 10px;
    padding-bottom: 10px;
    display: flex;
    margin: 0 auto;
    justify-content: center;
    min-height: 100%;
}

.txt-01 {
    position: relative;
    top: 9px;
}

.txt-01 p {
    font-size: 25px;
    color: #fff;
}

.txt-col {
    color: rgb(178, 30, 151);
}

/*  loader  */

.loader {
            width: 100%;
            height: 100vh;
            background-color: rgb(23, 19, 19);
        }

        .first-loader{
            width: 350px;
            height: 350px;
            display: flex;
            justify-content: center;
            margin: 0 auto;
            border: 10px rgb(26, 226, 113) solid;
            position: relative;
            top: 25%;
            border-radius: 50%;
            animation: first-circle 2s linear infinite;
        }

        .first-loader::before {
            content: '';
            position: absolute;
            width: 350px;
            height: 150px;
            border-radius: 150px 150px 0 0;
            background-color: rgb(23, 19, 19);
            top: 60px;
            left: 165px;
            transform: translate(-50%, -50%);
        }

        .second-loader {
            width: 300px;
            height: 300px;
            z-index: 3;
            border-radius: 50%;
            position: relative;
            top: 15px;
            border: 10px rgb(22, 245, 238) solid;
            animation: second-circle 2s linear infinite;
        }

        .second-loader::before {
            content: '';
            position: absolute;
            width: 305px;
            height: 150px;
            border-radius: 0 0 150px 150px;
            background-color: rgb(23, 19, 19);
            transform: translate(50%, 50%);
            top: 70px;
            left: -166px;
        }

        .third-loader {
            width: 230px;
            height: 230px;
            z-index: 10 ;
            border: 10px red solid;
            border-radius: 50%;
            position: relative;
            top: 26px;
            left: 25px;
            animation: third-circle 2s linear infinite;
        } 

        .third-loader::before {
            content: '';
            position: absolute;
            width: 250px;
            height: 130px;
            background-color: rgb(23, 19, 19);
            border-radius: 150px 150px 0 0;
            top: -20px;
            left: -15px;

        }

        .forth-loader {
            width: 160px;
            height: 160px;
            z-index: 20;
            border: 10px blue solid;
            border-radius: 50%;
            position: relative;
            top: 26px;
            left: 25px;
            animation: third-circle 3s linear infinite;
        }

        .forth-loader::before {
            content: '';
            position: absolute;
            width: 170px;
            height: 110px;
            background-color: rgb(23, 19, 19);
            border-radius: 0 0 150px 150px;
            top: 55px;
            left: -10px;
        }

        .five-loader {
            width: 90px;
            height: 90px;
            z-index: 30;
            border: 10px #fff solid;
            border-radius: 50%;
            position: relative;
            top: 18%;
            left: 18%;
            animation: third-circle 3s linear infinite;
        }

        .five-loader::before {
            content: '';
            width: 100px;
            height: 55px;
            position: absolute;
            background-color: rgb(23, 19, 19);
            border-radius: 150px 150px 0 0;
            top: -13px;
            left: -13.5px;
        }

        @keyframes first-circle {
            0% {transform: rotate(0deg);}

            100% {transform: rotate(360deg);}
        }

        @keyframes second-circle {
            0% {transform: rotate(360deg);}

            100% {
                transform: rotate(-360deg);
            }
        }

        @keyframes third-circle {
            0% {
                transform: rotate(-360deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    
        .all-container {
            display: none;
            opacity: 0;
            transition: opacity 1s ease-in;
            background: linear-gradient(rgb(187, 142, 88), rgb(200, 165, 122));
        }

/*   */
        
.card-title {
    font-family: 'Noto Serif Myanmar', serif;
    font-weight: 700;
    color: rgb(221, 128, 14);
    font-size: 19px;
}

.card-text, .read-more-text {
    font-family: 'Noto Sans Myanmar', sans-serif;
    color: aliceblue;
    font-weight: 400;
    text-align: justify;
}

.card {
    background-color: rgb(35, 30, 30);
}

#i4 {
    font-size: 16.5px;
    line-height: 1.4;
}

/* button */
.bod-1 a, .bod-2 a, .bod-3 a, .bod-4 a {
    position: relative;
}
.bod-1 a::before
, .bod-2 a::before
, .bod-3 a::before
, .bod-4 a::before{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: 0%;
    content: '.';
    color: transparent;
    background: rgb(245, 175, 91);
    height: 3px;
    transition: width 1s;
}

.bod-1:hover a::before
, .bod-2:hover a::before
, .bod-3:hover a::before
, .bod-4:hover a::before {
    width: 100%;
}

.bod-1 a:hover, .bod-2 a:hover, .bod-3 a:hover
, .bod-4 a:hover {
    color: rgb(149, 139, 139);
    transition:  1s;
}


/* choose button */
.bgj {
    color: rgb(245, 150, 41);
    font-weight: 600;
    background-color: rgb(23, 19, 19);
    transition: all 1s;
}

.bgj:hover {
    background-color: rgb(187, 142, 88);
    color: #fff;
    transition: all 1s;
}

/* */
    
        .row a{
            text-decoration: none;
            color: #fff;
        }
        #i-001 {
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
        }
        .name {
            display: flex;
        }
        .u {
            position: relative;
            left: 10px;
            padding-right: 17px;
            width: 100%;
        }
        .o {
            padding-top: 20px;
            display: flex;
            justify-content: center;
        }
        .bg-022 {
            background: rgb(104, 42, 211);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.8;
            box-shadow: 8px 11px 30px -7px rgb(104, 42, 211);
            -webkit-box-shadow: 8px 11px 30px -7px rgb(104, 42, 211);
            -moz-box-shadow: 8px 11px 30px -7px rgb(104, 42, 211);
            border-radius: 20px;
        }
        .icon-1, .icon-2, .icon-3 {
            width: 200px;
            height: 180px;
            background-color: rgb(104, 42, 211);
            border-radius: 20px;
        }
        .icon-1-1, .icon-2-1, .icon-3-1 {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: antiquewhite;
            position: relative;
            
            top: 20px;
        }
        .icon-1-1 svg, .icon-2-1 svg, .icon-3-1 svg {
            position: relative;
            left: 10.5px;
            top: 10px;
        }
        .icon-1-txt, .icon-2-txt, .icon-3-txt {
            font-family: 'Bebas Neue', cursive;
            font-size: 22px;
            color: #fff;
            text-align: center;
        }
        .icon-3-txt a:hover {
            color: rgb(221, 128, 14);
        }
        .tt-1 {
            text-align: center;
            font-size: 25px;
            color: #fff;
        }
        .tt-2 {
            text-align: center;
            color: #fff;
            font-size: 19px;
        }
        .footer {
            width: 100%;
        }

    </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<div class="all-container mx-0 px-0" style="height: 100%; width: 100% ; background: linear-gradient(239deg, rgba(238,174,202,1) 7%, rgba(255,118,250,1) 11%, rgba(165,125,170,1) 20%, rgba(128,114,144,1) 42%, rgba(55,166,167,1) 57%, rgba(149,134,64,1) 74%, rgba(196,97,82,1) 83%, rgba(148,187,233,1) 100%);">
    <!----------Navbar---------->
    <nav class="navbar bg-dark fixed-top">
              
        <div class="container-fluid">
            <a class="navbar-brand" href=""><span class="txt">ThinZar</span><span class="txt-1"> BookShop</span></a>
            <button class="navbar-toggler btn-bg vv1"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"  aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button> 

              <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" style="color: #fff;" id="offcanvasNavbarLabel">Menu List</h5>
                  <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body bg-dark">
                <ul class="navbar-nav nav nav-pills nav-fill bod-0">
                    <li class="nav-item bod-1">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item bod-2">
                    <a class="nav-link" href="#">Education Book</a>
                    </li>
                    <li class="nav-item bod-3">
                    <a class="nav-link" href="#">Audio Download</a>
                    </li>
                    <li class="nav-item bod-4">
                    <a class="nav-link" href="contact.html">Contact & Feedback</a>
                    </li>
                </ul>
              </div>
                
        </div>
    </nav>
    
    <div class="container-fluid px-0 mx-auto" style="padding-top: 100px;">
        <div class="row mx-auto gy-5 pt-4 pb-4 justify-content-center" style="width: 100%;">
            
                <div class="col col-sm-3 icon-1 mx-5">
                    <div class="icon-1-1 mx-auto">
                        <svg xmlns="http://www.w3.org/1000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="rgb(221, 128, 14)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>

                    <div class="icon-1-txt mt-5">
                        <p>www.b78@gmail.com</p>
                    </div>
                </div>

                <div class="col col-sm-3 icon-2 mx-5">
                    <div class="icon-2-1 mx-auto">
                        <svg xmlns="http://www.w3.org/1000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="rgb(221, 128, 14)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>

                    <div class="icon-2-txt mt-5">
                        <p>09982774791</p>
                    </div>
                </div>

                <div class="col col-sm-3 icon-3 mx-5">
                    <div class="icon-3-1 mx-auto">
                        <svg xmlns="http://www.w3.org/1000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="rgb(221, 128, 14)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </div>

                    <div class="icon-3-txt mt-5">
                        <p><a href="https://www.facebook.com/ThinZar-106480681006297/?ref=page_internal">Click Button</a></p>
                    </div>
                </div>
            
        </div>

        <form action="mail.php" method="post" class="row row-cols-1 justify-content-center mx-auto my-3 pt-3" style="width: 100%;">
            <div class="col col-sm-5 bg-022">
                <div class="tt-1 pt-2">
                    <h1>Contact Us</h1>
                </div>

                <div class="tt-2 pt-2">
                    <p>Send a message and we will get back to you within 24 hours.</p>
                </div>
                <div class="name-add py-4">
                    <div class="name">
                       <input type="text" name="name" class="form-control mx-2" placeholder="Name">
                       <input type="email" name="email" class="form-control mx-2" placeholder="Email">
                    </div>
                </div>

                <div class="form-group pt-4 u">
                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Any Text"></textarea>
                </div>

                <div class="form-group pb-4 o">
                    <button class="btn btn btn-primary" value="Submit" type="button">Sent</button>
                </div>
            
            </form>
    </div>

            <div class="container-fluid mt-5 footer">
                <div class="txt-01">
                    <p>Create By <span class="txt-col">MiloBoss</span></p>
                </div>
            </div>



    <div class="loader">
        <div class="first-loader">
           <div class="second-loader">
                <div class="third-loader">
                   <div class="forth-loader">
                       <div class="five-loader"></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="gmail.js"></script>
<script>
    const all_container = document.querySelector(".all-container");
    const loader = document.querySelector(".loader")

    window.addEventListener("load", function() {
    loader.style.display = 'none';
    all_container.style.display = 'block';
    setTimeout(() => (all_container.style.opacity = 1), 50);
    })

    

function myFunction() {
    let name_1 = document.getElementById("name").value;
    
    let body = document.getElementById("exampleFormControlTextarea1").value;

    Email.send({
        Host : "smtp.gmail.com",
        Username : "aungthetpaing2004718@gmail.com",
        Password : "ldftcvjldmojjysk",
        To : 'tinmyoning@gmail.com',
        From : document.getElementById("email").value,
        Subject : "Name is " + name_1,
        Body : body,
    }).then(
      message => alert(message)
    );
}



</script>
