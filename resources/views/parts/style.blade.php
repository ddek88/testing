<style amp-custom>
@isset($custom)
{{$custom->custom}}
@endisset
@media (min-width: 992px){
.col-lg-3, .row-cols-lg-4>* {
   flex: 0 0 auto;
   width: 25%;
}
.containers {
   max-width: 960px;
   margin: auto;
}
.headers{
   background-position: center center;
   padding: 175px 0 70px;
}
.right{
   display: block;
}
.left{
   padding-right: 1.5rem;
   margin-top: -18px;
}
article{
   width: 80%;
   margin: auto;
}
.row{
   display: flex;
   justify-content: center;
}
.nav-mobile{
   display: none;
}
.nav-bottom-mobile{
   display: none;
}
#left-side-menu{
   display: none;
}
.lc-button{
   display: none;
}
}
@media (min-width: 579px) and (max-width:991px){
.col-lg-3, .row-cols-lg-4>* {
   flex: 0 0 auto;
   width: 25%;
}
.containers {
   max-width: 960px;
   margin: auto;
}
.headers{
   background-position: center center;
   padding: 175px 0 70px;
}
.right{
   display: block;
}
.left{
   padding-right: 1.5rem;
   margin-top: -18px;
}
article{
   width: 80%;
   margin: auto;
}
.row{
   display: flex;
   justify-content: center;
}
.nav-mobile{
   display: none;
}
.nav-bottom-mobile{
   display: none;
}
#left-side-menu{
   display: none;
}
.lc-button{
   display: none;
}
a.logo {
display: none;
}
.right {
display: none;
}
.main-text {
padding: 0px 15px;
}
}
@media (max-width: 576px){
.right{
   display: none;
}
.left{
   text-align: center;
}
.headers{
   padding: 80px 0 170px;
}
button.button-72{
   justify-content: center;
   margin: auto;
   width: 75%;
}
.section-heading h1{
   text-align: center;
}
article {
   width: 95%;
   margin: auto;
}
article ol {
padding: 0;
}
article ul {
padding: 0;
}
.containers {
padding-left: 10px;
}
header{
   display: none;
}
.menu amp-img{
width: 50px;
height: 50px;
border-top-left-radius: 20px;
border-bottom-left-radius: 20px;
}
.nav-mobile {
background-color: {{$styleheader->background}};
width: 95%;
border-radius: 20px;
margin-top: -75px;
position: fixed;
left: 10px;
z-index: 10;
}
.logs amp-img{
width: 170px;
height: 40px;
margin: auto;
}
.nav-v {
display: flex;
align-items: center;
}
.mobile-logo {
width: 80%;
}
a.house amp-img{
width: 40px;
height: 40px;
}
a.daftar amp-img{
width: 40px;
height: 40px;
}
a.login amp-img{
width: 40px;
height: 40px;
}
a.promo amp-img{
width: 40px;
height: 40px;
}
.nav-bottom-mobile {
display: flex;
justify-content: center;
position: fixed;
z-index: 10;
top: 40rem;
left: 9px;
width: 95%;
padding: 10px 0px;
border-radius: 20px;
background-color: {{$stylemobile->background}};
font-family: 'Poppins', sans-serif;
}
.nav-bottom-c {
margin-right: 15px;
margin-left: 20px;
}
.nav-bottom-c a span {
font-size: 14px;
font-weight: 600;
color: {{$stylemobile->font}};
}
.lc-button amp-img{
width: 70px;
height: 80px;
}
.lc-button {
position: fixed;
left: 18rem;
top: 35rem;
z-index: 10;
}
#left-side-menu {
width: 80%;
padding: 20px;
background-color: {{$stylesidebar->background}};
text-align: left;
height: 100vh;
font-family: 'Poppins', sans-serif;
color: #fff;
}
ul.mt-2 {
list-style: none;
padding-left: 0;

}
.mt-2 .side-menu-item {
padding-top: 5px;
padding-bottom: 5px;
margin-bottom: 5px;
text-align: center;
}



