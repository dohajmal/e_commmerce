   <?php  

include_once ('../include/chargerClasse.php');
$panier = new panier();	
?>
   <div class="right_content">
  
	   <?php if(isset($_SESSION['login'])&& !empty($_SESSION['login'])) {?>
      <div class="border_box">
	  <span>Hello<b> <?php echo $_SESSION['login']; ?></b> </span>
	  <a href="../controller/LogOut.php?logout=1">logout</a>
	  </div>
	  
	 <?php } else {
		 if(isset($_GET["error"]) && $_GET["error"]==1){
			 ?>
			 <span color="red">veerify your cred</span>
			 <?php	 }?>
	   <div class="title_box">SignIn</div>
      <div class="border_box">
	  <form action="../controller/LoginControlleur.php" method="POST">
        <input type="text" name="login" class="newsletter_input" value="" PLACEHOLDER="login" required />
		<input type="text" name="password" class="newsletter_input" value="" PLACEHOLDER="password" required />
		 <a href="signup.php">Signup</a>
		 
		<input type="submit" name="Valide" value="Valide" class="myButton" >
       </form>
	   </div>
	 <?php }?>
   
      <div class="title_box">Search</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="keyword"/>
        <a href="http://all-free-download.com/free-website-templates/" class="join">search</a> </div>
      <div class="shopping_cart">
        <div class="title_box">Shopping cart</div>
        <div class="cart_details"><span id="count"> <?= $panier->count(); ?> items </span><br />
          <span class="border_cart"></span> <span class="total"> Total:<?= number_format($panier->total(),3,',',' '); ?> DT</span> </div>
        <div class="cart_icon"><a href="panier.php"><img src="images/shoppingcart.png" alt="" width="35" height="35" border="0" /></a></div>
      </div>
     
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
      <?php foreach($Manid = $Mani->getListMani()->fetchall(PDO::FETCH_ASSOC) as $res1){?>  	 

           <li class="odd"><a href="Manifacteur.php?id_mani=<?= $res1['id'] ?>" ><?= $res1['nom'] ?></a></li>
	  <?php } ?>
      </ul>
	  
	
    </div>
