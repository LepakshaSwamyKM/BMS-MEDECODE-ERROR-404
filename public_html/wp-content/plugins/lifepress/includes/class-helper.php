<?php
/**
 *  Helper functions
 *	@version 2.0.2
 */

class LIFEPRESS_Helper{

	// sanitization
		public function recursive_sanitize_array_fields($array){
			if(is_array($array)){
				foreach ( $array as $key => $value ) {
		        	if ( is_array( $value ) ) {
		            	$value = $this->recursive_sanitize_array_fields($value);
		        	}
		        	else {
		            	$value = sanitize_text_field( $value );
		        	}
	    		}
	    	}else{
	    		return sanitize_text_field( $array );	    		
	    	}

	    	return $array;
		}	

	// color calculations
		function is_light_color($hex){
			$hex = str_replace( '#', '', $hex );

			$c_r = hexdec( substr( $hex, 0, 2 ) );
			$c_g = hexdec( substr( $hex, 2, 2 ) );
			$c_b = hexdec( substr( $hex, 4, 2 ) );

			$brightness = ( ( $c_r * 299 ) + ( $c_g * 587 ) + ( $c_b * 114 ) ) / 1000;

			return $brightness > 155? false: true;  
		}

	// convert text to a slug
		function get_slug($string){
			return sanitize_title( $string);
		}
}