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
	<svg viewBox="-0.938 0 15 15">
		<defs>
	    <clipPath id="icon-copy">	
				<path d="m12.713 1.932-1.52-1.52A1.406 1.406 0 0 0 10.199 0H5.156C4.379 0 3.75.63 3.75 1.406v1.406H1.406C.629 2.812 0 3.442 0 4.218v9.375c0 .777.63 1.406 1.406 1.406h6.563c.777 0 1.406-.63 1.406-1.406v-1.406h2.344c.777 0 1.406-.63 1.406-1.406V2.926a1.406 1.406 0 0 0-.412-.994zm-4.92 11.662H1.582a.176.176 0 0 1-.176-.176V4.395a.176.176 0 0 1 .176-.176H3.75v6.563c0 .777.63 1.406 1.406 1.406h2.813v1.23a.176.176 0 0 1-.176.176zm3.75-2.813H5.332a.176.176 0 0 1-.176-.176V1.582a.176.176 0 0 1 .176-.176h3.105v2.578c0 .388.315.703.703.703h2.578v5.918a.176.176 0 0 1-.176.176zm.176-7.5H9.844V1.406h.282c.047 0 .091.019.124.051l1.417 1.417a.176.176 0 0 1 .051.124v.283z"/>
			</clipPath>
	  </defs>
	</svg>
	<svg viewBox="0 0 24 24">
		<defs>
	    <clipPath id="icon-back">	
				<path d="M8.62 15.423C8.387 15.628 8.031 15.604 7.827 15.37L2.577 9.37C2.391 9.158 2.391 8.842 2.577 8.63L7.827 2.63C8.031 2.396 8.387 2.372 8.62 2.577C8.854 2.781 8.878 3.137 8.673 3.37L4.24 8.438L15 8.438C15.311 8.438 15.563 8.689 15.563 9C15.563 9.311 15.311 9.563 15 9.563L4.24 9.563L8.673 14.63C8.878 14.863 8.854 15.219 8.62 15.423Z"/>
			</clipPath>
	  </defs>
	</svg>
</head>
<body>
	<header class="header">
		<?php if (!is_front_page()) { ?>
			<a href="<?php echo home_url(); ?>" class="wp-block-button__link back"></div>
		<?php } ?>
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