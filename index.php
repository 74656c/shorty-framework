<?php

include 'global.php';
$url = new url();
$page = Utilities::NormalizePath($url->page);

/**
 * Build the page templates.
 */
$main_template = new template();
$template = new template();

$nav_template = new template();
$navigation = $nav_template->fetch('navigation.tpl');
$footer_template = new template();
$footer = $footer_template->fetch('footer.tpl');


if(class_exists($page)){
    $parents = class_parents($page);
    if(in_array('output', $parents)){
        $content = new $page();
    }
} else {
	$default = new index($url,$page);
	if(method_exists($default, $page)){
	$content = $default;
	$title = $default->title;
	}
	if(!$content){
		if(file_exists(_TEMPLATE_DIR . $page . '.tpl')){
			$content = $template->fetch($page . '.tpl');
		} else {
			if(!$page){
				$content = $template->fetch('home.tpl');
			}
		}
	}
}

if(!$content){
    Error::raise('404');
}

//if (!$content->render_template) {
//	if ($content->output_type == 'json') {
//		header('Content-Type:text/json');
//		$output = json_encode($content->content);
//	}
//	die($output);
//}

$main_template
        ->assign('navigation', $navigation)
        ->assign('base_href', _SITE_URL)
        ->assign('title', $title)
        ->assign('content', $content)
        ->assign('footer', $footer);
$main_template->display('index.tpl');
?>