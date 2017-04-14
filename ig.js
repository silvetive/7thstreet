
// d06ab8e2dc014b1e8f8d0a54e9d93358

https://www.instagram.com/oauth/authorize/?client_id=d06ab8e2dc014b1e8f8d0a54e9d93358&redirect_uri=http://www.treetopadventurepark.com&response_type=code

window.Instagram = {
	config: {},

	BASE_URL: 'https://api.instagram.com/v1',

	init: function function_name( opt ) {
		opt = opt || {};

		this.config.client_id = opt.client_id;
		this.config.client_secret = opt.client_secret;
		this.config.code = opt.code;
		this.config.access_token = opt.access_token;
	},

	popular: function() {
		var endpoint = this.BASE_URL + '/tags/' + name + '/media/recent?access_token=' + this.config.access_token;
		this.getJSON(endpoint,callback);
	},

	tagsByName: function(name,callback) {
		var endpoint = this.BASE_URL + '/tags/' + name + '?access_token=' + this.config.access_token;
		console.log(endpoint);
		this.getJSON(endpoint,callback);
	},

	getJSON: function( url, callback) {
		$.ajax({
			type: 'GET',
			url: url,
			dataType: 'jsonp',
			success: function( response ) {
				if ( typeof callback === 'function' ) callback(response);
			}
		})
	},
	getTOKEN: function(callback) {

		$curl = curl_init( 'https://api.instagram.com/oauth/access_token' );
		curl_setopt( $curl, CURLOPT_POST, true );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, {
			client_id: 'd06ab8e2dc014b1e8f8d0a54e9d93358',
			redirect_uri: 'http://www.treetopadventurepark.com/newtreetop/igtest/igtest.php',
			client_secret: '1fc0bde4cc3c44d689d1d4ffd3b68907',
			code: 'c3c3344811e047aea9512e270223e77f',
			grant_type: 'authorization_code'
			} );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
		$auth = curl_exec( $curl );
		$secret = json_decode($auth);
		$access_key = $secret['access_token'];

		alert($access_token);
		// $.ajax({
		// 	type: 'POST',
		// 	url: 'https://api.instagram.com/oauth/access_token',
		// 	data: {
		// 		client_id: 'd06ab8e2dc014b1e8f8d0a54e9d93358',
		// 		client_secret: '1fc0bde4cc3c44d689d1d4ffd3b68907',
		// 		grant_type: 'authorization_code',
		// 		redirect_uri: 'http://www.treetopadventurepark.com/newtreetop/igtest/igtest.php',
		// 		code: 'c3c3344811e047aea9512e270223e77f'
		// 	},
		// 	dataType: 'jsonp',
		// 	success: function(response){
		// 		console.log(response);
		// 		// if ( typeof callback === 'function' ) alert(response);
		// 	},
		// 	error: function(){
		// 		alert('ERROR');
		// 	}
		// })

		// $.ajax({
		// 	type: 'GET',
		// 	url: 'https://www.instagram.com/oauth/authorize/?client_id=d06ab8e2dc014b1e8f8d0a54e9d93358&redirect_uri=http://www.treetopadventurepark.com&response_type=code',
		// 	dataType: 'jsonp',
		// 	success: function( response ){
		// 		if ( typeof callback === 'function' ) callback(response);
		// 	}
		// })


		// var tokenURL = 'https://www.instagram.com/oauth/authorize/?client_id=d06ab8e2dc014b1e8f8d0a54e9d93358&redirect_uri=http://www.treetopadventurepark.com&response_type=code';
		// var tokenURL = 'https://api.instagram.com/oauth/access_token?client_id=' + this.config.client_id + "&client_secret=" + this.config.client_secret + "&grant_type=authorization_code&redirect_uri=http://www.treetopadventurepark.com/newtreetop/igtest/igtest.php&code=" + this.config.code
		// $.get(tokenURL,function(code){
		// 	alert(code);
		// });
	}

};

Instagram.init({
	client_id: 'd06ab8e2dc014b1e8f8d0a54e9d93358',
	client_secret: '1fc0bde4cc3c44d689d1d4ffd3b68907',
	code: 'c3c3344811e047aea9512e270223e77f',
	access_token: ''
})

$(document).ready(function(){
	// Instagram.tagsByName('cat' , function(response)){
	// 	var $instagram = $('#instagram');
	// 	for (var i = 1; i < response.data.leength; 0; i++) {
	// 		imageURL = response.data[i].images.low_resolution.url;
	// 		#instagram.append('<img src="' + imageURL + '" />');
	// 	}
	// }


	$('#searchhashtag').on('submit',function(e){
		e.preventDefault();
		console.log(e);

		var tagName = $('#hashtagname').val();
		Instagram.getTOKEN(function(response){
			console.log(response);
		})
		// Instagram.tagsByName(tagName , function(response){
		// 	var $instagram = $('#instagram');
		// 	$instagram.html('');
		// 	console.log(response);
		// 	for (var i = 0; i < response.data.length; i++) {
		// 		imageURL = response.data[i].images.low_resolution.url;
		// 		$('#instagram').append('<img src="' + imageURL + '" />');
		// 	}
		// });
	})
})

