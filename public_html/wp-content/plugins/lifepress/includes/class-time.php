<?php
/**
 * Time object
 * @version 2.0.3
 */

class LIFEPRESS_Time{
	public $GMT;
	public $timezone;
	public $timezone0, $time_format, $current_time, $date_format;

	public function __construct(){
		// timezones
			$this->GMT = $G = get_option('gmt_offset');

			//date_default_timezone_set("UTC"); 

			$this->current_time = current_time('timestamp');
			$this->time_format = get_option('time_format');
			$this->date_format = get_option('date_format');

			$tzstring = get_option( 'timezone_string' );
    		$offset   = get_option( 'gmt_offset' );
    		if( empty( $tzstring ) && 0 != $offset && floor( $offset ) == $offset ){
		        $offset_st = $offset > 0 ? "-$offset" : '+'.absint( $offset );
		        $tzstring  = 'Etc/GMT'.$offset_st;
		    }
		    if( empty( $tzstring ) ){    $tzstring = 'UTC';    }
		    $this->timezone = new DateTimeZone( $tzstring );
			$this->timezone0 = new DateTimeZone( 'UTC' );
	}
}