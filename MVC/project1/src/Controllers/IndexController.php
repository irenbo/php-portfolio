<?php
namespace Web\GradController\Controllers;

use Web\GradController\Core\Controller;
//use Web\GradController\Models\PictureRepository;

class IndexController extends Controller
{
	public function indexAction(){
		// echo "This is a main page";
		$content = 'main.php';
		$template = 'template.php';
		$css = '/css/main-page.css';
		$data = [
			'title' => 'Главная',
			'css' => $css
		];
		echo $this->renderPage($content, $template, $data);
	}
}