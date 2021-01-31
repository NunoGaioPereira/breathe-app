<!DOCTYPE html>
<html>
<head>
	<title></title>
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