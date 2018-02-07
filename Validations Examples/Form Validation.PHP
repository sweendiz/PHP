<?php
     if(isset($_GET['submit'])) {
          if(preg_match("/^\(([2-9][0-9]{2})\)[2-9][0-9]{2}-[0-9]{4}$/i",
                                  $_GET['phone']) != 1) {
               echo "The phone field was invalid<BR>";
          }
     } else {
          /* Code to process form here */
     }
?>
<HTML>
<HEAD><TITLE>Elementary form validation</TITLE></HEAD>
<BODY>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
<INPUT TYPE="hidden" NAME="submit" VALUE="1">
Phone: <INPUT TYPE="text" NAME="phone" SIZE=13 MAXLENGTH=13>
(ex. (333)555-1212)<BR>
<INPUT TYPE="submit" VALUE="Send">
</FORM>
</HTML>
  