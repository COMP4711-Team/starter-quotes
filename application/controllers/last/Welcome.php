<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$record = $this->quotes->last();
		
		$this->data = array_merge($this->data, $record);
                $this->data['pagebody'] = 'justone';	

		$this->render();
	}
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
