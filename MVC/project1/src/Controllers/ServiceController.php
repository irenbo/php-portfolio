<?php
namespace Web\GradController\Controllers;

use Web\GradController\Core\Controller;

class ServiceController extends Controller
{
	public function commonAction(){
		//echo "My blog";
		$content = 'common.php';
		$template = 'template.php';
		$data = [
			'title' => 'Услуги'
		];
		echo $this->renderPage($content, $template, $data);
	}

    public function registrationAction()
    {
        $content = 'registration.php';
        $template = 'template.php';
        $data = [
            'title' => 'Форма регистрации'
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function briefAction()
    {
        $content = 'brief.php';
        $template = 'template.php';
        $data = [
            'title' => 'Бриф на разработку'
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function processingAction()
    {
        $content = 'processing.php';
        $template = 'template.php';
        $data = [
            'title' => 'Форма заявки'
        ];
        echo $this->renderPage($content, $template, $data);
    }
}