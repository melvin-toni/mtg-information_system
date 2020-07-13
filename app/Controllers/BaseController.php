<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Models\Admins;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * * Note :
	 * - 1st line helper is for codeigniter built in helper
	 * - 2nd line helper are for custom helper
	 * 
	 * @var array
	 */
	protected $helpers = [
		'fileincluder'
	];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->validation = \Config\Services::validation();
	}

	protected function initFileIncluded() {
		// helper fileincluder -> env_checker() 
		return [
			'JQUERY' => env_checker()['JQUERY'],
			'POPPER' => env_checker()['POPPER'],
			'TWBS_CSS' => env_checker()['TWBS_CSS'],
			'TWBS_JS' => env_checker()['TWBS_JS'],
			'title' => 'Sistem Informasi'
		];
	}

	public function loginValidation() {
		$model = new Admins();

		$this->validation->setRules([
			'inputUser' => [
				'label' => 'Email', 
				'rules' => 'required',
				'errors' => [
					'required' => '{field} wajib diisi'
				]
			],
			'inputPassword' => [
				'label' => 'Password', 
				'rules' => 'required',
				'errors' => [
					'required' => '{field} wajib diisi'
				]
			]
		]);

		if ($this->validation->withRequest($this->request)->run()) {
			$user = $this->request->getPost('inputUser');
			$pass = $this->request->getPost('inputPassword').getenv('pepper');
			
			$queryResult = $model->getAuthAdmins($user);
			if ((count($queryResult) > 0) && (password_verify($pass, $queryResult[0]->password))) {
				$userData = [
					'username' => $queryResult[0]->username,
					'email' => $queryResult[0]->email,
					'logged_in' => true
				];
				session()->set($userData);
				
				return redirect()->to('/');
			} else {
				session()->setFlashdata('not_found', 'Data pengguna tidak ditemukan');
				return redirect()->to('/login');
			}
		} else {
			return redirect()->back()->withInput();
		}
	}

	protected function isValidUser() {
		return session()->get('logged_in');
	}

	public function logOut() {
		session()->destroy();
		return redirect()->to('/login');
	}

}
