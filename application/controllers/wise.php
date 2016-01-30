<?php

/**
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function bingo()
	{
            $this->data['pagebody'] = 'justone';	
            $record = $this->quotes->get('6');
            $this->data = array_merge($this->data, $record);
            $this->render();
	}

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */