<?php 

include 'config.php';

error_reporting(0); 

if (isset($_POST['submit'])) { 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$comment = $_POST['comment']; 

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="comment-style.css">

	<title>Komenty</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name" class="Menostyle">Meno</label>
					<input type="text" name="name" id="name" style="color: red;" placeholder="Vložte svoje meno" required>
				</div>
				<div class="input-group">
					<label for="email" class="Emailstyle">Email</label>
					<input type="email" name="email" id="email" placeholder="Vložte svoj email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment" class="Komentstyle">Komentár</label>
				<textarea id="comment" name="comment" placeholder="Vložte komentár" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Odošlite komentár</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>