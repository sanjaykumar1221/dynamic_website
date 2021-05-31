
<?php
include ("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visudh Ajivam</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'sans-serif';
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: honeydew;
        }

        .navbar {
            width: 70%;
            display: flex;
            flex-direction: row;
        }

        .navbar ul li {
            display: inline-block;
            padding: 5px;
            margin: 5px;

        }

        .navbar ul {
            display: inline-block;

        }

        .navbar a {
            text-decoration: none;
            color: rgb(7, 7, 88);
            /* font-weight: 600; */
        }

        .navbar li:hover {
            border-bottom: 2px solid rgb(7, 7, 88);

        }

        .navbar a:hover {

            color: rgb(192, 37, 37);
        }

        .container h1 {
            width: 20%;
            margin: 10px;
            text-align: center;
        }

        #visudh {
            color: rgb(84, 94, 209);
            text-decoration: none;
            font-weight: 600;

        }

        #visudh:hover {
            color: rgb(36, 48, 179);

        }

        #text-danger {
            color: red;
            padding: 7px;
            text-decoration: none;

        }

        #text-danger:hover {
            color: rgb(163, 16, 16);
        }

        .w3-dropdown-hover {
            color: rgb(7, 7, 88);
            font-weight: 700;


        }

        header .appointment-btn {
            background-color: cornflowerblue;
            padding: 9px;
            border-radius: 10px;
            border-top: 2px solid black;

        }

        header .appointment-btn:hover {
            text-decoration: navy;
            color: rgb(224, 25, 68);
            border-bottom: 2px solid black;
            border-top: none;
            font-weight: 900;

        }






        /* ###################navigation for below 700px################## */

        #navigation {
            width: 200px;
            height: 100vh;
            position: fixed;
            left: -200px;
            top: 0px;
            background: linear-gradient(green, purple);
            display: transparent;
            z-index: 1;
            transition: .5s;


        }

        nav ul li img {
            width: 20%;
            margin-top: 2px;


        }

        nav ul li {
            list-style: none;
            margin: 23px 0px;

        }

        nav ul li a {
            padding: 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 5px auto;

        }

        #navigation nav ul li a:hover {
            color: sienna;
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }


        #menubtn {
            width: 34px;
            height: 33px;
            background: rgb(46, 73, 206);
            position: fixed;
            left: 5px;
            top: 50px;
            z-index: 3;
            cursor: pointer;
            border-radius: 5px;
            visibility: hidden;



        }

        #menubtn img {
            width: 15px;
            height: 15px;
            margin: 10px 10px;
        }





        /* ###################navigation end################## */

        .sec-front {
            background: url("images/image1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 85vh;
            position: absolute;
            z-index: -2;

        }

        .sec1-front {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        .sec1-front h2 {
            margin-top: 70px;
            font-weight: 700;
            font-size: 40px;
            color: blue;
            letter-spacing: 3px;

        }

        .sec1-front p {
            color: black;
            font-size: 20px;
            line-height: 0px;
            font-weight: 600;
        }

        #sec1-front-btn {
            width: 230px;
            text-decoration: none;
            padding: 15px;
            margin: 50px;
            background-color: cornflowerblue;
            border-radius: 15px;
            font-weight: 600;
            color: whitesmoke;
            border-bottom: 3px solid black;
            cursor: pointer;

        }

        #sec1-front-btn:hover {
            text-shadow: 1px 1px 2px black;
            color: black;


        }

        .section2 {
            margin-top: 30%;
            width: 100%;
            height: auto;
            z-index: 5;


        }

        .section2 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding: 50px;


        }

        .sec2-2d {
            padding: 5px;
            width: 265px;
            margin: 40px;
            height: 420px;
            background-color: white;
            border: 1px solid violet;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            box-shadow: 1px 1px 10px whitesmoke;
            box-shadow: 1px 1px 1.59px black;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            flex-wrap: wrap;
            border-radius: 20px;
            text-shadow: 0.1px 0.2px 0.2px blueviolet;

        }

        .sec2-2d:hover {
            background-color: #6A5ACD;
            color: white;

        }

        .sec2-2d p {
            text-align: justify;
            padding: 0px;
        }

        .sec2-2d h2 {
            font-size: 22px;
            margin: 30px;
            text-align: center;
            font-weight: 600;
            color: rgb(7, 7, 138);
        }

        .sec2-2d h2:hover {
            color: white;

        }

        .sec2-2d a {
            width: 140px;
            padding: 5px;
            text-align: center;
            margin-left: 20%;
            font-size: 20px;
            display: flex;
            flex-direction: column;
            color: black;
            text-decoration: none;
            background-color: #4d79ff;
            border-radius: 12px;


        }

        .sec2-2d a:hover {
            background-color: #2e79ff;
            color: white;
        }

        /* features starts here*/
        .about {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            flex-wrap: wrap;
            box-shadow: 1px 1px 1px rgb(46, 4, 4);
        }


        .main-about {
            margin: 20px;
            box-sizing: content-box;

        }

        .about h2 {

            text-align: center;
            font-size: 35px;
            font-weight: 700;
            color: rgb(23, 23, 143);

        }

        .about h2:hover {
            color: rgb(138, 11, 11);
        }

        .about p {
            padding: 50px;
            text-align: center;
            color: rgb(7, 7, 82);
            font-size: 15px;
            font-weight: 500;
        }

        .feature-box {
            width: 600px;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            padding: 10px;


        }

        .feature-box h2 {
            color: rgb(19, 19, 83);
            text-align: center;
            font-size: 30px;
            font-weight: 600;
        }

        .feature-box h2:hover {
            color: rgb(25, 25, 134);
            text-shadow: 1px 1px 2px black;

        }

        .features-desc {
            display: inline-block;
            align-items: center;
            text-align: center;
            justify-content: center;


        }

        .features-icon {

            font-size: 35px;
            padding: 5px;
            margin: 5px;
            margin-bottom: 20px;
            color: brown;
            border-top: 2px solid black;
            border-radius: 20px;
            float: left;
            margin-top: 12%;
            background-color: rgb(231, 235, 222);
            width: 15%;
            align-items: center;
            text-align: center;
            justify-content: center;


        }

        .features-icon:hover {
            border-top: none;
            border-bottom: 2px solid black;



        }


        .features-text {

            font-size: 15px;
            display: inline-block;
            margin-top: 20px;
            width: 80%;
            height: auto;
            text-align: justify;
            border-left: 1px solid black;
            padding: 5px;

        }

        #aside {
            float: right;
            margin-top: -60%;
        }

        .feature-img img {
            width: 540px;
            height: 600px;
            border-radius: 20px;
        }

        /* features end here */


        /* section3 starts */

        .part3 {
            margin: auto;
            width: 99%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        .sec3 {
            width: 310px;
            /* height: 380px; */
            height: auto;
            background-color: royalblue;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            border-radius: 50px;
            border-bottom: 2px solid black;



        }

        .sec3:hover {
            background-color: #44448b;

        }




        .sec3 {
            display: flex;
            flex-direction: column;
            color: white;
            padding: 5px;
            margin: 15px;
            display: border-box;

        }

        .sec3 h2 {
            font-size: 25px;
            font-weight: 600;
            justify-content: center;
            display: flex;
            margin-top: 20px;
        }

        .sec3 p {
            font-size: 16px;
            align-items: center;
            justify-content: center;
            text-align: justify;
            padding: 30px;
        }


        /* section3 end */

        /* section4 end */

        .part4 {
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .title-service {
            margin: 2%;
            /* background-color: cadetblue; */
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            flex-wrap: wrap;
            box-shadow: 1px 1px 1px whitesmoke;
            padding: 30px;


        }

        .title-service p {
            text-align: center;
            font-size: 15px;
            font-weight: 500;

        }

        .title-service h2 {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            color: rgb(20, 20, 121);


        }

        .title-service h2:hover {
            color: rgb(138, 38, 38);
        }

        .section4 {
            margin: 20px;
            width: 97%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        .sec4 {
            width: 300px;
            height: 400px;
            background-color: #e3f1fc;
            border-radius: 30px;
            border-bottom: 2px solid black;
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
            color: black;
            padding: 20px;

        }

        .sec4:hover {
            background-color: #716ddb;
            border-bottom: none;
            border-top: 2px solid black;
            color: white;

        }

        .sec4 a:hover {
            color: rgb(14, 14, 124);
            font-weight: 600;

        }

        .sec4-content {
            margin: 20px;


        }

        .sec4 a {
            font-size: 25px;
            font-weight: 600;
            justify-content: center;
            display: flex;
            text-decoration: none;
        }

        .sec4 p {
            font-size: 16px;
            font-weight: 500;
            padding: 40px;
            text-align: justify;
            justify-content: center;

        }

        /* section4  end */


        /* section5  starts */
        .part5 {
            /* padding-top: 5%; */
            width: 99%;
            height: auto;
            margin: auto;
            background: white;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 10px;

        }

        .form {

            display: flex;
            flex-direction: column;
            text-align: center;
            align-content: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 10px;

        }

        .input {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 333px;
            padding: 12px;
            margin: 15px;
            border: none;
            border-bottom: 1px solid black;

        }

        .choose {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 333px;
            padding: 15px;
            margin: 15px;
            border: none;
            border-bottom: 1px solid black;


        }

        .text-area {
            visibility: none;
        }

        .textarea {

            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 10px;
            color: black;
            text-align: center;

        }

        #submit {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 333px;
            padding: 15px;
            margin: 15px;
            margin-top: 50px;
            font-size: 17px;
            background-color: blue;
            color: white;
            cursor: pointer;
            border-radius: 8px;
            border-bottom: 2px solid black;

        }

        #submit:hover {
            color: white;
            text-shadow: 1px 1px 2px red;
            font-weight: 600;
            background-color: rgb(12, 12, 180);


        }

        #under-form {
            border: 1px solid pink;
            background-color: teal;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px black;
        }

        /* section5  end */

        /* # Departments */
        /* -------------------------------------------------------------- */

        #part6 {
            background: whitesmoke;
            width: 100%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin: auto;


        }

        .main-depart {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;

        }

        .title-department h2 {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            color: rgb(20, 20, 121);

        }

        .title-department h2:hover {
            color: rgb(163, 17, 17);
        }

        .title-department p {
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            padding: 20px;

        }

        .tablink {
            width: 15%;
            margin: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            background-color: cadetblue;
            color: black;
            font-weight: 600;
            border-radius: 20px;
            text-align: center;
            justify-content: space-around;
            cursor: pointer;
            padding: 10px 10px;
            font-size: 16px;
        }

        .tablink:hover {
            background-color: whitesmoke;
        }

        .tabcontent {
            color: black;
            padding: 20px 20px;
            font-size: 15px;
        }

        .tabcontent h3 {
            width: 100%;
            text-align: center;
            align-items: center;
            padding: 20px;
            background-color: whitesmoke;
            color: red;
            position: relative;

        }

        .tabcontent p {
            width: 100%;
            text-align: center;
            padding: 20px;
            margin: 10px;
        }

        .img {
            border-radius: 20px;
            position: cover;
            height: 45%px;
            width: 90%px;
            margin-left: 25%;

        }



        /* ******* department end********* */


        /* ********doctors starts******** */


        .title-doctor {
            width: 100%;
            height: auto;
            margin: auto;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            text-align: center;
            padding: 10px;

        }

        .title-doctor h2 {
            font-size: 35px;
            font-weight: 700;
            color: rgb(7, 7, 163);


        }

        .title-doctor h2:hover {
            color: rgb(139, 11, 11);

        }

        .title-doctor p {
            font-size: 16px;
            font-weight: 500;


        }

        .section7 {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;


        }


        .pic img {
            width: 190px;
            height: 190px;
            border-radius: 100px;
            border: 1px solid white;
            margin-left: 5px;
            margin-top: 10px;
            float: left;
            transition: 0.9s;

        }

        .sec7 {
            width: 470px;
            height: 250px;
            background-color: whitesmoke;
            border-radius: 15px;
            margin: 40px;
            display: flex;
            flex-wrap: nowrap;




        }

        .sec7:hover {
            background-color: #34347a;
            color: white;

        }




        .member-info h4 {
            font-size: 20px;
            color: black;
            padding: 7px;
            margin-left: 10px;
        }

        .member-info span {
            font-size: 16px;
            color: black;
            padding: 20px;


        }

        .member-info p {
            font-size: 16px;
            color: black;
            padding: 20px;


        }


        .social a {
            text-align: right;
            font-size: 23px;
            display: inline-block;
            color: black;
            margin-left: 20px;
            position: relative;


        }

        .social a i:hover {
            color: blue;
            font-size: 25px;
        }

        /* ******doctors end*********** */

        /* *********footer************* */


        #footer {
            background-color: whitesmoke;

        }

        .row {
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;

        }

        .footer-contact {
            margin: 20px;
            margin-left: 50px;

        }

        .footer-contact h3 {
            margin-left: 80px;
            font-size: 30px;
            margin: 20px;
        }

        .text-pri {
            color: rgb(45, 116, 86);
            padding: 5px;
        }

        .text-dan {
            color: red;

        }

        .footer-contact p {

            font-size: 17px;
            color: rgb(119, 103, 103);

        }

        .footer-contact p strong {

            font-size: 18px;
            color: rgb(10, 7, 7);
            opacity: 0.8;

        }

        .footer-menu-links {
            margin: 20px;
            padding: 20px;
        }

        .footer-menu-links li {
            padding: 7px;
            list-style: none;
        }

        .footer-menu-links li i {
            color: black;
            font-size: 10px;
            padding: 5px;
        }

        .footer-menu-links h4 {
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .footer-menu-links li a {
            text-decoration: none;
            font-weight: 600;
            opacity: 0.6;
        }

        .footer-menu-links li a:hover {
            color: rgb(146, 1, 1);

        }

        .footer-subscribe {

            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            text-align: center;
            justify-content: center;
            margin: 20px;
            padding: 20px;

        }

        .footer-subscribe h4 {
            color: black;
            font-size: 20px;
            margin-left: 18px;
        }

        .footer-subscribe p {
            color: black;
            font-size: 15px;
        }

        .footer-subscribe input {
            margin: 20px;
        }

        .footer-subscribe input[type="email"] {

            color: black;
            width: 250px;
            font-size: 18px;
            margin-left: 18px;
            padding: 8px;
            border-radius: 50px;
            background-color: white;
            outline: none;
            border: 1px solid black;




        }

        .footer-subscribe input[type="submit"] {
            color: white;
            width: 130px;
            padding: 10.7px;
            padding-bottom: 10px;
            margin-left: -66px;
            border-radius: 50px;
            background-color: #0e84f3;
            font-size: 15px;
            font-weight: bolder;
            border: 1px solid black;

        }

        .footer-subscribe input[type="submit"]:hover {
            background: blue;
        }


        .footer2 {
            background-color: #609377;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;

        }

        .copyright {
            color: black;

        }

        .f2-content {
            padding: 30px;
            margin: 15px;
            margin-left: 35px;

        }

        .f2-content a {
            color: blue;
            text-decoration: none;
        }

        .credits {
            color: black;
            padding: 5px;

        }

        .social-link {
            margin-left: 37%;
            padding: 40px;

        }

        .social-link a i {
            padding: 5px;
            font-size: 35px;
            border-radius: 100%;

        }


        /* *********footer************* */



        @media screen and (max-width:1200px) {
            body {
                margin: 0px;
                right: 0px;
                left: 0px;
                padding: 0px;

            }

            h1,
            h2,
            h3,
            h4 {
                font-size: 30px;
            }

            p {
                font-size: 17px;
            }

            .navbar {
                flex-direction: row;
                flex-wrap: nowrap;
                font-size: 12px;
                padding: 5px;
            }

            header .appointment-btn {
                background-color: cornflowerblue;
                padding: 10px;
                text-align: center;
                width: 140px;
                border-radius: 10px;
                border-top: 2px solid black;
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;


            }

            .main-about {
                margin: 20px;
                box-sizing: border-box;

            }

            .feature-img img {
                width: 540px;
                height: auto;
                border-radius: 20px;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                position: relative;
                z-index: -2;
                opacity: 0.0;
            }

            .feature-box {
                margin: auto;
                align-items: center;
                justify-content: center;
                width: 600px;
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                padding: 20px;


            }

        }

        @media screen and (max-width:1090px) {
            .sec2-2d {
                padding: 5px;
                width: 250px;
                margin: auto;
                margin-bottom: 50px;
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                flex-wrap: wrap;
                border-radius: 20px;
                text-shadow: 0.1px 0.2px 0.26px blueviolet;

            }

            header .appointment-btn {

                margin: auto;
                float: right;


            }

            .section7 {
                width: 100%;
                margin: 10px;
                display: flex;
                justify-content: space-around;
            }

        }

        @media screen and (max-width:900px) {
            .part3 {
                margin: auto;
                padding: auto;
                width: 99%;
                height: auto;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;

            }

            .sec1-front h2 {
                font-size: 25px;
                margin: 20px;

            }

            .sec1-front a {
                width: 170px;
                margin: 30px;
            }
        }

        @media screen and (max-width:800px) {

            .navbar {
                flex-direction: row;
                flex-wrap: nowrap;
                font-size: 10px;
                padding: 0px;
            }

            .tabcontent img {
                margin: auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius: 20px;
                position: cover;
                height: 30%px;
                width: 30%px;


            }

        }

        @media screen and (max-width:750px) {


            .navbar ul li {
                display: inline-block;
                padding: 10px;
                margin: 5px;

            }

            .part3 {
                width: 100%;
                /* border: 2px solid black; */
                margin: auto;
                justify-content: center;
                align-items: center;
                margin: auto;
            }

            .part3 p {
                font-size: 16px;
                padding: 20px;
                margin: 10px;
            }

            .part3 h2 {
                font-weight: 700;
            }

        }

        @media screen and (max-width:700px) {
            .navbar ul li {
                display: none;
                margin-left: 20px;

            }

            #appoint-btn {

                position: absolute;
                margin-left: 200px;

            }

            .navbar button {
                display: none;


            }

            #menubtn {
                visibility: visible;
                margin-top: -35px;


            }


            .container h1 {

                font-size: 20px;
                margin-left: 80px;
            }

            .sec1-front h2 {
                font-size: 20px;
                margin: 15px;

            }

            .sec1-front p {
                font-size: 12px;
            }

            .sec1-front a {
                width: 120px;
                padding: 7px;
                margin: 25px;
                font-size: 10px;
                border-bottom: 2px solid black;
            }


        }

        @media screen and (max-width:630px) {
            .part3 {
                align-content: center;
                margin: auto;
                padding: auto;
            }

            .feature-box {
                width: 100%;

            }

            .features-text {
                font-size: 15px;
                margin-top: 20px;
                width: 50%;
                text-align: justify;
                height: auto;

            }

            .features-icon {
                border-right: 1px solid black;
                font-size: 40px;

            }

            .tablink {
                width: 100%;
                font-size: 17px;
                font-weight: 500;
                padding: 8px;
                background-color: #ccccff;
                margin: 5px;
                flex: -4;

            }

            .tabcontent {
                width: 100%;
                margin: 0px;
                padding: 0px;

                font-size: 15px;

            }

            .tabcontent p {
                text-align: justify;
                margin: 5px;


            }

            .img {
                border-radius: 20px;
                position: cover;
                width: 240px;
                height: auto;

            }

            .title-service p {

                text-align: justify;
            }

            .section2 {
                margin-top: 50%;
            }


        }


        @media screen and (max-width:550px) {

            #appoint-btn {

                position: absolute;
                margin-left: 100px;

            }

            .section2 {
                margin-top: 60%;
            }
        }

        @media screen and (max-width:420px) {
            #appoint-btn {
                position: relative;
                width: 100px;
                font-size: 8px;
                color: brown;
                font-weight: 500;

            }

            .section2 {
                margin-top: 80%;
            }

            .part5 {
                width: 99%;

            }

            .part5 p {
                padding: 30px;
            }

            #part6 {
                width: 100%;
                align-content: center;
                /* margin: 40px; */
                padding: auto;

            }

            #part6 p {
                text-align: justify;
                padding: 30px;
            }

            /* .title-doctor {
                margin: 20px;
                padding: 20px;
            } */

            .title-doctor p {
                text-align: justify;

            }

            .sec7 {
                margin: 8px;
                height: 280px;
                margin-left: 5px;
                margin-right: 5px;



            }

            .section7 {
                /* margin: 50px; */
                width: auto;

            }

            .sec-front {
                width: 100%;
                height: 85vh;
            }

            .sec-front h2 {
                font-size: 25px;

            }

            .sec-front p {
                font-size: 16px;
                margin: 10px;

            }

            .sec-front a {
                font-size: 14px;
                color: darkred;
                padding: 10px;
                margin: 13px;

            }

            .input,
            .choose,
            #textarea,
            #submit {
                width: 250px;

            }

            .sec-front {
                width: 100%;
                height: 100%;
                position: absolute;
            }

            #footer {
                margin: 0px;
                padding: 0px;
            }

            #footer p {
                font-size: 15px;
            }

            .about {
                width: auto;
                margin: auto;
            }

            .features-text {
                width: 100%;
                height: auto;

            }

            .features-icon {
                visibility: hidden;
                display: none;

            }

            .about p {
                text-align: justify;
            }



        }

        @media screen and (max-width:330px) {
            #appoint-btn {
                background-color: brown;
                padding: 1px;
                color: white;
                width: 60px;
                position: absolute;
                border-radius: 5px;
                margin-left: 70px;
            }

            .input,
            .choose,
            #textarea,
            #submit {
                width: 170px;
                font-size: 10px;

            }

            .sec2-2d {
                height: auto;
            }

            .sec2-2d a {
                font-size: 10px;
                width: 80px;
                margin-bottom: 10px;
            }

            .sec-front p {
                font-size: 12px;

            }

            #sec1-front-btn {
                width: 150px;
                font-size: 12px;

            }

            .section2 {
                margin-top: 110%;
            }

            .pic img {
                width: 100px;
                height: 100px;
                border-radius: 100px;
                border: 1px solid white;
                transition: 0.9s;

            }

            .sec7 {
                width: 250px;
                height: 300px;
                margin: 5px;
                margin-left: 5px;
                margin-right: 5px;


                border: 2px solid red;

                /* align-content: center; */

            }

            .sec4 {
                width: 250px;
                height: auto;
                margin-right: 25px;
                border: 2px solid red;

            }

            .footer-contact {
                margin: 0px;
                padding: 10px;

            }

            .footer-subscribe {
                margin: 0px;
                padding: 0px;

            }

            .features-text {
                width: 100%;
                height: auto;

            }

            .features-icon {
                visibility: hidden;
                display: none;

            }

            .about p {
                text-align: justify;
            }


        }

        @media screen and (min-width:1220px) {


            #aside {
                margin-top: -50%;
            }

            .feature-img img {
                width: 50%;
                height: 600px;
                border-radius: 20px;
                float: right;

            }
        }

        @media screen and (min-width:1440px) {
            .feature-box {
                width: 100%;
                 display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                padding: 30px;


            }
            .feature-img img {
                visibility: hidden;
                display: none;
            }

            .features-text {
                width: 60%;
                padding: 40px;
                margin: 30px;
                height: auto;
                font-size: 18px;

            }

            .features-icon {
                visibility: hidden;
                display: none;
                

            }

            .about p {
                text-align: justify;
                font-size: 20px;
                padding: 20px;
                margin: 20px;
                text-align:center;
            }
            .sec7 {
                width: 600px;
                height: 350px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin: 25px;
            
 
            }

            .sec4 {
                width: 500px;
                height: 500;
                margin-right: 25px;
 
            }
        }

        @media screen and (min-width:1620px) {

        .sec2-2d {
            padding: 5px;
            width: 400px;
            margin: 40px;
            height: 550px;
            justify-content: space-around;

            
        }
        .sec2-2d p{
            padding: 20px;
            font-size: 18px;
        }
        .part3 {
            justify-content: space-between;
            margin: 20px;
            padding:50px;

        }
        .sec3{
            width: 500px;
            height: 600px;

        }
        .sec3 h2{
            font-size: 40px;
            padding: 30px;

        }


        .sec3 p{
            padding: 40px;
            font-size: 20px;
        }
        }

        /* -------------------------------------------------------------- */
    </style>
