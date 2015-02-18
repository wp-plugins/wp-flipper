<?php
/*
Plugin Name: Wordpress Flipper-Flip any contents or images
Plugin URI: https://wordpress.org/plugins/wp-flipper/
Version:0.1
Description: Shows a back side of  product on mouse hover.Show  your contents both front and back side view.
Author: srinivasan
Author URI: https://github.com/wp-flipper
Text Domain:  Wordpress-Flipper
Domain Path: /languages/

	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

/**
 * Enqueue plugin style-file
 */
function prefix_add_my_stylesheet() {
    
    wp_enqueue_style( 'prefix-style' );
}

function flipper_front_func( $atts, $content = null ) {
$width='';
$height='';
$bgcolor='';

//if($atts["width"]!="")
//{
$width=$atts["width"];
//}
//if($atts["height"]!="")
//{
$height=$atts["width"];
//}
$bgcolor=$atts["bgcolor"];


   return ' <style>
   		.flip-container {
			-webkit-perspective: 1000;
			-moz-perspective: 1000;
			-ms-perspective: 1000;
			perspective: 1000;

			-ms-transform: perspective(1000px);
			-moz-transform: perspective(1000px);
    			-moz-transform-style: preserve-3d; 
    			-ms-transform-style: preserve-3d; 

			
		}

			/*
			.flip-container:hover .flipper, .flip-container.hover .flipper, #flip-toggle.flip .flipper {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				-ms-transform: rotateY(180deg);
				transform: rotateY(180deg);
				filter: FlipH;
    			-ms-filter: "FlipH";
			}
			*/


			/* START: Accommodating for IE */
			.flip-container:hover .back, .flip-container.hover .back {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
}

.flip-container:hover .front, .flip-container.hover .front {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}
		
		/* END: Accommodating for IE */

		.flip-container, .front, .back {
			width: '.$width.'px;
			height: '.$height.'px;
			
		}

		.flipper {
			-webkit-transition: 0.6s;
			-webkit-transform-style: preserve-3d;
			-ms-transition: 0.6s;

			-moz-transition: 0.6s;
			-moz-transform: perspective(1000px);
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;

			transition: 0.6s;
			transform-style: preserve-3d;

			position: relative;
		}

		.front, .back {
		padding:10px;
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			backface-visibility: hidden;

		    -webkit-transition: 0.6s;
		    -webkit-transform-style: preserve-3d;
		    -webkit-transform: rotateY(0deg);

		    -moz-transition: 0.6s;
		    -moz-transform-style: preserve-3d;
		    -moz-transform: rotateY(0deg);

		    -o-transition: 0.6s;
		    -o-transform-style: preserve-3d;
		    -o-transform: rotateY(0deg);

		    -ms-transition: 0.6s;
		    -ms-transform-style: preserve-3d;
		    -ms-transform: rotateY(0deg);

		    transition: 0.6s;
		    transform-style: preserve-3d;
		    transform: rotateY(0deg);

			position: absolute;
			top: 0;
			left: 0;
		}

		.front {
			-webkit-transform: rotateY(0deg);
			-ms-transform: rotateY(0deg);
			background: '.$bgcolor.';
			z-index: 2;
				padding:10px;
		}

		

		.front .name {
			font-size: 2em;
			display: inline-block;
			background: rgba(33, 33, 33, 0.9);
			color: #f8f8f8;
			font-family: Courier;
			padding: 5px 10px;
			border-radius: 5px;
			bottom: 60px;
			left: 25%;
			position: absolute;
			text-shadow: 0.1em 0.1em 0.05em #333;
			display: none;

			-webkit-transform: rotate(-20deg);
			-moz-transform: rotate(-20deg);
			-ms-transform: rotate(-20deg);
			transform: rotate(-20deg);
		}

		.back-logo {
			position: absolute;
			top: 40px;
			left: 90px;
			width: 160px;
			height: 117px;
			background: url(logo.png) 0 0 no-repeat;
		}

		.back-title {
			font-weight: bold;
			color: #00304a;
			position: absolute;
			top: 180px;
			left: 0;
			right: 0;
			text-align: center;
			text-shadow: 0.1em 0.1em 0.05em #acd7e5;
			font-family: Courier;
			font-size: 22px;
		}

		.back p {
			position: absolute;
			bottom: 40px;
			left: 0;
			right: 0;
			text-align: center;
			padding: 0 20px;
			font-size: 18px;
		}

		/* vertical */
		.vertical.flip-container {
			position: relative;
		}

			.vertical .back {
				-webkit-transform: rotateX(180deg);
				-moz-transform: rotateX(180deg);
				-ms-transform: rotateX(180deg);
				transform: rotateX(180deg);
			}

			.vertical.flip-container .flipper {

				-webkit-transform-origin: 100% 213.5px;
				-moz-transform-origin: 100% 213.5px;
				-ms-transform-origin: 100% 213.5px;
				transform-origin: 100% 213.5px;
			}

			/*
			.vertical.flip-container:hover .flipper {
				-webkit-transform: rotateX(-180deg);
				-moz-transform: rotateX(-180deg);
				-ms-transform: rotateX(-180deg);
				transform: rotateX(-180deg);
			}
			*/

			/* START: Accommodating for IE */
			.vertical.flip-container:hover .back, .vertical.flip-container.hover .back {
			    -webkit-transform: rotateX(0deg);
			    -moz-transform: rotateX(0deg);
			    -o-transform: rotateX(0deg);
			    -ms-transform: rotateX(0deg);
			    transform: rotateX(0deg);
			}

			.vertical.flip-container:hover .front, .vertical.flip-container.hover .front {
			    -webkit-transform: rotateX(180deg);
			    -moz-transform: rotateX(180deg);
			    -o-transform: rotateX(180deg);
			    transform: rotateX(180deg);
			}</style>
   <div class="flip-container" ontouchstart="this.classList.toggle("hover");">
		<div class="flipper">
			<div class="front">				
			' . $content . '</div>';
}

function flipper_back_func( $atts, $content = null ) {
$bgcolor='';
$bgcolor=$atts["bgcolor"];
   return '<style>
.back {
			background: '.$bgcolor.';
			-webkit-transform: rotateY(-180deg);
		    -moz-transform: rotateY(-180deg);
		    -o-transform: rotateY(-180deg);
		    -ms-transform: rotateY(-180deg);
		    transform: rotateY(-180deg);
		}
</style>
<div class="back">
				 '. $content . '</div></div></div></div>';
}
add_shortcode( 'flipper_front', 'flipper_front_func' );
add_shortcode( 'flipper_back', 'flipper_back_func' );


