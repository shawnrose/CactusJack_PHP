<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--HEAD-->
	<?php include('controls/head.php'); ?>

<body>
<?php include_once("analyticstracking.php") ?>
	<div id="container">
	<!--TOP OF PAGE-->
		<div id="masthead">
			<div id="header"></div>
			<div id="topNav">
			<?php include('controls/mainNavBar.php'); ?></div>
		</div><!--END MASTHEAD-->
		<div id="main">
			<div id="page_content">
				<?php echo $pagecontent; ?>
			</div><!--PAGE_CONTENT-->
		</div><!--END MAIN-->
	</div><!--END CONTAINER-->
<!--FOOTER-->     
<div id="footer">
	<?php include('controls/footer.php'); ?>
</div><!--END FOOTER-->
<div id="copyright">
	<p>Web Site Designed, Developed and Maintained by Ramblin Rose Designs<a href="#" target="_blank"></a>.
	</p>
</div>
<!--JS-->
	<?php include("scripts.php"); ?>
	<div id="fb-root"></div>


</body>

</html>