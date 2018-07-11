<?php 
namespace App\Controller;

Class UsersController extends AppController{
	public function index()
	{
		$this->loadComponent('Paginator');
		$users = $this->Paginator->paginate($this->Users->find());
		$this->set(compact('Users'));
	}
}
