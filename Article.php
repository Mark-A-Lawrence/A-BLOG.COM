
<html>
<head>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,700&display=swap');

@font-face {
    font-family: 'olde_englishregular';
    src: url('font/oldeenglish-webfont.woff2') format('woff2'),
         url('font/oldeenglish-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
body {
  font-family: Libre Caslon Text;
  background-color: #fff;
}

.body-text {
  padding-top: 7vh;
  text-align: center;
  position: relative;
  
}

.hamburger-icon {
  position: absolute;
  z-index: 1;
  top: 5vh;
  left: 5vw;
  padding-bottom: 2vh;
}

.hamburger-icon span {
  height: 5px;
  width: 40px;
  background-color: black;
  display: block;
  margin: 5px 0px 5px 0px;
  transition: 0.7s ease-in-out;
  transform: none;
}

#openmenu:checked ~ .menu-pane {
  left: -5vw;
  transform: translateX(-5vw);
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(2) {
  transform: translate(0%, 175%) rotate(-45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(3) {
  transform: rotate(45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(1) {
  opacity: 0;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(4) {
  opacity: 0;
}

div.menu-pane {
  background-color: #000;
  position: fixed;
  transform: translateX(-105vw);
  transform-origin: (0, 0);
  width: 100vw;
  height: 100vh;
  top:0;
  transition: 0.6s ease-in-out;
}

.menu-pane p {
  color: black;
  font-size: 0.6em;
}

.menu-pane nav {
  padding: 10%;
}

.menu-links li, a, span {
      transition: 0.5s ease-in-out;
}

.menu-pane ul {
  padding: 10%;
  display: inline-block;
}

.menu-pane li {
  padding-top: px;
  padding-bottom: 20px;
  margin-left: 10px;
    font-size: 1em;
}


.menu-pane li:first-child {
  font-size: 1.3em;
  margin-left: -10px;
}


.menu-links li a {
  color: white;
  text-decoration: none;
}


.menu-links li:hover a {
  color: #FFAB91;
}

.menu-links li:first-child:hover a {
  color: black;  
  background-color: #FFAB91;
}

#QC-info {
  background-color: #FFAB91;
    border: 2px solid;
  border-color: #FFAB91;
display: block;
  opacity: 0;
  
}

.menu-links li:first-child:hover #QC-info {
opacity: 1;
}

.menu-links li:first-child:hover #DC-info {
opacity: 1;
}

#DC-info {
  background-color: #FFAB91;
    border: 2px solid;
  border-color: #FFAB91;
display: block;
  opacity: 0;
}


.menu-links li:first-child a {
  padding: 5px;
}



input.hamburger-checkbox {
  position: absolute;
  z-index: 3;
  top: 5vh;
  left: 5vw;
  width: 10vw;
  opacity: 0;
  height: 6vh;
}

.logo{
    text-align: center;
    float:left;
    width:50%;
    height: 100%;
}

.menu-links{
     width: 30%;
    float: left;
    height: 100%;

}

#logo_img{
    border: #fff 2px solid;
    width: 10vw;
    height: 10vw;
    border-radius: 100%; 
}
  
  
  
  </style>
</head>

<body>

<div class="menu-container">
  
                <input type="checkbox" id="openmenu" class="hamburger-checkbox">
                
                <div class="hamburger-icon">
                  <label for="openmenu" id="hamburger-label">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </label>    
                </div>
              
                  <div class="menu-pane">
                    
                    <nav>
                      <ul class="menu-links">
                        <li><a href="###">All Catergories</a>
                         

                      </ul>

                      <div class="logo"> <h1><font color ="white">A BLOG.COM</font></h1><br>
                        <img id="logo_img" src="img/ddd.jpg"/> <br><br>
                        <p><font size="3sp" color ="white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                             minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                              esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</font></p>
                    </div>>
                      
                    </nav>
                  </div>

                  <div class="body-text">
            <h1> <font size="12sp" style=" 
                z-index: -1;
               font-family: 'olde_englishregular', Arial, sans-serif;
                font-weight:normal;
                font-style:normal; 
                font-size: 100px;
                "> A BLOG.COM </font></h1>
          </div>

          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id =  $_GET["id"];

$sql = "SELECT * FROM article WHERE id = $id";


$result = mysqli_query($conn, $sql);

$emparray = array();

if (mysqli_num_rows($result) > 0) {
  
  
  while($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

echo json_encode($emparray);

?>

</body>


</html>

