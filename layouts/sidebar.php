<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>LOGO</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Product 1</a>
    <a href="#" class="w3-bar-item w3-button">Product 2</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
        Product 3 <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Product 1.1</a>
      <a href="#" class="w3-bar-item w3-button">Product 1.2</a>
      <a href="#" class="w3-bar-item w3-button">Product 1.3</a>
      <a href="#" class="w3-bar-item w3-button">Product 1.4</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Product 4</a>
    <a href="#" class="w3-bar-item w3-button">Product 5</a>
    <a href="#" class="w3-bar-item w3-button">Product 6</a>
    <a href="#" class="w3-bar-item w3-button">Product 7</a>
  </div>
  <!-- LOGIN DI SINI YA, SAMA LOGOUT(?) KALO MISALNYA UDAH LOGIN-->
  <a href="" class="w3-bar-item w3-button  w3-padding">Login</a> 
  <!-- <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> --> 
  <a href=""  class="w3-bar-item w3-button w3-padding">Register</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Skill Rent LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
    <?php require_once "./scripts/openCloseSide" ?>
</script>