<?php
   header("Content-type: text/css; charset: UTF-8");
   include('variables.php'); 
   include('functions.php'); 
   $db = dbconnect();

   // retenir l'email de la personne connectée pendant 1 an
   setcookie(
       'LOGGED_USER',
       'utilisateur@exemple.com',
       [
           'expires' => time() + 365*24*3600,
           'secure' => true,
           'httponly' => true,
       ]
   );
   $menclothes = findMenClothes($db);
?>

/* Global */

html body{
    font-family: 'Poppins', sans-serif;
}

::placeholder {
    font-style: italic;
}

.carousel-text{
    display:flex;
    justify-content: space-between;
    padding: 1rem 0;
}

::-moz-selection { /* Code for Firefox */
    color: white;
    background: black;
}
::selection {
    color: white;
    background: black;
}
header {
    margin-top: 0px;
}

.first-carousel-image1:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.first-carousel-image2:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.first-carousel-image3:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.second-carousel-image1:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.second-carousel-image2:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.second-carousel-image3:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.third-carousel-image1:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.third-carousel-image2:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.third-carousel-image3:hover .carousel-hover{
    opacity: 1;
    transform: translateY(0);
}

.carousel-hover {
    display:flex;
    justify-content: center;
    align-items: flex-end;
    opacity: 0;
    transform: translateY(82px);
    transition: 0.5s;
}

.carousel-hover div div{
    padding: 1rem 1rem;
    font-size: 12px;
    background-color: white;
    color: black;
}

.carousel-hover .carousel-link {
    margin: 1rem 0.8rem;
    font-size: 12px;
    background-color: white;
}

.carousel-hover .carousel-link a {
    text-decoration: none;
}

/* Header */

#navbar {
    display: flex;
    justify-content: center;
    width: 100%;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
    overflow: hidden;
}

.navbarOffsetMargin {
    padding-top: 102px;
}

#navbar.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: white;
    z-index: 150;
    transition: 0.5s;
    border-bottom-style: hidden;
    box-shadow: 0px 5px 35px -25px rgb(136, 136, 136);
}


nav .col-7 {
    display:flex;
    text-align: end;
    align-items: center;
}

nav .col-7 .logo {
    padding: 1.5rem 0 1rem 0;
}

nav .menu {
    width: 100%;
    text-align: right;
}

nav ul {
    display:flex;
    justify-content: flex-end; 
    margin:0;
    padding:0;
}

nav ul li {
    display: inline;
}

nav ul li a {
    text-align: center;
    text-decoration: none;
    color: black;
    transition-property: all;
    transition-duration: 0.5s;
    padding: 0 1rem;
    margin: 0;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 1px;
}   

nav ul li a:hover {
    transition-property: all;
    transition-duration: 0.3s;
    color: grey;
}  

nav ul li:first-child a{
    color: grey;
}

/* First section */

