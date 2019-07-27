<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laracasts Assets</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
	<link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans">
	<div id="app">
		<div class="container mx-auto">
			<header class="py-6 mb-8">
				<h1>
				   <img class="img-fluid" src="/images/logo.svg" alt="logo">
				
				</h1>
			</header>
			<main class="flex">
				<aside class="w-1/5">
					<section class="mb-6">
						<h5 class="uppercase font-bold mb-3">Brand</h5>
						<ul class="list-reset" >
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/">Home</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/about">About</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/Logo">Logo</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/Logo-symbol">Logo-symbol</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/Colors">Colors</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black" to="/Typography">Typography</router-link>
							</li>
						</ul >
					</section>
					<section>
						<h5 class="uppercase font-bold mb-3">Doodles</h5>
						<ul  class="list-reset">
							<li class="text-sm leading-loose"><router-link class="text-black" to="/1">Mascots</router-link></li>
							<li class="text-sm leading-loose"><router-link class="text-black" to="/1">Illustrations</router-link></li>
							<li class="text-sm leading-loose"><router-link class="text-black" to="/1">Illustrations</router-link></li>
							<li class="text-sm leading-loose"><router-link class="text-black" to="/1">Illustrations</router-link></li>
							
						</ul>
					</section>
				</aside>
				<div class="primary flex-1">
					<router-view></router-view>
				</div>
			</main>
		</div>	
	</div>
	<script src="/js/app.js"></script>
</body>
</html>
