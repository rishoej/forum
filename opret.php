<!DOCTYPE HTML>
<html lang="da">
<head>
	<title>simpleForum</title>
	<meta charset="utf-8">
	
<?php require "elementer/header.php"; ?>

<div class="container">
<h1>Start nyt indlæg</h1>
<br><form action="db/opret-indlaeg.php" method="post" id="skriv-novelle">
<div class="form-group">
	<input type="text" name="titel" id="titel" class="form-control" style="height:40px;" placeholder="Titel" minlength="2" maxlength="50" required>
</div>
<div class="form-group">
		<select class="form-control" name="kategori" id="kategori" style="height:40px;" required>
			<option>Vælg kategori</option>
			<option value="1">Inspiration</option>
			<option value="2">Programmering</option>
			<option value="3">Projekter</option>
		</select>
</div>
<div class="row">
	<div class="col-lg-1 col-md-1 col-xs-2">
		<center><a href="#" class="forfatter"><img src="images/forfatter.jpg" alt="..." class="img-circle" style="width:100%;"></center>
	</div>
	<div class="col-lg-11 col-md-11 col-xs-10">

		<p style="margin:0px;"><a href="#"><b>Jan_Nielsen</b></a></p>
		<small>04 maj 2016</p></small>
		<br>
		<textarea class="form-control" name="novelle" id="novelle" rows="5" minlength="1" placeholder="Indhold" required></textarea>
		<br>
		<button type="submit" class="btn btn-default"><p>Opret</p></button>
		</form>
	</div>
</div>
    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>