</head>

<body>

    <header class="header" id="home">
        <div class="container">

            <h1 id="comp-name"><a href="main.html" id="visudh">Visudh<span id="text-danger">Ajivam</span></a> </h1>
            <nav class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutus">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#Departments">Departments</a></li>
                    <li><a href="#doctor">Doctors</a></li>
                    <li><a href="#">Contact</a></li>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Login</button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" class="w3-bar-item w3-button">Sign Up</a>
                            <a href="#" class="w3-bar-item w3-button">Cart</a>
                            <a href="#" class="w3-bar-item w3-button">Orders</a>
                        </div>
                    </div>
                    <a href="#makeanappointment" id="appoint-btn" class="appointment-btn">Make an Appointment</a>
                </ul>

            </nav>
        </div>
        <!-- #################navigation#######################-->

        <div id="navigation">
            <nav>
                <ul>
                    <li><a href="#home">Home</a> </li>

                    <li><a href="#aboutus"> About</a> </li>
                    <li><a href="#services" target="right"> Services</a> </li>

                    <li><a href="#Departments" target="right">Departments</a> </li>

                    <li><a href="#doctor" target="right">Doctors</a></li>

                    <li><a href="main.html" target="right">Contact</a></li>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Login</button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" class="w3-bar-item w3-button">Sign Up</a>
                            <a href="#" class="w3-bar-item w3-button">Cart</a>
                            <a href="#" class="w3-bar-item w3-button">Orders</a>
                        </div>
                    </div>

                </ul>
            </nav>
        </div>

        <div id="menubtn">
            <img src="images/menu.png" id="menu">



        </div>
        <script>
            var menubtn = document.getElementById("menubtn");
            var navigation = document.getElementById("navigation");
            var menu = document.getElementById("menu");
            navigation.style.right == '-200px';
            menubtn.onclick = function () {
                if (navigation.style.left == '-200px') {
                    navigation.style.left = '0';
                    menu.src = "images/close.png";
                }
                else {
                    navigation.style.left = '-200px';
                    menu.src = "images/menu.png";
                }
            }

        </script>


    </header>


    <!-- ##################navigation ends####################### -->




    <section class="sec-front">
        <div class="sec-1">

            <div class="section" id="bg">
                <div class="sec1-front">
                    <h2>WELCOME TO VISUDH <span id="text-danger"> AJIVAM </span></h2>
                    <p>We Provide You High Quaility Services</p>
                    <a href="main.html" id="sec1-front-btn"> ORDER MEDICINE</a>
                </div>

            </div>

    </section>



    <section>
        <div class="section2" id="s-2">
            <div class="sec2-2d">
                <h2>Why Choose Medilab?</h2>
                <p>VISUDH AJIVAM PVT LTD is one of the best digital platform for health care services integrated
                    with
                    pharmacies, doctors, labtests, diagnosis centres across India to provide world class Healthcare
                    facilities to individuals across the country.</p>
                <a href="">Learn More</a>
            </div>

            <div class="sec2-2d">
                <h2>DIAGNOSIS</h2>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                <a href="">Book Now</a>


            </div>

            <div class="sec2-2d">
                <h2>BOOK LAB TEST</h2>
                <p>Set up an appointment, Call or Mail us.</p>
                <a href="">Book Now</a>

            </div>

            <div class="sec2-2d">
                <h2>MEDICAL STORE NEAR ME</h2>
                <p>Visudhajivam is India's Largest Online medical store where you can shop for quality online and
                    offline
                    medicines, wellness products.</p>
                <a href="">Find Now</a>

            </div>
        </div>

    </section>





    <section class="sec-about">
        <br />
        <br />
        <div class="about">

            <h2 id="aboutus">About Us </h2>
            <p>VISUDH AJIVAM PVT LTD is one ofthe
                best digital platform for health care services integrated with
                pharmacies, doctors, labtests, diagnosis centres across India to provide world class Healthcare
                facilities to individuals across the country</p>
        </div>
        <br>
        <br>
        <div class="divide-2part">
            <div class="main-about">
                <div class="feature-box">
                    <!-- <div class="feature"> -->
                    <h2>Lab Test</h2>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-shield"></i>

                        </div>
                        <div class="features-text">
                            <p> We make sure that the quality of service you are getting is world class we give you this
                                gurranty with every service you opt for online as well as offline.We are one stop
                                solution
                                for your problems.We are covering a wide range of products, test and doctors with
                                speciality
                                in different feilds to make the service wide and safest.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="feature-box">
                    <h2>Doctors Availability</h2>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-check-square-o"></i>

                        </div>
                        <div class="features-text">

                            <p> We make sure that the quality of service you are getting is world class we give you this
                                gurranty with every service you opt for online as well as offline.We are one stop
                                solution for your problems.We are covering a wide range of products, test and doctors
                                with speciality in different feilds to make the service wide and safest.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="feature-box">
                    <h2>Medicine</h2>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-inr"></i>

                        </div>
                        <div class="features-text">
                            <p> We make sure that the quality of service you are getting is world class we give you this
                                gurranty with every service you opt for online as well as offline.We are one stop
                                solution for your problems.We are covering a wide range of products, test and doctors
                                with speciality in different feilds to make the service wide and safest.

                            </p>
                        </div>
                    </div>
                </div>



                <aside id="aside">

                    <div class="feature-img">
                        <img src="images/image1.jpg">

                    </div>
                </aside>
            </div>

        </div>

    </section>


