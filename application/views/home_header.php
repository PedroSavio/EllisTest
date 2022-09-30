<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">

	*{
		padding: 0px;
		margin: 0px;
		box-sizing: border-box;
	}

	nav {
		display: flex;
		justify-content: space-around;
		align-items: center;
		min-height: 8vh;
		background-color: #35b8b0;
	}

	.logo {
		color: #444;
		text-transform: uppercase;
		font-size: 20px;
		letter-spacing: 2px;
	}

	.nav-links{
		display: flex;
		justify-content: space-around;
		width: 30%;
	}

	.nav-links li{
		list-style: none;
	}

	.nav-links a{
		color: #444;
		text-decoration: none;
		letter-spacing: 2px;
		font-size: 17px;
		font-weight: bold;
		padding: 13px 13px;
		border-radius: 3px;
		text-transform: uppercase;
	}

	.burger{
		display: none;
		cursor: pointer;
	}

	.burger div{
		width: 25px;
		height: 2px;
		background-color: #444;
		margin: 5px;
	}

	@media screen and (max-width: 1024px){
		.nav-links {
			width: 50%;
		}
	}

	@media screen and (max-width: 768px){
		body{
			overflow-x: hidden;
		}
		.nav-links {
			position: absolute;
			right: 0px;
			height: 50vh;
			top: 8vh;
			background-color: #35b8b0;
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 40%;
			transform: translateX(100%);
			transition: transform 0.5s ease-in;
		}
		.nav-links li{
			opacity: 0;
		}
		.burger{
			display: block;
		}
	}

	.nav-active{
		transform: translateX(0%);
	}

	@keyframes navLinkFade{
		from{
			opacity: 0;
			transform: translateX(50px);

		}to{
			opacity: 1;
			transform: translateX(0px);
		}
	}

	.toogle .line1{
		transform: rotate(-45deg) translate(-5px, 6px);
	}

	.toogle .line2{
		opacity: 0;
	}

	.toogle .line3{
		transform: rotate(-45deg) translate(-5px, 6px);
	}

	</style>
</head>
<body>
	<nav>
		<div class="logo">
			<h1>EllisDev</h1>
		</div>
	
		<ul class="nav-links">
			<li><a href="#">Home</a></li>
			<li><a href="#">Empresa</a></li>
			<li><a href="#">Serviços</a></li>
			<li><a href="#">Contatos</a></li>
		</ul>

		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	

	</nav>
</body>

	<script>
		const navSlide = () => {
			const burger = document.querySelector('.burger');
			const nav = document.querySelector('.nav-links');
			const nLinks = document.querySelectorAll('.nav-links li');
			burger.addEventListener('click', ()=>{
				nav.classList.toggle('nav-active');
			
				nLinks.forEach((link,index) =>{
					if(link.style.animation){
						link.style.animation = '';
					}else{
						link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`
					}
				});
			});
			burger.classList.toggle('toggle');
		}
		navSlide();
	</script>
</html>