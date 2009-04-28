<?php

/**
 * Table Definition for an leaflet image
 */

require_once('init.php');
require_once ('tablebase.php');

class tableclass_leaflet_image extends tablebase {

    public $__table = 'leaflet_image';
    public $leaflet_image_id;
    public $leaflet_id;
    public $image_key;
    public $sequence;

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('tableclass_leaflet_image',$k,$v); }

	/* Definition */
   function table() {
        return array(
            'leaflet_image_id'   => DB_DATAOBJECT_INT,
            'leaflet_id'   			=> DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
            'image_key'           => DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
            'sequence'           => DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL
        );
    }

	/* Links */
	public function links (){
	    return array(
			"leaflet_id" => "leaflet:leaflet_id"
			);
	}

	/* Keys */
    function keys() {
        return array('leaflet_image_id');
    }

}