<br/>
<br/>
<br/>
<br/>
<br/>



    <section class="section3">
        <div class="part3">
            <div class="sec3">
                <h2>Our Vision</h2>
                <p> To revolutionise the Healthcare sector through this healthtech platform so that each and every
                    citizen of India can get the best medical needs at there allowing budget.</p>

            </div>

            <div class="sec3">
                <h2>Our Mission</h2>
                <p>SVisudh AJIVAM PVT LTD is on a mission to take hand in hand with public and help them across their
                    medical needs with making the user friendly digital platform without any Hassel at right time.</p>


            </div>

            <div class="sec3">
                <h2>Our Values</h2>
                <p>VISUDH AJIVAM PVT LTD is one of the best digital platform for health care services integrated with
                    pharmacies, doctors, labtests, diagnosis centres India world class facilities to individuals across
                    the country.</p>


            </div>


        </div>
    </section>





    <section class="section4">
        <div class="title-service" id="services">
            <h2>Services</h2>

            <div>
                <p>VISUDH
                    AJIVAM PVT
                    LTD is one of the
                    best digital platform for health care services integrated with
                    pharmacies, doctors, labtests, diagnosis centres across India to provide world class Healthcare
                    facilities to individuals across the country.</p>
            </div>
        </div>








        <div id="con-1" class="part4">
            <div class="sec4-content">
                <div class="sec4">
                    <a href="">DIAGNOSIS</a>
                    <p>We are expert in the diagnosis and treatment, Set up an appointment, Call or Mail us.</p>

                </div>
            </div>
            <div class="sec4-content">
                <div class="sec4">
                    <a href="">LAB TEST</a>
                    <p>Set up an appointment, Call or Mail us.</p>


                </div>
            </div>
            <div class="sec4-content">
                <div class="sec4">
                    <a href="">Doctor APPOINTMENT</a>
                    <p>Set up an appointment, Call or Mail us.</p>

                </div>
            </div>


            <div class="sec4-content">
                <div class="sec4">
                    <a href="">ORDER MEDICINE</a>
                    <p>All our medicines undergo a three-step quality check process to ensure they are of high quality,
                        Call or Mail us.</p>
                </div>
            </div>
            <div class="sec4-content">
                <div class="sec4">
                    <a href="">CUSTOMER SUPPORT</a>
                    <p>We have 24*7 excellent customer support,Call or Mail us.</p>

                </div>

            </div>
            <div class="sec4-content">

                <div class="sec4">
                    <a href="">MEDICAL STORE NEAR ME</a>
                    <p>Visudhajivam is India's Largest Online medical store where you can shop for quality online and
                        offline medicines, wellness products.</p>
                </div>

            </div>

        </div>
        </div>
    </section>

    <section class="part5">
        <div class="sec5">
            <div class="title-service" id="makeanappointment">
                <h2>Make an Appointment</h2>
                <p>VISUDH AJIVAM PVT
                    LTD is one of the best digital platform for health care services integrated with pharmacies,
                    doctors, labtests, diagnosis centres across India to provide world class Healthcare facilities to
                    individuals across the country.This platform is the fastest, cheapest, safestway for you and your
                    loved ones for meeting your medical needs in terms of medicine, labtest and doctors availability at
                    the right time at the best affordable price.</p>
            </div>

            <div class="form">
                <form>
                    <div id="under-form">
                        <label for="name"></label><input type="text" name="name" class="input" placeholder="Your Name"
                            autocomplete="off" required>


                        <label for="email"></label><input type="email" name="email"  class="input" placeholder="Your Email"
                            autocomplete="off" required>

                        <label for="phone"></label><input type="tel"  name="phone" class="input" placeholder="Your Phone"
                            autocomplete="off" required >

                        <label for="appointment"></label><input type="date" name="date"  class="input"
                            placeholder="Appointment Date" autocomplete="off" required>

                            <label for="address"></label><input type="text" name="address"  class="input"
                            placeholder="Parmanent Address" autocomplete="off" required >
                            <label for="reason"></label><input type="text" name="reason"  class="input"
                            placeholder="Give reason in short" autocomplete="off" required >



                        <!-- <label for="treatment"></label><select name="SelectTreatment" name="treatment"    class="choose" id="SelectTreatment" required>
                            <option value="SelectTreatment">Select Treatment</option>
                            <option value="Cardiology"> Cardiology</option>
                            <option value="Child-treatment">Neorology </option>
                            <option value="Neorology">Child-treatment</option>

                        </select>

                        <label for="test"></label><select name="SelectTest"  name="test" class="choose" id="SelectTest" required>
                            <option selected hidden value="" >SelectTest</option>
                            <option value="Diagnosis">Diagnosis</option>
                            <option value="Lab Test">Lab Test</option>
                            <option value="Op">Op</option>
                        </select> -->

                        <!-- <textarea id="textarea" name="write-text" rows="5" cols="41"
                            placeholder="Message(Optional)"   name="textarea"> </textarea> -->

                        <input type="submit" id="submit" value="Make an Appointment">
                        <span id="show"></span>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <?php
 include("connection.php");
