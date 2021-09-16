<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo'<script type="text/javascript">alert("SUCCESSFULLY LOGGED OUT")</script>';
header("Location: 0index.html");
?>

</body>
</html>