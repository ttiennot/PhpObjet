<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 php</title>
    <style>
		.class-diagram {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100%;
		}

		.class {
			border: 1px solid black;
			padding: 20px;
			margin: 20px;
			text-align: center;
			font-family: Arial, sans-serif;
			font-size: 16px;
			background-color: #f2f2f2;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			border-radius: 10px;
		}

		.property {
			font-weight: bold;
			margin-top: 10px;
		}

		.method {
			margin-top: 10px;
		}

		.arrow {
			font-size: 24px;
			margin: 0 20px;
		}

		.class-name {
			font-size: 24px;
			font-weight: bold;
			margin: 0;
		}
	</style>
</head>
<body>
    <?php
        include 'user.php';
        $user1 = new user();
        $user1 -> afficheUser();
    ?>
    <div class="class-diagram">
        <div class="class">
            <p class="class-name">User</p>
            <hr>
            <p class="property">- nom : string</p>
            <p class="property">- prénom : string</p>
            <hr>
            <p class="method">+ afficheUser() : void</p>
        </div>
	</div>
	<pre>
        include 'user.php';
        $user1 = new user();
        $user1 -> afficheUser();

		classe dans le fichier class.php :

		class User{
        	private $nom;
        	private $prenom;
        	public function afficheUser(){
            	echo "je suis un user";
        	}
    	}
	</pre>
    
</body>
</html>