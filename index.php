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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		:root {
			--length: 130px;

			--easeOutBack: cubic-bezier(0.175, 0.885, 0.320, 1.275);
			--color-range-output: #222;
			--color-input-placeholder: #222;
			--height-range-bounds: 22px;
			--background-color-range-thumb: #222;
			--radius-range-thumb: 5px;
			--height-range-thumb: 20px;
			--width-range-thumb: 20px;
			--size-range-thumb-shadow: 25px;
			--color-range-thumb-shadow: rgba(0, 0, 0, .5);
			--shadow-offset-y-range-thumb: 4px;
			--shadow-offset-x-range-thumb: 0px;
			--border-width-range-thumb: 0;
			--border-color-range-thumb: #fff;
			--width-range-track: 100%;
			--height-range-track: 8px;
			--radius-range-track: 5px;
			--fill-range-track: #e6e6e6;
			--fill-range-track-active: #555;

			--height-range-output: 35px;
			--min-width-range-output: 32px;
			--padding-x-range-output: 20px;
			--size-range-output-arrow: 8px;
			--offset-y-range-output: 4px;
		}
		.light {
			--dark-color: #222;
			--light-color: #fff;
			--dark-gray: #666;
			--light-gray: #eee;

			--slider-bg: #eee;
			--slider-handle: #111;
		}
		.dark {
			--dark-color: #fff;
			--light-color: #111;
			--dark-gray: #535353;
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

		.length-picker {
			margin-bottom: 20px;
			text-align: center;
		}
		.length-picker p {
			color: var(--dark-color);
			transition: color 0.4s ease-in-out;
		}
		.length-picker .length-buttons {
			margin-bottom: 10px;
		}
		.length-picker button {
			display: inline-block;
			text-align: center;
			width: 45px;
			height: 45px;
			margin: 0 10px;
			border-radius: 5px;
			border: 2px solid var(--dark-color);
			background-color: var(--light-color);
			color: var(--dark-color);
			cursor: pointer;
			transition: all 0.3s ease-in-out;
			font-weight: bold;
		}
		.length-picker button:hover {
			background-color: var(--dark-color);
			color: var(--light-color);
		}
		.length-picker button.active {
			background-color: var(--dark-color);
			color: var(--light-color);
		}

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

		.slider::before {
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

		input:checked + .slider::before {
		  -webkit-transform: translateX(25px);
		  -ms-transform: translateX(25px);
		  transform: translateX(25px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 34px;
		}

		.slider.round::before {
		  border-radius: 50%;
		}

		/*-----------*/
		.cycle-slider {
			margin-top: 65px;
			margin-bottom: 20px;
		}
		.cycle-slider p {
			text-align: center;
			color: var(--dark-color);
			transition: color 0.4s ease-in-out;
		}
		.range {
			position: relative;
			padding-bottom: 10px;
		}
		/*Native*/
		.range input[type=range] {
			appearance: none;
			padding: 0;
			width: var(--width-range-track);
			height: var(--height-range-bounds);
			cursor: pointer;
			display: block;
		}
		.range input[type=range]:disabled {
			opacity: .3;
			cursor: default;
		}
		.range input[type=range]:focus {
			outline: none;
		}
		.range input[type=range]:disabled {
			opacity: .3;
			cursor: default;
		}
		/*Plugin wrapper*/
		.range .rangeslider {
			position: relative;
			height: var(--height-range-bounds);
			cursor: pointer;
			user-select: none;
			display: block;
		}
		/*Track*/
		.range .rangeslider::before {
			width: var(--width-range-track);
			height: var(--height-range-track);
			background: var(--slider-bg);
			border-radius: var(--radius-range-track);
			content: "";
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
		}
		.range input::-webkit-slider-runnable-track, {
			width: var(--width-range-track);
			height: var(--height-range-track);
			background: var(--slider-bg);
			border-radius: var(--radius-range-track);
			margin: calc(var(--height-range-bounds) / 20);
			transition: background-color 0.4s ease-in-out;
		}
		.range input::-moz-range-track {
			/*@include range-track();*/
			width: var(--width-range-track);
			height: var(--height-range-track);
			background: var(--slider-bg);
			border-radius: var(--radius-range-track);
			margin: calc(var(--height-range-bounds) / 20);
			transition: background-color 0.4s ease-in-out;
		}
		.range input::-ms-track {
			/*@include range-track();*/
			width: var(--width-range-track);
			height: var(--height-range-track);
			background: var(--slider-bg);
			border-radius: var(--radius-range-track);
			color: transparent;
			padding: cal(var(--height-range-bounds) / 20);
			background: transparent;
			border-color: transparent;
			transition: background-color 0.4s ease-in-out;
		}

		/*Track fill*/
		.range input::-ms-fill-lower,
		.range input::-ms-fill-upper {
			width: var(--width-range-track);
			height: var(--height-range-track);
			background: var(--slider-bg);
			transition: background-color 0.4s ease-in-out;
			border-radius: var(--radius-range-track);
		}
		.range input::-ms-fill-lower {
			background: var(--fill-range-track-active);
			transition: background-color 0.4s ease-in-out;
		}
		.range .rangeslider-fill-lower {
			background-color: var(--dark-gray);
			transition: background-color 0.4s ease-in-out;
			border-radius: var(--radius-range-track);
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			height: var(--height-range-track);
			will-change: width;
		}

		/*Thumb*/
		.range input::-webkit-slider-thumb {
			/*@include range-thumb();*/
			box-sizing: border-box;
			box-shadow: var(--shadow-offset-x-range-thumb) var(--shadow-offset-y-range-thumb) var(--size-range-thumb-shadow) var(--color-range-thumb-shadow);
			height: var(--height-range-thumb);
			width: var(--width-range-thumb);
			border-radius: var(--radius-range-thumb);
			background: var(--background-color-range-thumb);
			cursor: pointer;
			appearance: none;
			transform: translateY(-50%);
			margin-top: calc(var(--height-range-track) / 2);
			transition: background-color 0.4s ease-in-out;
		}
		.range input::-moz-range-thumb {
			/*@include range-thumb();*/
			box-sizing: border-box;
			box-shadow: var(--shadow-offset-x-range-thumb) var(--shadow-offset-y-range-thumb) var(--size-range-thumb-shadow) var(--color-range-thumb-shadow);
			height: var(--height-range-thumb);
			width: var(--width-range-thumb);
			border-radius: var(--radius-range-thumb);
			background: var(--background-color-range-thumb);
			cursor: pointer;
		}
		.range input::-ms-thumb {
			/*@include range-thumb();*/
			box-sizing: border-box;
			box-shadow: var(--shadow-offset-x-range-thumb) var(--shadow-offset-y-range-thumb) var(--size-range-thumb-shadow) var(--color-range-thumb-shadow);
			height: var(--height-range-thumb);
			width: var(--width-range-thumb);
			border-radius: var(--radius-range-thumb);
			background: var(--background-color-range-thumb);
			cursor: pointer;
			transition: background-color 0.4s ease-in-out;
		}
		.range .rangeslider-thumb {
			/*@include range-thumb();*/
			box-sizing: border-box;
			box-shadow: var(--shadow-offset-x-range-thumb) var(--shadow-offset-y-range-thumb) var(--size-range-thumb-shadow) var(--color-range-thumb-shadow);
			height: var(--height-range-thumb);
			width: var(--width-range-thumb);
			border-radius: var(--radius-range-thumb);
			background: var(--background-color-range-thumb);
			cursor: pointer;
			position: absolute;
			touch-action: pan-x;
			top: 50%;
			transform: translateY(-50%);
			will-change: left;
			transition: background-color 0.4s ease-in-out;
		}

		.range .range-output {
			position: absolute;
			left: calc((var(--width-range-thumb) - var(--border-width-range-thumb) * 2) / 2);
			top: calc((var(--width-range-thumb) - var(--border-width-range-thumb) * 2) / 2);
			transform-origin: 0 0;
			transition: transform .4s var(--easeOutBack);
			user-select: none;
		}
		.range .range-output .output {
			display: block;
			position: absolute;
			height: var(--height-range-output);
			line-height: var(--height-range-output);
			width: var(--height-range-output);
			//padding: 0 $padding-x-range-output;
			/*top: calc(- (var(--width-range-thumb) / 2) - var(--offset-y-range-output) - var(--size-range-output-arrow));*/
			top: -10px;
			/*transform: translate(-50%, -100%);*/
			transform: translate(-21%, -100%);
			background: var(--dark-color);
			color: var(--light-color);
			border-radius: 5px;
			white-space: nowrap;
			font-weight: bold;
			font-size: 14px;
			text-align: center;
			transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out;
		}
		.range .range-output .output:before {
		  content: "";
		  position: absolute;
		  bottom: -6px;
		  left: 50%;
		  border: 8px solid var(--dark-color);
		  border-bottom: none;
		  border-left-color: transparent;
		  border-right-color: transparent;
		  transform: translateX(-50%);
		  transition: border-color 0.4s ease-in-out;
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
				<div class="length-buttons">
					<button class="active">4</button>
					<button>5</button>
					<button>6</button>
				</div>
				<p>breath pace</p>
			</div>
			<div class="cycle-slider">
				<form oninput="output.value = Math.round(range.valueAsNumber / 1000)">
			    <div class="range">
			      <input name="range" type="range" min="1000" max="10000">
			      <div class="range-output">
			        <output class="output" name="output" for="range">
			          5
			        </output>
			      </div>
			    </div>
			  </form>
				<p>cycle count</p>
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
	<script type="text/javascript" src="./js/RangeSlider.js"></script>
</body>
</html>