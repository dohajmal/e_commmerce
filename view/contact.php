<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e_commerce - Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<script>
PositionX = 100;
PositionY = 100;
defaultWidth  = 500;
defaultHeight = 500;
var AutoClose = true;
if (parseInt(navigator.appVersion.charAt(0))>=4){
var isNN=(navigator.appName=="Netscape")?1:0;
var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
function popImage(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN);}
if (isIE){imgWin=window.open('about:blank','',optIE);}
with (imgWin.document){
writeln('<html><head><title>Loading...</title><style>body{margin:0px;}</style>');writeln('<sc'+'ript>');
writeln('var isNN,isIE;');writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
writeln('isNN=(navigator.appName=="Netscape")?1:0;');writeln('isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
writeln('function reSizeToImage(){');writeln('if (isIE){');writeln('window.resizeTo(300,300);');
writeln('width=300-(document.body.clientWidth-document.images[0].width);');
writeln('height=300-(document.body.clientHeight-document.images[0].height);');
writeln('window.resizeTo(width,height);}');writeln('if (isNN){');       
writeln('window.innerWidth=document.images["George"].width;');writeln('window.innerHeight=document.images["George"].height;}}');
writeln('function doTitle(){document.title="'+imageTitle+'";}');writeln('</sc'+'ript>');
if (!AutoClose) writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()">')
else writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()" onblur="self.close()">');
writeln('<img name="George" src='+imageURL+' style="display:block"><div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body></html>');
close();		
}}
</script>
</head>
<body>
<div id="main_container">

<?php include 'header.php'; ?>
<?php include 'MenuG.php'; ?>
  <div id="main_content">

    <?php include 'sidebarD.php'; ?>
    <div class="center_content">
      <div class="center_title_bar">Contact Us</div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="contact_form">
		  <form action="../controller/ContactConrolleur.php" method="POST">
            <div class="form_row">
			               <label class="contact"><strong>Name:</strong></label>
              <input type="text" class="contact_input" name="Name" PLACEHOLDER="Name" required/>
            </div>
            <div class="form_row">
              <label class="contact"><strong>First name:</strong></label>
              <input type="text" class="contact_input" name="FName" PLACEHOLDER="First name"  required />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Phone:</strong></label>
              <input type="text" class="contact_input" name="phone" PLACEHOLDER="Phone"  required/>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Address:</strong></label>
              <input type="text" class="contact_input"name="adress" PLACEHOLDER="Adress"  required />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Message:</strong></label>
              <textarea class="contact_textarea" name="message"  required ></textarea>
            </div> 
			
           <div class="form_row"> <input type="submit" name="btn_ajout" class="prod_details"></a> </div>
			
           </form>         
		 </div>
        </div>
      </div>
    </div>
    <!-- end of center content -->
   <?php include 'sidebarG.php' ; ?>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include 'footer.php';?>
</div>
</body>
</html>

