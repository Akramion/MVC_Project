<?php 
namespace application\controllers;
use application\core\Controller;
use application\lib\Db;
/**
 * 
 */
class AccountController extends Controller
{
	public function loginAction()
	{
		$db = new Db();
		$vars = [
			'name' => 'Alex'
		];
		$this->view->render('main', $vars);
	}

	public function registerAction()
	{
		echo "регистрация";
	}
}

 ?>