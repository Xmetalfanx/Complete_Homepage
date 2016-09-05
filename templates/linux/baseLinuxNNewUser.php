
<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php'); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/homepage.php'); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/aboutme/experience.php'); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].('/modules/common.php'); ?>

<!doctype html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseHeadTag.php'); ?>
<body>

    <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseHeader.php'); ?>

     <div id="mainBody">
	       <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxNNewUserTemplateCol1.php'); ?>

    		<div id="col2">
    		<?php echo $content; ?>
    		</div>

        <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseFooter.php'); ?>
	   </div>

<?php include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseFooter2.php'); ?>
</body>
</html>
