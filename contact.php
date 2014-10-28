<?php
if ($_POST["email"]<>'') { 
    $ToEmail = 'info@jermtechnology.com'; 
    $EmailSubject ="Jerm Technologies ". $_POST['subject']; 
    $mailheader = "<strong>From:</strong> ".$_POST["email"]."\r\n"; 
    $mailheader .= "<strong>Reply-To:</strong> ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "<strong>Name:</strong> ".$_POST["full_name"]."<br />"; 
    $MESSAGE_BODY .= "<strong>Email:</strong> ".$_POST["email"]."<br />"; 
    $MESSAGE_BODY .= "<strong>Comment: </strong>".nl2br($_POST["message"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 

<?php 
echo "<script type='text/javascript'> 
window.location.href = 'contact.php?msg=Your message was sent successfully.';
</script>"; 
} else { 
 
 ?>
<?php require_once("layout/header.php"); ?>
  <div id="content">
  
<form action="contact.php" method="post" style="float:left;padding:5px 30px;">
<?php if(isset($_GET['msg'])) {
$msg = $_GET['msg'];
echo '<div style="clear:both; height:20px"><span style="color:#0C0;">'.$msg.'</span></div>';
} else {
echo '';
} ?>
<h3>Leave us a message</h3>
<span style="float:left;"><p>
Fullname<br/>
<input type="text" name="full_name" placeholder="Your name" id="full_name" size="32" /></p>
<p>
Email Address<br/>
<input type="text" name="email" placeholder="Email Address" id="email" size="32" /></p>
<p>
Subject<br/>
<input type="text" name="subject" placeholder="Subject" id="subject" size="32" /></p>
</span><p style="float:right; padding-left:20px;">Message<br/><textarea name="message" id="message" cols="30" rows="10" placeholder="Your message" ></textarea></p>
<p><input type="submit" name="submit" value="SEND" style="width:240px; color:#fff; border:4px solid #333; background:#333; float:right; padding:0;" class="round shadow" /></p>
</form>
<div class="contact" style="padding:10px 30px;">
<h3>General information</h3>
<p><strong><span style="color:#c30;">Kato Richard</span></strong><br/>
Lead Consultant <br/>
Tel: +256 757590912
</p>
<hr/>
<!--p><strong><span style="color:#c30;">Byekwaso Mariserino</span></strong><br/>
Internship Manager<br/>
Tel: +256 704545030
</p>
<hr/-->
<p><strong><span style="color:#F30;">Physical address</span></strong><br/>Plot 203/209 <br/>Mengo, Kaki Rd.</p> 
<hr/>
<p><strong><span style="color:#F30;">Postal address</span></strong><br/> P.O box 75811  Kampala</p>
<hr/>
<p><strong><span style="color:#F30;">Email</span></strong> <br/>
info@jermtechnology.com<br/>
</p>
<hr/>
</div>

  
  </div>
  <div id="sidebar"></div>
<?php require_once("layout/footer.php"); 

}
?>
