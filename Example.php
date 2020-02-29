<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
			include "connect.php";
            echo "Hi, I'm a PHP script!";
        ?>
		
		<h1>test</h1>
		
		<?php
			$query = "SELECT * FROM genreids WHERE ID = 60";
			$genre = $db->query($query);
			$genre = $genre->fetch();
			$genre_name = $genre['Genre'];
			echo $genre['Genre'];
		?>
			
    </body>
</html>