.first-section{
    display: flex;
    height: 47.5vw;
    max-height: 900px;
    margin-top: 3.5rem;
    max-width: 100%;
    padding: 0 1rem;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.first-section .col-6 {
    padding-right: 2rem;
    margin-bottom: 3.5rem;
}

.first-section .left-banner {
    background-image: url("img/left-banner.jpg");
    background-size: cover;
    background-origin: padding-box;
    height: 100%;
    width: 100%;
    background-repeat:   no-repeat;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.first-section .left-banner .left-ban-content {
    padding-left: 5rem;
}

.first-section .left-banner div h2 {
    color: white;
    font-size: 52px;
    font-weight: 700;
}

.first-section .left-banner div p {
    font-size: 16px;
    font-weight: 400;
    color: white;
    font-style: italic;
    padding: 1rem 0;
}

.btn-purchase {
    padding: 0.85rem 1.6rem;
    transition-property: all;
    transition-duration: 0.5s;
    width: fit-content;
    border-color: white; 
    border-style: solid;
    color: white;
    border-width: 1px;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
}

.btn-purchase:hover {
    transition-property: all;
    transition-duration: 0.5s;
    background-color: white;
    color: black;
    cursor: pointer;
}

.btn-discover-more {
    padding: 0.85rem 1.6rem;
    transition-property: all;
    transition-duration: 0.5s;
    width: fit-content;
    border-color: white; 
    border-style: solid;
    color: white;
    border-width: 1px;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    height:auto;
}

.btn-discover-more:hover {
    transition-property: all;
    transition-duration: 0.5s;
    background-color: white;
    color: black;
    cursor: pointer;
    height:auto;
}


.first-section .col-3{
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 3.5rem;
}

.first-section .col-left {
    padding-right: 1rem;
}
.first-section .col-right {
    padding-left: 1rem;
}

/* content of two col-3 */

.first-section .col-left h3 {
    font-size: 23px;
    font-weight: 700;
    color: white;
}

.first-section .col-right h3 {
    font-size: 23px;
    font-weight: 700;
    color: white;
}

.first-section .col-left p {
    font-size: 16px;
    font-weight: 400;
    color: white;
    font-style: italic;
    padding: 0.5rem 0;
}

.first-section .col-right p {
    font-size: 16px;
    font-weight: 400;
    color: white;
    font-style: italic;
    padding: 0.5rem 0;
}

.first-section .col-3 .baner-right-01 {
    background-image: url("img/baner-right-01.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    margin-bottom: 2rem;
    
}

.first-section .col-3 .baner-right-02 {
    background-image: url("img/baner-right-02.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
}
.first-section .col-3 .baner-right-03 {
    background-image: url("img/baner-right-03.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    margin-bottom: 2rem;
}
.first-section .col-3 .baner-right-04 {
    background-image: url("img/baner-right-04.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
}

.first-section .col-3 .baner-right-01 .inner-banner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.first-section .col-3 .baner-right-02 .inner-banner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.first-section .col-3 .baner-right-03 .inner-banner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.first-section .col-3 .baner-right-04 .inner-banner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.hover-container {
    position: absolute;
    width: 100%;
    padding: 1rem;
    height:100%;
}

.hover-image {
    opacity: 0;
    transition-property: all;
    transition-duration: 0.5s;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    text-align: center;
}
.hover-image:hover {
    background-color: rgba(42,42,42,.97);
    opacity: 0.97;
    transition-property: all;
    transition-duration: 0.4s;
}

/* Second Section ---------------------------------------------------------------------------------------------------------*/

.second-section {
    display: flex;
    justify-content: center;
    padding-bottom: 3rem; 
    margin-bottom: 3rem;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.second-section .col-7 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* First Carousel */

.first-carousel-title {
    margin-top: 5rem;
    padding-left: 2rem;
    position: relative;
    transform: translateX(-340px);
}

.first-carousel-title h3 {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 0;
}

.first-carousel-title p {
    font-style: italic;
    color: rgb(168, 167, 167);
    font-weight: 400;
    font-size: 14px;
    margin-bottom: 2.5rem;
}

.carousel-inner {
    padding-top:0 !important;
    height:100%;
}

.carousel-item {
    height:100%;
}

.justify-content-center{
    position: absolute;
    width: 100%;
    bottom: 45%;
    justify-content:space-between !important;
}

.carousel-control-prev {
    left: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.carousel-control-prev div, .carousel-control-next div {
    height: 44px;
    border-style: solid;
    border-color: black;
    border-width: 1px;
    color: #5f5f5f;
    padding: 1rem;
    display: flex;
    align-items: center;
}

.carousel-control-next {
    right: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.second-section .d-flex {
    padding: 1rem;
    height:100%;
}

.second-section .d-flex .col-4 {
    padding: 0 1rem;
    width: auto;
}

.second-section .d-flex .col-4 div div{
    display:flex;
}

.second-section .d-flex .col-4 div div div p:first-child{
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 0.5rem;
    padding-top: 0;
}

.second-section .d-flex .col-4 div div div{
    display: flex;
    flex-direction: column;
}

.second-section .d-flex .col-4 div div div p:last-child{
    font-size: 18px;
    font-weight: 500;
    color: rgb(184, 184, 184);
    padding-top: 0rem;
}

.second-section .d-flex .col-4 div div p{
    font-size: 11px;
    padding-top: 1.5rem;
}

.first-carousel-image1 {
    background-image: url('<?php echo $menclothes[0]['image'];?>'); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.first-carousel-image2 {
    background-image: url('<?php echo $menclothes[1]['image'];?>'); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.first-carousel-image3 {
    background-image: url('<?php echo $menclothes[2]['image'];?>'); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}


/* Third Section ---------------------------------------------------------------------------------------------------------*/

.third-section {
    display: flex;
    justify-content: center;
    padding-bottom: 3rem; 
    margin-bottom: 3rem;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.third-section .col-7 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* Second carousel */ 

.second-carousel-title {
    margin-top: 5rem;
    padding-left: 2rem;
    position: relative;
    transform: translateX(-340px);
}

.second-carousel-title h3 {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 0;
}

.second-carousel-title p {
    font-style: italic;
    color: rgb(168, 167, 167);
    font-weight: 400;
    font-size: 14px;
    margin-bottom: 2.5rem;
}

.second-carousel .carousel-control-prev {
    left: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.second-carousel .carousel-control-prev div, .carousel-control-next div {
    height: 44px;
    border-style: solid;
    border-color: black;
    border-width: 1px;
    color: #5f5f5f;
    padding: 1rem;
    display: flex;
    align-items: center;
}

.second-carousel .carousel-control-next {
    right: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.third-section .d-flex {
    padding: 1rem;
    height:100%;
}

.third-section .d-flex .col-4 {
    padding: 0 1rem;
    width: auto;
}

.third-section .d-flex .col-4 div div{
    display:flex;
}

.third-section .d-flex .col-4 div div div p:first-child{
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 0.5rem;
    padding-top: 0;
}

.third-section .d-flex .col-4 div div div{
    display: flex;
    flex-direction: column;
}

.third-section .d-flex .col-4 div div div p:last-child{
    font-size: 18px;
    font-weight: 500;
    color: rgb(184, 184, 184);
    padding-top: 0rem;
}

.third-section .d-flex .col-4 div div p{
    font-size: 11px;
    padding-top: 1.5rem;
}

.second-carousel-image1 {
    background-image: url('img/women-01.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.second-carousel-image2 {
    background-image: url('img/women-02.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.second-carousel-image3 {
    background-image: url('img/women-03.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

/* Fourth Section */

.fourth-section {
    display: flex;
    justify-content: center;
    padding-bottom: 3rem; 
    margin-bottom: 3rem;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.fourth-section .col-7 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* third carousel */ 

.third-carousel-title {
    margin-top: 5rem;
    padding-left: 2rem;
    position: relative;
    transform: translateX(-340px);
}

.third-carousel-title h3 {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 0;
}

.third-carousel-title p {
    font-style: italic;
    color: rgb(168, 167, 167);
    font-weight: 400;
    font-size: 14px;
    margin-bottom: 2.5rem;
}

.third-carousel .carousel-control-prev {
    left: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.third-carousel .carousel-control-prev div, .carousel-control-next div {
    height: 44px;
    border-style: solid;
    border-color: black;
    border-width: 1px;
    color: #5f5f5f;
    padding: 1rem;
    display: flex;
    align-items: center;
}

.third-carousel .carousel-control-next {
    right: -10%;
    padding: 0.85rem 0.85rem;
    width: fit-content;
    bottom: 25%;
}

.fourth-section .d-flex {
    padding: 1rem;
    height:100%;
}

.fourth-section .d-flex .col-4 {
    padding: 0 1rem;
    width: auto;
}

.fourth-section .d-flex .col-4 div div{
    display:flex;
}

.fourth-section .d-flex .col-4 div div div p:first-child{
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 0.5rem;
    padding-top: 0;
}

.fourth-section .d-flex .col-4 div div div{
    display: flex;
    flex-direction: column;
}

.fourth-section .d-flex .col-4 div div div p:last-child{
    font-size: 18px;
    font-weight: 500;
    color: rgb(184, 184, 184);
    padding-top: 0rem;
}

.fourth-section .d-flex .col-4 div div p{
    font-size: 11px;
    padding-top: 1.5rem;
}

.third-carousel-image1 {
    background-image: url('img/kid-01.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.third-carousel-image2 {
    background-image: url('img/kid-02.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

.third-carousel-image3 {
    background-image: url('img/kid-03.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    padding-bottom: 1rem;
    display: flex;
    justify-content: center;
    overflow: hidden;
    height: 390px;
    width: 370px;
}

/* Fifth section --------------------------------------------------------------------------------------------------------*/

.fifth-section {
    display: flex;
    justify-content: center;
    padding-bottom: 3rem;
    margin-bottom: 3rem;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.fifth-section .col-7 {
    display: flex;
    justify-content: center;
    padding: 2rem 0;
}

.fifth-section .col-7 .left-ban-content {
    padding-right: 3rem;
}

.fifth-section .col-7 .left-ban-content h2 {
    font-size: 34px;
    font-weight: 700;
    color: black;
    padding-bottom: 1rem;
}

.fifth-section .col-7 .left-ban-content p:nth-child(3) {
    color: black;
    font-style: italic;
}

.fifth-section .col-7 .left-ban-content p {
    font-size: 14px;
    color: #aaaaaa;
    padding-bottom: 1rem;
    font-weight: 500;
    line-height: 1.5rem;
}

.fifth-section-content {
    display: flex;
    justify-content: center;
}

.btn-discover-more2 {
    padding: 0.85rem 1.6rem;
    transition-property: all;
    transition-duration: 0.5s;
    width: fit-content;
    border-color: black; 
    border-style: solid;
    color: black;
    border-width: 1px;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    height:auto;
}

.btn-discover-more2:hover {
    transition-property: all;
    transition-duration: 0.5s;
    background-color: black;
    color: white;
    cursor: pointer;
    height:auto;
}

.fifth-section .col-7 div:last-child .grid1 {
    display: grid;
    grid-template-columns: 255px 255px;
    grid-template-rows: 255px 255px;
    grid-gap: 30px;
}

.fifth-section .col-7 div .inner-banner {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.fifth-section .col-7 div .inner-banner h3 {
    font-size: 24;
    font-weight: 700;
}

.fifth-section .col-7 div .inner-banner p {
    font-size: 14;
    font-style: italic;
    color: #aaa;
}

.fifth-section .col-7 div .baner-right-01{
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
}    

.fifth-section .col-7 div .baner-right-02{
    background-image: url("img/explore-image-01.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.fifth-section .col-7 div .baner-right-03{
    background-image: url("img/explore-image-02.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    background-origin: padding-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.fifth-section .col-7 div .baner-right-04{
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
}


/* Sixth section ------------------------------------------------------------------------------------------------------ */

.sixth-section {
    padding-top: 3rem;
    padding-bottom: 6rem;
    margin: 3rem 0;
    display: flex;
    justify-content: center;
    border-bottom: 1.6px dotted #eee;
    border-width: 3px;
}

.sixth-section .col-7 .aaa {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 5rem;
}

.sixth-section .col-7 .sixth-section-text {
    padding-bottom: 3rem;
    transform: translateX(-295px);
}

.sixth-section .col-7 .sixth-section-text h2{
    font-size: 34px;
    font-weight: 700;
}

.sixth-section .col-7 .sixth-section-text p{
    font-size: 14px;
    font-style: italic;
    color: #aaa;
}

.sixth-section .col-7 div:last-child {
    display: flex;
    justify-content: center;
}
.sixth-section .list-image1 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-01.jpg);
}
.sixth-section .list-image2 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-02.jpg);
}
.sixth-section .list-image3 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-03.jpg);
}
.sixth-section .list-image4 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-04.jpg);
}
.sixth-section .list-image5 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-05.jpg);
}
.sixth-section .list-image6 {
    height: 185px;
    width: 185px;
    background-image: url(img/instagram-06.jpg);
}

/* Seventh section ------------------------------------------------------------------------------------------------------ */

.seventh-section{
    padding-top: 3rem;
    padding-bottom: 3rem;
    margin: 3rem 0;
    display: flex;
    justify-content: center;
}

.seventh-section .col-7 {
    display: flex;
    justify-content: center;
}

.seventh-section .section-content {
    display: flex;
    justify-content: center;
}

.seventh-section .section-content .section-form{
    margin-top: 2rem;
}

.seventh-section .section-content .section-form form{
    display: flex;
}

.seventh-section .section-content .section-form p{
    margin: unset;
    margin-right: 2rem;
    line-height: 38px;
}


.seventh-section .section-content .section-form p input{
    padding: 0 1rem;

}

.seventh-section .section-content .section-form form .btn-send{
    height: 44px;
    width: 44px;
    transition-property: all;
    transition-duration: 0.5s;
    background-color: white;
    border-color: rgb(0, 0, 0); 
    border-style: solid;
    color: rgb(0, 0, 0);
    border-width: 1px;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 3rem;
}    

    .seventh-section .section-content .section-form form .btn-send:hover {
    height: 44px;
    width: 44px;
    transition-property: all;
    transition-duration: 0.5s;
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    cursor: pointer;
}

.seventh-section .section-content .section-text h2{
    font-size: 34px;
    font-weight: 700;
    line-height: 3.5rem;
    margin-bottom: 0;
}

.seventh-section .section-content .section-text p{
    font-size: 14px;
    font-weight: 400;
    font-style: italic;
    color: #aaa;
}

.seventh-section .section-content .col-4 .section-contact .grid {
    display: grid;
    grid-template-columns: 160px 160px;
    grid-gap: 30px;
}

.seventh-section .section-content .col-4 .section-contact .grid h3 {
    font-size: 16px;
    font-weight: 700;
}

.seventh-section .section-content .col-4 .section-contact .grid p {
    font-size: 14px;
    font-weight: 400;
    color: #aaa;
}

/* Footer --------------------------------------------------------------------------------------------------------*/

footer {
    background-color: #2a2a2a;
    display: flex;
    justify-content: center;
}

footer .col-7 div{
    display: flex;
    justify-content: center;
}

footer .col-7 div div:first-child{
    margin-top: 2rem;
    margin-bottom: 1.7rem;
}

footer .col-7 div .footer-content{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 0 2rem;
    margin: 4rem 0; 
}

footer .col-7 div .footer-content .logo{
    padding: 0;
    background-image: url(img/white-logo.png);
    background-repeat: no-repeat;
    margin-top: 2rem;
    height: auto;
}

footer .col-7 div .footer-content h4 {
    color: white;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
}

footer .col-7 div .footer-content a {
    color: white;
    font-size: 14px;
    text-decoration: none;
    margin: 0.5rem 0;
}

footer .col-7 .footer-bottom {
    border-top: 1px solid rgb(117, 117, 117);
}

footer .col-7 .footer-bottom div{
    display: flex;
    flex-direction: column;
    color:  white;
    font-size: 14px;
    font-weight: 300;
}

footer .col-7 .footer-bottom div span a{
    text-decoration: none;
    color:  white;
}

footer .col-7 .footer-bottom div ul li a{
    text-decoration: none;
    color:  white;
    font-size: 22px;
}

footer .col-7 .footer-bottom div span{
    display: flex;
    justify-content: center;
    text-decoration: none;
}

footer .col-7 .footer-bottom div ul{
    display: flex;
    justify-content: center;
    margin: 1rem 0;
}

footer .col-7 .footer-bottom div ul li{
    display: inline;
    height: 40px;
    width: 40px;
    color:  white;
}



/* Login -----------------------------------------------------------------------------------*/

section .login-section {
    display: flex;
    justify-content: center;
    color: red;
}

.login-section .login-section{
    display: flex;
    justify-content: center;

}