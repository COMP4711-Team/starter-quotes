<?php

/**
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$record = $this->quotes->first();
		$this->data = array_merge($this->data, $record);
                $this->render();
	}
        
        function zzz()
        {
            $this->data['pagebody'] = 'justone';
            $record = $this->quotes->get('1');
            $this->data = array_merge($this->data, $record);
            $this->render();
        }
        
        function gimmie($choice)
        {
            $this->data['pagebody'] = 'justone';
            $record = $this->quotes->get($choice);
            $this->data = array_merge($this->data, $record);
            $this->render(); 
        }
}

/* End of file First.php */
/* Location: application/controllers/First.php */