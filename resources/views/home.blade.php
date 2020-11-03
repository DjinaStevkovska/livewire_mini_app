<!DOCTYPE html>
<html>
<head>
	<title>Learning Livewire</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
	<script src="https://unpkg.com/taggle/src/taggle.js" defer></script>

	<livewire:styles />

	<style>
		html {
			font-size: 1em;
		}	
		.textarea {
			width: 100%;
			height: 300px;
			border: 5px solid gray;
			border-radius: 20px;
			padding: 18px;
		}

		.taggle_list {
			padding: 0;
			margin: 0;
			line-height: 2.5;
			width: 100%;
		}

		.taggle_input {
			border: none;
			outline: none;
			font-size: 16px;
			font-weight: 300;
		}

		.taggle_list li {
			display: inline;
			vertical-align: baseline;
			white-space: nowrap;
			font-weight: 500;
			margin-bottom: 5px;
		}

		.taggle_list .taggle {
			margin-right: 8px;
			background: #E2E1DF;
			padding: 5px 10px;
			border-radius: 3px;
			position: relative;
			cursor: pointer;
			transition: all .3s;
			-webkit-animation-duration: 1s;
					animation-duration: 1s;
			-webkit-animation-fill-mode: both;
					animation-fill-mode: both;
		}

		.taggle_list .taggle_hot {
			background: #cac8c4;
		}

		.taggle_list .taggle .close {
			font-size: 1.1rem;
			position: absolute;
			top: 10px;
			right: 3px;
			text-decoration: none;
			padding: 0;
			line-height: 0.5;
			color: #ccc;
			color: rgba(0, 0, 0, 0.2);
			padding-bottom: 4px;
			display: inline-block;
			opacity: 0;
			pointer-events: none;
			border: 0;
			background: none;
			cursor: pointer;
		}

		.taggle_list .taggle:hover {
			padding: 5px;
			padding-right: 15px;
			background: #ccc;
			transition: all .3s;
		}

		.taggle_list .taggle:hover > .close {
			opacity: 1;
			pointer-events: auto;
		}

		.taggle_list .taggle .close:hover {
			color: #990033;
		}

		.taggle_placeholder {
			position: absolute;
			color: #CCC;
			top: 24px;
			left: 16px;
			transition: opacity, .25s;
			-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
					user-select: none;
		}

		.taggle_input {
			padding: 8px;
			padding-left: 0;
			margin-top: -5px;
			background: none;
			max-width: 100%;
		}

		.taggle_sizer {
			padding: 0;
			margin: 0;
			position: absolute;
			top: -500px;
			z-index: -1;
			visibility: hidden;
		}

	</style>

</head>
<body>	
	<div class="container">

		<livewire:scripts />

		<br><br><hr><br><br>
		
		<livewire:search />

		<br><br><hr><br><br>

		<livewire:contact-us />

		<br><br><hr><br><br>

		<livewire:data-table />
		
		<br><br><hr><br><br>

					
		<div class="w-50 mx-auto">
			@foreach ($posts as $post)
				<h2><a href="post/{{$post->id}}">{{ $post->title }}</a></h2>
				<p>{{ $post->content }}</p>
				<p><a href="post/{{$post->id}}/edit">Edit</a></>
			@endforeach
		</div>

		<br><br><hr><br><br>

		<livewire:poll />

		<br><br><hr><br><br>

		<livewire:tags-component />
	



    </div>
	
</body>	
</html>