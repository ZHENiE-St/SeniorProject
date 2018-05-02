<!DOCTYPE html>
 <html lang="en">
 <head>
 <title>@yield('page_title')</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
 /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
 .container {
 margin: 13px;
 padding-left: 8px;
 }

 .row.content {
 height: 1500px;
 }

 .modal-content{
 	 height: 800px;
 }

 .navbar-header{
 background-color: #E5E5E5;
 width: 81.6%;
 }
 h1{
 text-shadow: 0 0 20px #FFFFFF, 0 0 30px #FFFFFF;
 }

 h6{
 font-size: 18px;
 text-shadow: 0 0 20px #FFFFFF, 0 0 30px #FFFFFF;
 }
 /* Set gray background color and 100% height */
 h2{
 margin-top: 50px;
 background-color: black;
 }

 .sidenav {
 background-color: #f1f1f1;
 width: 300px;
 height: 100%;
 outline-color: #003;
 }
 /* Set black background color, white text and some padding */
 footer {
   background-color: #555;
   color: white;
   padding: 15px;
 }
 /* On small screens, set height to 'auto' for sidenav and grid */
 @media screen and (max-width: 767px) {
   .sidenav {
     height: auto;
     padding: 15px;
   }
   .row.content {height: auto;}
 }
 td, th {
 border: 1px solid #dddddd;
 text-align: left;
 padding: 8px;
 }
 tbody {
     display: table-row-group;
     vertical-align: middle;
     border-color: inherit;
 }
 table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
 </style>
 </head>
 <body>
 <div class="container-fluid">
 <div class="row content">

 <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 sidenav">

     @yield('activeUrl')


 </div>

 <br><br>
 <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
@yield('content')
 <div class="navbar-header">
   <a class="navbar-brand" href="#">WebSiteName</a>
 <ul class="nav navbar-nav">
   <li class="active"><a href="#">Home</a></li>
   <li><a href="#">Page 1</a></li>
   <li><a href="#">Page 2</a></li>
   <li><a href="#">Page 3</a></li>
 </ul>
 </div>
 </div>
 </div>
</div>
 </body>
 <footer class="container-fluid">
 <p> Design by zen</p>
 </footer>
