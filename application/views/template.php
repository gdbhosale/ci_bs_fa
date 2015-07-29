<?php
include("includes/head.php");
?>

<body>
<div id="lgdat" base_url="<?php echo $base_url; ?>" section="<?php echo $section; ?>" vcontent="<?php echo $vcontent; ?>" isLogin="<?php echo $isLogin; ?>"></div>

<?php
if(isset($showErr)) {
    include("errors/error.php");
} else {
    include($section."/".$vcontent.".php");
}
?>

<?php
include("includes/footer.php");
?>