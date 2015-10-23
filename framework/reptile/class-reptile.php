<?php 

class Reptile {


	private $theme;


	private $data;


	public $includes = array();


	public function __construct ( $theme = null ) {


		// 	Extract all theme args
		if ( ! is_null( $theme ) ) {

			foreach ( $theme as $key => $value ) {

				if ( ! $this->$key ) {

					$this->$key = $value;

				}

			}

		}

		
		// 	Load Supports File
		$this->load_includes( $this->includes );


		// 	Run Supports File
		$this->run_includes();


	}


	public function __get ( $property ) {


        if ( isset( $this->data[$property] ) ) {

        	return $this->data[$property];

        }


        return false;


    }


    public function __set ( $property, $value ) {


        $this->data[$property] = $value;


    }


    public function load_includes ( $args = null ) {


    	foreach ( $args as $key => $value ) {

	    	
	    	if ( file_exists( $value ) ) {

		    	// 	Loading includes
				require_once( $value );

				$this->includes[$key] = $value;

			}


    	}


    }


    public function run_includes () {


    	$inc = $this->includes;
    	

    	if ( ! is_null( $inc['reptile_template'] ) ) {

    		$this->templates = new Reptile_Template();

    	}


    }


}
