<?php
include 'includes/header.php';
?>

<h2>Contact Adam Nelson</h2>
        <div id="channels">        
        <form action="formhandler.php" method="post">
        Name:<br>
        <input type="text" name="name"><br>
        E-mail:<br>
        <input type="text" name="mail"><br>
        Comment:<br>
        <input type="text" name="comment" size="50"><br><br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
</form>
<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
            <div class="g-recaptcha" data-sitekey="6LeOEp4UAAAAAID9fX5DPp7iNIPNmRg9lTtm7Gzv"></div>
 <?php
 
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LeOEp4UAAAAAD4DFLoQt4_nkkvWI8xzZsMmOjJk';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   }
?>
<?php
include 'includes/footer.php';
?>