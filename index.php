<!DOCTYPE HTML>
<html lang="da">
<head>
	<title>simpleForum</title>
	<meta charset="utf-8">
	
<?php require "elementer/header.php";?>

<div class="container">
<h1>Minimalistisk og enkelt forum</h1>
<br>
<p>
Velkommen til simpleForum! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis odio eget velit luctus tempor at ac enim. Aliquam auctor elit ut enim viverra, a malesuada odio convallis. <br>
Nullam gravida eros nec tortor facilisis tempus. Phasellus tempus massa augue, non bibendum diam efficitur a. Proin nec congue lectus, eget pulvinar libero.
</p>
<br><br>
<div class="btn-group">
	<a href="opret.php"><button type="button" class="btn btn-info dropdown-toggle">
    Opret nyt indlæg
	</button></a>
</div>	

<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Alle kategorier <span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<li><a href="#">Alle kategorier</a></li>
		<li><a href="#">Inspiration</a></li>
		<li><a href="#">Programmering</a></li>
		<li><a href="#">Projekter</a></li>
	</ul>
</div>
<br><br>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Emne</th>
        <th>Kategori</th>
        <th>Svar</th>
		<th>Dato</th>
      </tr>
    </thead>
    <tbody>

<?php require "db/vis-alle-indlaeg.php"; ?>

</tbody>
</table>


</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