amp-sidebar#left-side-menu ul li a {
color: {{$stylesidebar->font}};
font-size: 12pt;
font-weight: 400;
text-decoration: none;
}
amp-sidebar#left-side-menu ul li.bord {
margin-bottom: 10px;
}
amp-sidebar#left-side-menu ul li.bord::before {
display: block;
height: 2px;
background-color: {{$stylesidebar->border}};
content: " ";
width: 90%;
border-radius: 40%;
}
}

h1 {
 color: rgb(35, 35, 233);
}
.headers{
   @if(isset($posts->background))
   background-image: url({{url('/')}}/{{$posts->background}});
   @else
   background-image: url({{url('/')}}/{{$stylebackground->background}});
   @endif
   background-repeat: no-repeat;
   background-size: cover;
   position: relative;
   overflow: hidden;
}


.left h6{
   font-size: 20px;
   font-weight: 700;
   color: #9a0f06;
   margin-bottom: 15px;
   text-transform: uppercase;
   font-family: 'Poppins', sans-serif;
}
.left h2{
   z-index: 2;
   position: relative;
   font-weight: 700;
   font-size: 50px;
   color: #2a2a2a;
   margin-bottom: 20px;
   line-height: 1.1;
   font-family: 'Poppins', sans-serif;
}
.left p {
   margin-bottom: 30px;
   color: #9a0f06;
   font-family: 'Poppins', sans-serif;
}

