<?php
include("auth.php");
?>

<center style="margin-top:10%;">
<h5>
Please wait while we are redirecting to home...<br>

</h5>
<?php

					$a=$_SESSION["username"];
					$b='Welcome  ';
					$e=' !';
					$c = $b.$a.$e;
					echo $c;
			
				?>
				<script>setTimeout(function(){window.location.href='index.php'},1000);</script>
</center>