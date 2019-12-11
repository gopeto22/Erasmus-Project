<?php

require "header.php";

?>

<main>
<div class="wrapper-main">
    <section class="secion-default">
        <?php
if(isset($_SESSION['userId'])) {
echo '<p class="login-status">You are logged in</p>';
}
              else{
                  echo '<p class="login-status">You are logged in</p>';
              }  
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>www.BoxerInTheRing</title>
</head>
<body>
    <style>
        body  {
          background-image: url("bb.jpg");
          background-color: #cccccc;
          height: 900px;
          background-size: cover;
                  background-position: center;
                  background-repeat: no-repeat, repeat;
        }
        </style>
    <head>
        <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    li {
      float: left;
    }
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover {
      background-color: #111;
    }
    </style>
    </head>
    <body>
    
    <ul>
      <li><a class="active" href="index.php">Home</a>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    
    <h1>Which weightclass do you prefer?</h1>
    <p style="font-size:5vw; padding : 1px 20px 10px 70px;"></p>
    <style>
   /* The container */
.container {
  display: block;
  position: relative;
  padding-left: 32px;
  margin-bottom: 7px;
  cursor: pointer;
  font-size: 27px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left:0;
  height: 30px;
  width: 28px;
  background-color: rgba(238, 238, 238, 0);
}
.container:hover input ~ .checkmark {
  background-color: #ccc;
}
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.container input:checked ~ .checkmark:after {
  display: block;
}
.container .checkmark:after {
  left: 10px;
  top: 6px;
  width: 6px;
  height: 12px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</label>
<form>
<label class="container">flyweight, 112 pounds (51 kg)
<input type="checkbox">
<button onclick="openDecline()">click here</button>
                <script>
                function openDecline()
                {
                window.open("juty.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty.html";
                }
                </script>
<span class="checkmark"></span">
</label></form>

<label class="container">super flyweight, 115 pounds (52 kg)
<input type="checkbox">
<button onclick="openDeclin()">click here</button>
                <script>
                function openDeclin()
                {
                window.open("juty1.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty1.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty1.html";
                }
                </script>
<span class="checkmark"></span>
</label>
<label class="container">bantamweight, 118 pounds (53.5 kg)
<input type="checkbox">
<button onclick="openDecli()">click here</button>
                <script>
                function openDecli()
                {
                window.open("juty2.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty2.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty2.html";
                }
                </script>
<span class="checkmark"></span>
</label>
<label class="container">featherweight, 126 pounds (57 kg)
<input type="checkbox">
<button onclick="openDecline2()">click here</button>
                <script>
                function openDecline2()
                {
                window.open("juty3.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty3.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty3.html";
                }
                </script>
<span class="checkmark"></span>
</label>
<label class="container">lightweight, 135 pounds (61 kg)
<input type="checkbox">
<button onclick="openDecline1()">click here</button>
                <script>
                function openDecline1()
                {
                window.open("juty4.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty4.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty4.html";
                }
                </script>

<span class="checkmark"></span>
</label>
<label class="container">welterweight, 147 pounds (67 kg)
<input type="checkbox">
<button onclick="openDecline3()">click here</button>
                <script>
                function openDecline3()
                {
                window.open("juty5.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty5.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty5.html";
                }
                </script>
  <span class="checkmark"></span>
</label>
  <label class="container">middleweight, 160 pounds (72.5 kg)
    <input type="checkbox">
    <button onclick="openDecline4()">click here</button>
                <script>
                function openDecline4()
                {
                window.open("juty6.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty6.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty6.html";
                }
                </script>
    <span class="checkmark"></span>
  </label>
    <label class="container">super middleweight, 168 pounds (76 kg)
      <input type="checkbox">
      <button onclick="openDecline4()">click here</button>
                <script>
                function openDecline4()
                {
                window.open("juty7.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty7.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty7.html";
                }
                </script>
      <span class="checkmark"></span>
    </label>
      <label class="container">light heavyweight, 175 pounds (79 kg)
        <input type="checkbox">
        <button onclick="openDecline5()">click here</button>
                <script>
                function openDecline5()
                {
                window.open("juty8.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty8.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty8.html";
                }
                </script>
        <span class="checkmark"></span>
      </label>
        <label class="container">cruiserweight, 200 pounds (91 kg)
          <input type="checkbox">
          <button onclick="openDecline6()">click here</button>
                <script>
                function openDecline6()
                {
                window.open("juty9.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty9.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty9.html";
                }
                </script>
          <span class="checkmark"></span>
        </label>
          <label class="container">heavyweight, unlimited
            <input type="checkbox">
            <button onclick="openDecline7()">click here</button>
                <script>
                function openDecline7()
                {
                window.open("juty10.html");
                }
                </script>   
                <br>    
               
                <script type="text/javascript">
                function confirmTerms() {
                if (document.forms[0].checkbox.checked==false { 
                alert("You did not select a box.");
                return false
                }
                if (document.forms[0].checkbox.checked) {
                window.location.href = "juty10.html";
                }
                if (document.forms[0].checkbox.checked=false) {
                window.location.href = "juty10.html";
                }
                </script>
            <span class="checkmark"></span>
          </label>
            </form>
  </form>
</form>
</label>
    </style>
    </form action="/action_page.php">

    








</body>
</html>
    
    <div class="section">
    </section>
            </div>
            </main>  
