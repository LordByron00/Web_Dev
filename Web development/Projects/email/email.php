<!DOCTYPE html>
<html>
<body>

<?php
// the message
$msg = "I am Justine Bayron, I am bound by fate to be the best, superior, and chosen one. I will be the greatest person who will ever live!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("jbayron76@gmail.com","My first PHP email",$msg);
?>

</body>
</html>
