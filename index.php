<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 28/07/2018
 * Time: 23:02
 */
//Starting session with session_start
session_start();
//establishing control structures in script with superglobal session include data of number
//of visits of user
if (empty($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else{
    $_SESSION['count']++;
}
?>
<!--Viewing the user's visits to our page-->
<p>
    Hello Visitor, you have seen this page <?php echo $_SESSION['count'];?> times.
</p>
<p>
    To continue, <a href="nextpage.php?<?php echo htmlspecialchars(SID)?>">Click Here</a>.
</p>