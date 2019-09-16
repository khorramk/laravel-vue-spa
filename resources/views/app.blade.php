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
		<header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
				<h1>
				   <img class="img-fluid" src="/images/logo.svg" alt="logo">
				</h1>
		</header>
		<div class="container px-8 pb-10">
			<main class="flex">
				<aside class="w-64 pt-8 border-2 px-5 mx-2 rounded">
					<section class="mb-10 px-12">
						<h5 class="uppercase font-bold mb-3 text-base">clients info</h5>
						<ul class="list-reset" >
							<li class="text-sm leading-loose ">
								<router-link class="text-black rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3"  to="/" exact>⌂</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3 mt-3"  to="/about">?</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3"  to="/CreateClients">+</router-link>
							</li>
							<li class="text-sm leading-loose">
								<router-link class="text-black rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3"  to="/UpdateClients">🗘</router-link>
							</li>
						</ul>
					</section>
					<section class="mb-10 px-12">
						    <h5 class="uppercase font-bold mb-3 text-base">Tokens</h5>
							<ul class="list-reset">
								<li class="text-sm leading-loose rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3">
									<router-link class="text-black"  to="/site-stats">🧔</router-link>
								</li>
								<li class="text-sm leading-loose rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3">
									<router-link class="text-black"  to="/achievements">✓</router-link>
								</li>
								<li class="text-sm leading-loose rounded-full w-16 h-16 flex items-center justify-center border-2 text-2xl mt-3">
									<router-link class="text-black"  to="/getToken">🔑</router-link>
								</li>
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
