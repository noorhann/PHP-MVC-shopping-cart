<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
<style>
.sidebar {
height: 100%; 
width: 0; 
position: fixed; 
z-index: 1; 
top: 0;
left: 0;
background-color: #343a40; 
overflow-x: hidden; 
padding-top: 60px; 
transition: 0.5s; 
}

.sidebar a {
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 25px;
color: #f1f1f1;
display: block;
transition: 0.3s;
}

.sidebar a:hover {
  color:  #f1f1f1;
}

.sidebar .closebtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}

.openbtn {
font-size: 20px;
cursor: pointer;
background-color: #343a40;
color: white;
padding: 10px 15px;
border: none;
}

.openbtn:hover {
background-color: #343a40;
}

#main {
transition: margin-left .5s; 
padding: 20px;
}

@media screen and (max-height: 450px) {
.sidebar {padding-top: 15px;}
.sidebar a {font-size: 18px;}
}
    </style>
</head>
<body>
<div id="main">
<button class="openbtn" onclick="openNav()">&#9776; </button>
</div>
<div class="sidebar" id="mySidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="active" href="<?php echo URLROOT; ?>admin/details">Products Details</a>
    <a href="<?php echo URLROOT; ?>admin/orders">Orders Details</a>

</div> 
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
} 
</script> 
</body>
</html>
