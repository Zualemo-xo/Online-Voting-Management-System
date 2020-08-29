<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header('Refresh:5; url=login_mahel.php');
echo 'Successfully logged out!!';
?>
<script type="text/javascript">
        (function () {
            var timeLeft = 5,
                cinterval;

            var timeDec = function (){
                timeLeft--;
                document.getElementById('countdown').innerHTML = timeLeft;
                if(timeLeft === 0){
                    clearInterval(cinterval);
                }
            };

            cinterval = setInterval(timeDec, 1000);
        })();
</script>
Redirecting in <span id="countdown">5</span> seconds.
