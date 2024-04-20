<?php

namespace App\Controllers\uangkas;
use App\Models\uangkas\M_model;

class Home extends BaseController
{
    protected function isLoggedIn()
    {
        return session()->has('id');
    }
    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to('uangkas/Home/dashboard');
        }   
    }
	 
	public function logout()
	{
		session()->destroy();
		return redirect()->to('uangkas/Home');
	}
    public function dashboard()
    {
		if(session()->get('id')>0) {
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
		echo view('uangkas/dashboard');
        echo view('uangkas/footer');
	}else{
		return redirect()->to('uangkas/Home');
	}
    }
    // public function reset_password($id)
	// {
	// 	if(session()->get('level')==1){
	// 		$model=new M_model();
	// 		$where=array('id_user'=>$id);
	// 		$user=array('password'=>md5('12345'));
	// 		$model->qedit('user', $user, $where);
	// 		return redirect()->to('/User');
	// 	}else{
	// 		return redirect()->to('/Home');
	// 	}
	// }
// 	public function delete_guru($id)
// {
// 	if(session()->get('level')==1 ||  session()->get('level')==2){
//     $model = new M_model();

//     $guruWhere = array('user' => $id);
//     $guruData = array('deleted_at' => date('Y-m-d H:i:s')); 
//     $model->qedit('guru', $guruData, $guruWhere);

//     $userWhere = array('id_user' => $id);
//     $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
//     $model->qedit('user', $userData, $userWhere);

//     return redirect()->to('uangkas/User/guru');
// }else{
// 	return redirect()->to('uangkas/Home');
// }
// }
   
}
