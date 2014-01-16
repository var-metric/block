<?php defined('SYSPATH') OR die('No direct script access.');

class Block {
	
	public static function head($title = 'Заголовок', $description = 'Описание', $style = array(), $script = array()){
		$view = View::factory('block/head');

		$view->title = $title;
		$view->description = $description;
		$view->style = $style;
		$view->script = $script;

		return $view->render();
	}

	public static function  footer(){
		$view = View::factory('block/footer');

		return $view->render();
	}

}