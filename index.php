<!DOCTYPE html>
<html>
<head>
	<title>Breathe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
	<!-- <link rel="manifest" href="/manifest.json"> -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="	stylesheet">
	<style type="text/css">
		:root {
			--length: 130px;
		}
		.light {
			--dark-color: #111;
			--light-color: #fff;
			--dark-gray: #666;
			--light-gray: #eee;

			--slider-bg: #eee;
			--slider-handle: #111;
		}
		.dark {
			--dark-color: #fff;
			--light-color: #111;
			--dark-gray: #ddd;
			--light-gray: #222;

			--slider-bg: #aaa;
			--slider-handle: #333;
		}
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			user-select: none;
			font-family: 'Rubik', sans-serif;
		}
		body, html {
			height: 100%
		}
		.app {
			background-color: var(--light-color);
			text-align: center;
			display: flex;
			justify-content: space-between;
			flex-direction: column;
			align-items: center;
			height: 100%;
			width: 100%;
			padding: 50px;
			transition: background-color 0.4s ease-in-out;
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
			font-size: 16px;
			font-weight: bold;
			color: var(--light-color);
			background-color: var(--dark-color);
			padding: 12px 85px;
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

		.settings {
			width: 200px;
		}
		.settings .setting {
		    display: flex;
		    justify-content: space-between;
		    margin-bottom: 15px;
		}

		.settings .setting .setting-title {
		    color: var(--dark-color);
		    font-weight: 600;
		    transition: color 0.4s ease-in-out;
		}

		.switch {
		  position: relative;
		  display: inline-block;
		  width: 45px;
		  height: 15px;
		}

		.switch input { 
		  opacity: 0;
		  width: 0;
		  height: 0;
		}

		.switch input:focus { outline: none; }

		.slider {
		  position: absolute;
		  cursor: pointer;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background-color: var(--slider-bg);
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 20px;
		  width: 20px;
		  left: 0px;
		  bottom: -3px;
		  background-color: var(--slider-handle);
		  -webkit-transition: .3s;
		  transition: .3s;
		}

		input:checked + .slider {
		  background-color: var(--slider-bg);
		}

		input:focus + .slider {
		  box-shadow: 0 0 1px var(--slider-handle);
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(25px);
		  -ms-transform: translateX(25px);
		  transform: translateX(25px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 34px;
		}

		.slider.round:before {
		  border-radius: 50%;
		}
	</style>
</head>
<body class="light">
	<div class="app">
		<div>
			<img class="logo" src="./assets/logo.png">
		</div>
		<div class="controls">
			<div class="length-picker">
				
			</div>
			<div class="settings">
				<div class="setting">
	                <span class="setting-title noselect">theme</span>
	                <label class="switch">
	                  <input type="checkbox" class="themeCheck">
	                  <span class="slider round"></span>
	                </label>
	            </div>
			</div>
		</div>
		<div>
			<btn class="start-btn">start</btn>
		</div>
	</div>

	<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>