<!DOCTYPE html>
<html lang="en">
<head>
	<title>7th Street</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="Description" content="">
	<meta name="keywords" content="">


	<script src="jquery-2.1.3.min.js"></script>
	<script src="ig.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<![endif]-->
</head>
<body>
	<a href="igtest">LINK</a>
	<?
	session_start();
	include 'vendor/autoload.php';
	echo "<div>xxx</div>";


	$provider = new League\OAuth2\Client\Provider\Instagram([
		'clientId'          => '3b5f52b88e4a48a4b1dbcb51312ed268',
		'clientSecret'      => '84c03210fdca44709eb299bd4ed73c17',
		'redirectUri'       => 'http://www.crehand.com/_7thstreet/igtest',
		// 'redirectUri'       => 'http://localhost/www7thstreet/igtest',
    'host'              => 'https://api.instagram.com' // Optional, defaults to https://api.instagram.com
    ]);


	echo "<div>xxx</div>";

	echo "<div>CODE = ".$_GET['code']."</div>";

	if (!isset($_GET['code'])) {


    // If we don't have an authorization code then get one
		$authUrl = $provider->getAuthorizationUrl();
		$_SESSION['oauth2state'] = $provider->getState();
		header('Location: '.$authUrl);
		exit;

// Check given state against previously stored one to mitigate CSRF attack
	} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
		echo "<div>".$_GET['state']."</div>";

		unset($_SESSION['oauth2state']);
		exit('Invalid state');

	} else {

    // Try to get an access token (using the authorization code grant)
		$token = $provider->getAccessToken('authorization_code', [
			'code' => $_GET['code']
			]);

    // Optional: Now you have a token you can look up a users profile data
		try {

        // We got an access token, let's now get the user's details
			$user = $provider->getResourceOwner($token);

        // Use these details to create a new profile
			printf('Hello %s!', $user->getName());

		} catch (Exception $e) {

        // Failed to get user details
			exit('Oh dear...');
		}

    // Use this to interact with an API on the users behalf
		echo $token->getToken();
	}

	?>
	<!-- <form id="searchhashtag"> -->
	<input type="text" name="hashtagname" id="hashtagname" value="silvekinesis">
	<div onclick="InstagramLoad('self')">LOAD</div>
	<!-- <button>SEARCH</button> -->
	<!-- </form> -->



	<div id="instagram"></div>

	<?
	// include '_footer.php';
	?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			// url:"https://api.instagram.com/v1/tags/nofilter/media/recent?access_token=<?php echo $token->getToken() ?>",
			url:"https://api.instagram.com/v1/users/self/media/recent/?access_token=<?php echo $token->getToken()?>",
			dataType: "jsonp",
			success : function( returndata )
			{
				// $('#result').html("");
				// var date = new Date(returndata.data.updated_at);
				// date.toDateString()
				// var month = date.getMonth() + 1
				// var day = date.getDate()
				// var year = date.getFullYear()
				// date_str = month + "/" + day + "/" + year;
				console.log(returndata);
        // html +="<h2>"+ returndata.data.full_name + "</h2>";
        // html +="<h4>" + returndata.data.description + "</h4>";
        // html +="<p>Last updated: " + date_str + "</p>";
        // $('#result').append( html );
    }
});
	})

	function InstagramLoad(userid){
		userid = $('#hashtagname').val();
		console.log(userid);
		$.ajax({
			// url:"https://api.instagram.com/v1/tags/nofilter/media/recent?access_token=<?php echo $token->getToken() ?>",
			url:"https://api.instagram.com/v1/tags/"+userid+"/media/recent/?scope=public_content&access_token=<?php echo $token->getToken()?>",
			dataType: "jsonp",
			success : function( returndata )
			{
				// $('#result').html("");
				// var date = new Date(returndata.data.updated_at);
				// date.toDateString()
				// var month = date.getMonth() + 1
				// var day = date.getDate()
				// var year = date.getFullYear()
				// date_str = month + "/" + day + "/" + year;
				console.log(returndata);
        // html +="<h2>"+ returndata.data.full_name + "</h2>";
        // html +="<h4>" + returndata.data.description + "</h4>";
        // html +="<p>Last updated: " + date_str + "</p>";
        // $('#result').append( html );
    }
})
	}
</script>
</html>