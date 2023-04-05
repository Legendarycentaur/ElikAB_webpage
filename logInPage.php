<?php 
 include_once 'header2.php';
?>
<body>
    <div id="signinbackground">
  <div class="signincontent">
    <h1 class="loginheader1">Logga in</h1>
    <form action="db_connect.php" method="post">

        <input id="signinemail" type="text" name="username" placeholder="Email" required ><br>

        <input id="signinpassword" type="password" name="password" placeholder="Lösenord" required ><br> 
        <!--<input  id="fileupload "type="file" name="fileupload">-->
        <button id="signinbutton" type="submit">Logga in</button>
        
        
  </div>
  
    
 <!-- <script src="scriptnb.js"></script>
  <script src="scriptmy.js"></script>
  <script src="/js/createAccount.js"></script>-->
  </div>
</body>

  