.right{
   padding-left: 3rem;
   
}
.button-72 {
align-items: center;
background-color: initial;
background-image: linear-gradient(rgba(250,210,210,.84),#fff 50%);
border-radius: 42px;
box-shadow: #9a10064b 0 2px 2px, #9a100675 0 8px 12px;
cursor: pointer;
display: flex;
font-size: 18px;
font-weight: 700;
letter-spacing: .04em;
padding: 18px;
color: #9a0f06;
text-align: center;
border: 2px solid #9a1006;
text-shadow: #9a100665 0 0 4px, #9a100636 0 0 2px, #9a10065b 1px 1px 1px, #9a10063d 4px 4px 5px;
}
.button-wraper a{
text-decoration: none;
}
.button-72:hover {
background-image: linear-gradient(#c98484,#9a0f06 50%);
color: #fff;
border: 2px solid #fff;
}
.section-heading h1{
color: #2a2a2a;
font-size: 35px;
font-weight: 700;
text-transform: capitalize;
margin-bottom: 25px;
}
.main-text{
margin-top: 50px;
font-family: 'Poppins', sans-serif;
}
.section-heading h1 em{
font-style: normal;
color: #9a0f06;
}
.rows{
display: flex;
flex-direction: column;
align-items: center;
}
.line-dec {
width: 50px;
height: 2px;
background-color: #9a0f06;
}
.section-content article table{
display: table;
border-collapse: collapse;
box-sizing: border-box;
text-indent: initial;
border-spacing: 2px;
border-color: grey;
margin: auto;
margin-bottom: 40px;
}
.section-content article table tbody tr th{
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #9a100627;
color: #2a2a2a;
border: 1px solid #ddd;
color: #6d6d6d;
font-size: 15px;
padding: 12px;
}
.section-content article table tbody tr td{
border: 1px solid #ddd;
color: #6d6d6d;
font-size: 15px;
padding: 8px;
}
.section-content article table tbody tr:nth-child(2){
background-color: #f2f2f2;
}
.section-content article table tbody tr:nth-child(4){
background-color: #f2f2f2;
}
.section-content article table tbody tr:hover{
background-color: #ddd;
}
.section-content{
margin-top: 30px;
}

article h2{
color: #2a2a2a;
text-transform: capitalize;
margin-top: 15px;
margin-bottom: 15px;
font-weight: 600;
}
article h2 em{
font-style: normal;
color: #9a0f06;
font-weight: 600;
}
p{
font-size: 15px;
line-height: 30px;
font-weight: 300;
color: #6d6d6d;
}
a{
text-decoration: none;
}
article p a:hover{
color: #e93c3c;
font-style: italic;
}
article p a:visited {
color: #9a0f06;
}
article ol li a:hover{
color: #e93c3c;
font-style: italic;
}
article ol li a:visited {
color: #9a0f06;
}
article ol, li, ul {
color: #6d6d6d;
font-size: 15px;
margin-left: 10px;
line-height: 30px;
margin-top: 10px;
font-weight: 300;
}
.border-top::before {
height: 3px;
background-color: #9a0f06;
content: " ";
width: 80%;
border-radius: 50%;
display: block;
margin: auto;
}
footer{
margin-top: 80px;
}

.footer-item{
margin-bottom: 20px;
}
.footer-item h4, .footer-item h5 {
margin-bottom: 20px;
font-weight: 500;
color: {{$stylefooter->font}};
font-family: 'Poppins', sans-serif;
}
.footer-top {
background-color: {{$stylefooter->background}};
color: #fff;
padding-top: 40px;
padding-bottom: 20px;
}
.footer-item>p {
color: {{$stylefooter->font}};
font-size: 13px;
line-height: 30px;
font-weight: 300;
font-family: 'Poppins', sans-serif;
}
ul.footer-tag {
margin-left: 0;
color: #6d6d6d;
font-size: 15px;
line-height: 30px;
margin-top: 10px;
text-decoration: none;
list-style: none;
padding: 0;
}
.footer-tag a {

border-radius: 6px;
color: {{$stylefooter->font}};
display: inline-block;
font-size: 13px;
padding: 0 12px;
font-family: 'Poppins', sans-serif;
font-weight: 300;

}
.footer-tag>li {
display: inline-block;
margin-left: 0;
margin-top: 3px;
color: {{$stylefooter->font}};
font-size: 15px;
line-height: 30px;
}
.footer-tag a:hover{
font-style: italic;
}
.footer-links a {

display: block;
margin-bottom: 5px;
padding-bottom: 5px;
color: {{$stylefooter->font}};
font-size: 13px;
font-family: 'Poppins', sans-serif;
}
.footer-links {
list-style: none;
padding: 0;
}
header{
background-color: {{$styleheader->background}};
height: 78px;
}
.containerr{
display: flex;
justify-content: space-between;
align-items: flex-end;
width: 80%;
margin: auto;
height: 90px;
}
ul.nav li {
margin-right: 40px;
}

ul.nav {
display: flex;
justify-content: flex-start;
padding: 0;
list-style: none;
}
.nav li a{
display: block;
font-weight: 500;
font-size: 15px;
color: {{$styleheader->font}};
text-transform: capitalize;
transition: .3s;
height: 40px;
line-height: 40px;
border: transparent;
letter-spacing: 1px;
font-family: 'Poppins', sans-serif;
}
.nav li a:hover{
/* color: #ffe240; */
color: {{$styleheader->hover}};
font-style: italic;
}
.button-69 {
border: 2px solid #fff;
border-radius: 56px;
color: #fff;
display: inline-block;
font-size: 15px;
padding: 0 20px;
}
.button-69:hover {
transform: scale(1.05);
}

.button-69, .button-69:hover {
box-shadow: rgb(255 255 255 / 20%) 0 3px 15px inset, rgb(0 0 0 / 10%) 0 3px 5px, rgb(0 0 0 / 10%) 0 10px 13px;
}
.logo amp-img{
width: 260px;
height: 90px;
}
.right amp-img{
width: 500px;
}
#left-side-menu {
width: 80%;
padding: 20px;
background-color: {{$stylesidebar->background}};
text-align: left;
height: 100vh;
font-family: 'Poppins', sans-serif;
color: #fff;
}
ul.mt-2 {
list-style: none;
padding-left: 0;

}
.mt-2 .side-menu-item {
padding-top: 5px;
padding-bottom: 5px;
margin-bottom: 5px;
text-align: center;
}



amp-sidebar#left-side-menu ul li a {
color: {{$stylesidebar->font}};
font-size: 12pt;
font-weight: 400;
text-decoration: none;
}
amp-sidebar#left-side-menu ul li.bord {
margin-bottom: 10px;
}
amp-sidebar#left-side-menu ul li.bord::before {
display: block;
height: 2px;
/* background-color: #9a0f06; */
background-color: {{$stylesidebar->border}};
content: " ";
width: 90%;
border-radius: 40%;
}

</style>
