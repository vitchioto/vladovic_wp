<?php

?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vladimír Vladovič portfólio">
	<meta name="keywords" content="">
	<meta name="author" content="vitchi">
	<meta name="msapplication-TileColor" content="#000">
	<meta name="theme-color" content="#000">
	<?php wp_head(); ?>
	<svg viewBox="0 0 15 15">
		<defs>
	    <clipPath id="icon-download">
				<path d="M7.5 15C3.358 15 0 11.642 0 7.5C0 3.358 3.358 0 7.5 0C11.642 0 15 3.358 15 7.5C15 11.642 11.642 15 7.5 15ZM1.25 7.5C1.25 10.952 4.048 13.75 7.5 13.75C10.952 13.75 13.75 10.952 13.75 7.5C13.75 4.048 10.952 1.25 7.5 1.25C4.048 1.25 1.25 4.048 1.25 7.5ZM10.183 7.058L8.125 9.116V3.75H6.875V9.116L4.817 7.058L3.933 7.942L7.058 11.067L7.5 11.509L7.942 11.067L11.067 7.942L10.183 7.058Z"/>
			</clipPath>
	  </defs>
	</svg>
</head>
<body>
	<header class="header">
		<a href="<?php echo home_url(); ?>" class="logo">
			VLADOVIC.SK
		</a>
		<div class="email">
			vladovic.vladimir@gmail.com
		</div>
		<button class="button button--primary button--contact">
			Contact me
		</button>
	</header>
	<main>