<?php

/**
 * Description of output
 *
 * @author Tel Smith @74656c
 */
class output {

	public $content = '';
	public $output_type = 'html';
	public $render_template = true;

	function __construct($url, $action = null) {
		if (!$action) {
			$action = $url->action;
		}
		if (method_exists($this, $action)) {
			$action = $action;
			$this->$action($url->id);
		}
	}

	function __toString() {
		return $this->content;
	}

}

?>