//  if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $date = $_GET['date'];
    $address = $_GET['address'];
    $reason = $_GET['reason'];
    



    $insertquery = "INSERT INTO  appointment (name,email,phone,date,address,reason) values ( '$name','$email','$phone','$date','$address','$reason')";

    $data=mysqli_query($conn,$insertquery);


if($data){
    ?>

    <script>
    var data=document.getElementById("show").innerHTML="Your Appointment Successful";
     document.getElementById("show").style.color="blue";
    </script>
    

   <?php

 } 
else{
     // echo " not inserted";

    }


?>




    <!-- ======= Departments Section ======= -->




    <section id="departments" class="departments">
        <div class="container" id="part6">
            <!-- ********* -->
            <div class="title-department">
                <h2 id="Departments">Departments </h2>
                <p>We make sure that the quality
                    of service you are getting is world class we give you this gurranty
                    with every service you opt for online as well as offline.We are one stop solution for your
                    problems.We are covering a wide range of products, test and doctors with speciality in different
                    feilds to make the service wide and safest.</p>
            </div>
            <br>
            <br>
            <br>
            <div class="main-depart">

                <button class="tablink" onclick="openPage('Cardiology', this, 'blue')"
                    id="defaultOpen">Cardiology</button>
                <button class="tablink" onclick="openPage('Neurology', this, 'green')">Neurology</button>
                <button class="tablink" onclick="openPage('Hepatology', this, 'blue')">Hepatology</button>
                <button class="tablink" onclick="openPage('Pediatrics', this, 'orange')">Pediatrics</button>
                <button class="tablink" onclick="openPage('Eye Care', this, 'orange')">Eye Care</button>
                <section>
                    <div id="Cardiology" class="tabcontent">
                        <h3>Cardiology</h3>
                        <p>Cardiology is the study and treatment of disorders of the heart and the blood
                            vessels. A person with heart disease or cardiovascular disease may be
                            referred
                            to a cardiologist. Cardiology is a branch of internal medicine. A
                            cardiologist
                            is not the same as a cardiac surgeon.</p>
                        <img src="images/departments-1.jpg" alt="" class="img">


                    </div>


                    <div id="Neurology" class="tabcontent">
                        <h3>Neurology</h3>
                        <p>Neurology is the branch of medicine concerned with the
                            study
                            and treatment of disorders of the nervous system. </p>
                        <p>The nervous system is a complex, sophisticated system that regulates and
                            coordinates body activities. It has two major divisions: Central nervous
                            system:
                            the brain and spinal cord.</p>
                        <img src="images/departments-2.jpg" alt="" class="img">
                    </div>


                    <div id="Hepatology" class="tabcontent">
                        <h3>Hepatology</h3>
                        <p>Hepatologist. This is a doctor who diagnoses and treats
                            diseases associated with the gallbladder, pancreas and liver.</p>

                        <img src="images/departments-3.jpg" alt="" class="img">
                    </div>


                    <div id="Pediatrics" class="tabcontent">
                        <h3>Pediatrics</h3>
                        <p>Pediatrics (also spelled paediatrics or pædiatrics) is the branch of medicine
                            that involves the medical care of infants, children, and adolescents. The
                            American Academy of Pediatrics recommends people be under pediatric care
                            through
                            the age of 21 (though usually only minors are required to be under pediatric
                            care).</p>
                        <img src="images/departments-4.jpg" alt="" class="img">

                    </div>


                    <div id="Eye Care" class="tabcontent">
                        <h3>Eye Care</h3>
                        <p>But there are other eye problems with liver disease. Dry, itchy eyes and
                            xanthelasma—small collections of fat on the eyelids—can occur with
                            cirrhosis.
                            And congenital liver disorders can affect just about any part of the eye,
                            including the cornea and lens.</p>
                        <img src="images/departments-5.jpg" alt="" class="img">
                    </div>



                    <script>
                        function openPage(pageName, elmnt, color) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }


                            tablinks = document.getElementsByClassName("tablink");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].style.backgroundColor = "";
                            }
                            document.getElementById(pageName).style.display = "block";
                            elmnt.style.backgroundColor = color;
                        }

                        document.getElementById("defaultOpen").click();
                    </script>
                </section>
            </div>
            <!-- ********** -->


    </section>

    <!-- End Departments Section -->

    <!-- doctor section start-->
    <div class="doctor-sec" id="doctor">
        <div class="title-doctor">
            <h2>Doctors</h2>

            <p> We have a wonderful management with us our team doctors.</p>
        </div>



        <!-- ======= Doctors Section ======= -->

        <section class="section7">

            <!-- <div class="part7"> -->
            <div class="sec7">

                <div class="pic"><img src="images/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Dr.Jhon</h4>
                    <span>Nerologist</span>
                    <p>10 years experience</p>
                    <div class="social">
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

            </div>

            <!-- <div class="part7"> -->
            <div class="sec7">

                <div class="pic"><img src="images/doctors-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Dr.Sarah</h4>
                    <span>Anesthesiologist</span>
                    <p>Best doctor</p>
                    <div class="social">
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

            </div>

            <!-- <div class="part7"> -->
            <div class="sec7">

                <div class="pic"><img src="images/doctors-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Dr.sandeep</h4>
                    <span>Cardiology</span>
                    <p>Best experienced doctor</p>
                    <div class="social">
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

            </div>


            <!-- <div class="part7"> -->
            <div class="sec7">

                <div class="pic"><img src="images/doctors-4.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Dr.Hema</h4>
                    <span>Neurosurgeon</span>
                    <p>Expedienced doctor</p>
                    <div class="social">
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

            </div>

            <!-- </div> -->
    </div>
    </section>
    <!-- </div> -->


    <!-- doctor section end -->


    <!-- ======= Footer ======= -->
    <section>
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="footer-contact">
                            <b>
                                <h3><span class="text-pri">Visudh</span><span class="text-dan">Ajivam</span>
                                </h3>
                            </b>
                            <p>
                                Surya nagar road no-3 Bijulia talab road ward no -8 <br>
                                Ramgarh canttRamgarh Jharkhand 829122 <br>
                                India <br><br>
                                <strong>Phone:</strong> +91 xxxxxxxxxx<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>

                        <div class="footer-menu-links">
                            <h4>Search</h4>
                            <ul>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Home</a></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">About us</a></li>
                                <li><i class="fa fa-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Terms of service</a></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>



                        <div class="footer-subscribe">
                            <h4>Join Our Newsletter</h4>
                            <p>Enter your email to get our updates.</p>
                            <form action="" method="post">
                                <input type="email" name="email" placeholder="email" required>
                                <a href="#doctor"> <input type="submit" value="Subscribe"></a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        
 
            <div class="footer2">

                <div class="f2-content">
                    <div class="copyright">
                        &copy; Copyright <strong><span class="text-primary">Visudh</span><span
                                class="text-danger">Ajivam</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="">Sanjay Kumar</a>
                    </div>
                </div>
                <div class="social-link">
                    <a href=""><i class="fa fa-linkedin-square"></i></a>
                    <a href=""><i class="fa fa-twitter-square"></i></a>
                    <a href=""><i class="fa fa-facebook-square"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>



                </div>
            </div>
        </footer>
    </section><!-- End Footer -->




</body>

</html>

