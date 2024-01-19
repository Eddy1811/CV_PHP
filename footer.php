<?php
session_start();
$_SESSION['firstdate'] = date('Y-m-d H:i:s');
echo $_SESSION['firstdate'], '<br>';
$numberView = $numberView+1;
$_SESSION['countViewPage'] = $numberView;
echo $_SESSION['countViewPage'];
?>







<footer>
        Pour tout contact, vous pouvez- <a href="mailto:adressemail@ouimonsieur.fr">envoyez un email</a> -ici.
</footer>

</body>
</html>