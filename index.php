<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="	stylesheet">
	<style type="text/css">
		:root {
			--length: 130px;
		}
		.container.light {
			--dark-color: #111;
			--light-color: #fff;
		}
		.container.dark {
			--dark-color: #fff;
			--light-color: #111;
		}
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			user-select: none;
		}
		.container {
			background-color: var(--light-color);
			text-align: center;
			display: flex;
			justify-content: space-between;
			flex-direction: column;
			align-items: center;
			height: 100vh;
			padding: 50px;
		}
		.logo {
			width: 110px;
		}
		.box-outline {
			width: var(--length);
			height: var(--length);
			//position: relaive;
			display: flex;
			justify-content: center;
			align-items: center;
			/*top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);*/
			border: 3px solid var(--dark-color);
			border-radius: 5px;
		}

		.box {
			width: calc(var(--length) - 10px);
			height: calc(var(--length) - 10px);
			position: absolute;
			/*top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);*/
			background-color: var(--dark-color);
			border-radius: 5px;
			/*display: flex;
			justify-content: center;
			align-items: center;*/
			transform: scale(1);
			animation: breathing 14s infinite;
			box-shadow: 0 0 1px rgba(0, 0, 0, 0.05);

		}
		.timer {
			position: absolute;
			/*top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);*/
			color: var(--light-color);
			font-size: 22px;
			font-family: 'Rubik';
		}
		.start-btn {
			font-family: 'Rubik', sans-serif;
			font-size: 18px;
			color: var(--light-color);
			background-color: var(--dark-color);
			padding: 10px 85px;
			border-radius: 5px;
			border: 2px solid var(--dark-color);
			cursor: pointer;
			transition: all 0.5s ease-in-out;
		}
		.start-btn:hover {
			color: var(--dark-color);
			background-color: var(--light-color);
		}

		@keyframes breathing {
			0%   { 
				transform: scale(0.4); 
				border-radius: 50%;
			}
			50%  { 
				transform: scale(1);
				border-radius: 5px;
			}
  			100% { 
  				transform: scale(0.4);
  				border-radius: 50%;
  			}
		}

		/*@keyframes breathing {
			0%   { 
				transform: scale(0.4); 
				border-radius: 50%;
			}
			25%  { 
				transform: scale(1);
				border-radius: 5px;
			}
			50%  { 
				transform: scale(1);
				border-radius: 5px;
			}
  			100% { 
  				transform: scale(0.4);
  				border-radius: 50%;
  			}
		}*/
	</style>
</head>
<body>
	<div class="container light">
		<div>
			<img class="logo" src="./assets/logo.png">
		</div>
		<div class="settings">
			
		</div>
		<div>
			<btn class="start-btn">start</btn>
		</div>
	</div>
</body>
</html>