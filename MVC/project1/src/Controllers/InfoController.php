<?php
namespace Web\GradController\Controllers;

use Web\GradController\Core\Controller;

class InfoController extends Controller
{
		public function blogAction(){
		//echo "My blog";
		$content = 'blog.php';
		$template = 'template.php';
		$css = ' ';
		$data = [
			'title' => 'Мой блог',
			'css' => $css
		];
		echo $this->renderPage($content, $template, $data);
	}
	
	public function contactsAction (){
		// echo "Если надпись видна, то рендеринг работает:)";
		$content = 'contacts.php';
		$template = 'template.php';
		$css = ' ';
		$data = [
			'title' => 'Контакты',
			'css' => $css
		];
		echo $this->renderPage($content, $template, $data);
	}
}