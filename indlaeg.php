<!DOCTYPE HTML>
<?php 
$idIndlaeg = strip_tags($_GET["id"]);

require "db/vis-enkel-indlaeg.php";

?>	
<html lang="da">
<head>
	<title><?php echo $titel . " - simpleForum"; ?></title>
	<meta charset="utf-8">
	
<?php include "elementer/header.php"; ?>

<div class="container">
<h1><?php echo $titel; ?></h1>	
<p>Kategori: <a href="http://localhost/simpleForum/"><?php echo $kategori; ?></a></p>
<br>
<div class="row">
	<div class="col-lg-1 col-md-1 col-xs-2">
		<center><a href="#" class="forfatter"><img src="images/45.png" alt="..." class="img-circle" style="width:100%;"></a></center>
	</div>
	<div class="col-lg-11 col-md-11 col-xs-10">
		<p style="margin:0px;"><a href="#"><b>JepXaso</b></a></p>
		<small><?php echo $dato; ?></p></small>
		<br>
		<p><?php echo nl2br($novelle); ?></p>
	</div>
</div>

<?php require "db/vis-kommentarer.php"; ?>	

<hr>
<h1>Skriv et svar til <?php echo $titel; ?></h1>
<br>
<div class="row">
	<div class="col-lg-1 col-md-1 col-xs-2">
		<center><a href="#" class="forfatter"><img src="images/forfatter.jpg" alt="..." class="img-circle" style="width:100%;"></center>
	</div>
	<div class="col-lg-11 col-md-11 col-xs-10">
		<form action="db/opret-svar.php" method="post" id="opret-svar">
		<input type="hidden" value="<?php echo $indlaegId; ?>" name="indlaegId">
		<p style="margin:0px;"><a href="#"><b>Jan_Nielsen</b></a></p>
		<small>
		</p></small>
		<br>
		<textarea class="form-control" name="indhold" id="indhold" rows="5" minlength="1" maxlength="16000" placeholder="Besked" required></textarea>
		<br>
		<button type="submit" class="btn btn-default"><p>Send svar</p></button>
		</form>
	</div>
</div>

</p>

<hr>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>