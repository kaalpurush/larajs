<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	protected $layout = 'layouts/main';
	
	public function getList()
	{
		$users=User::all();
		if($users)
			return Response::json($users->toArray());
		return null;
	}	
	
	public function getUser($id)
	{
		$user=User::find($id);
		if($user)
			return Response::json(User::find($id)->toArray());
		return null;
	}
	
	public function deleteUser($id)
	{
		$user=User::find($id);
		if($user)
			return (int)$user->delete();
		return null;
	}
        
	public function postUser()
	{       
                $post=Input::get();                
                $user=new User;
                $user->$post['name']=$post['value'];
                try{
                    $result=$user->save();
                }catch(Exception $e){return 0;}
                return $result?$user->id:0;
	}
        
	public function putUser($id)
	{       
                $post=Input::get();
                $post = $post[0];
                $user=User::find($id);
                $user->$post['name']=$post['value'];
                $user->save();
		return $user->id;
	}
	
	public function getIndex()
	{
		$this->layout->content = View::make('home/index');
	}
	
	public function getKendo()
	{
		$this->layout->content = View::make('home/kendo');
	}
	

}