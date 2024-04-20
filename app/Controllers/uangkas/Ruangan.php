<?php

namespace App\Controllers\uangkas;
use App\Models\uangkas\M_model;

class Ruangan extends BaseController
{
    public function index()
    { 
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model=new M_model();
			$data['a'] = $model->tampil('kelas');
            echo view('header');
			echo view('menuutama');
			echo view('ruangan/v_kelas',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function jurusan()
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model=new M_model();
			$data['a'] = $model->tampil('jurusan');
            echo view('header');
			echo view('menuutama');
			echo view('ruangan/v_jurusan',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function rombel()
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$on='rombel.guru=guru.id_guru';
			$data['a'] = $model->join2('rombel', 'guru',$on);
            echo view('header');
			echo view('menuutama');
			echo view('ruangan/v_rombel',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function tambah_rombel()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$data['g'] = $model->tampil('guru');
			echo view('header');
			echo view('menuutama');
			echo view('ruangan/tambah_rombel',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
   
    public function aksi_tambah_rombel()
    {
        $a=$this->request->getPost('nama_rombel');
		$b=$this->request->getPost('guru');

		$simpan=array(
			'nama_rombel'=>$a,
			'guru'=>$b,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('rombel',$simpan);
		return redirect()->to('/Ruangan/rombel');
    }
    public function tambah_jurusan()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			echo view('header');
			echo view('menuutama');
			echo view('ruangan/tambah_jurusan');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
   
    public function aksi_tambah_jurusan()
    {
        $a=$this->request->getPost('nama_jurusan');

		$simpan=array(
			'nama_jurusan'=>$a,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('jurusan',$simpan);
		return redirect()->to('/Ruangan/jurusan');
    }
    public function tambah_kelas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			echo view('header');
			echo view('menuutama');
			echo view('ruangan/tambah_kelas');
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
   
    public function aksi_tambah_kelas()
    {
        $a=$this->request->getPost('nama_kelas');

		$simpan=array(
			'nama_kelas'=>$a,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('kelas',$simpan);
		return redirect()->to('/Ruangan');
    }
	public function edit_kelas($id)
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$where=array('id_kelas'=>$id);
			echo view('header');
			echo view('menuutama');
			$data['jojo']=$model->getWhere('kelas',$where);
			echo  view('ruangan/edit_kelas',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	public function aksi_edit_kelas()
	{
		
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('nama_kelas');


		$where=array('id_kelas'=>$id);
		$simpan=array(
			'nama_kelas'=>$a,
			'updated_at' => date('Y-m-d H:i:s')
	
		);
		$model=new M_model();
		$model->qedit('kelas',$simpan, $where);
		return redirect()->to('/Ruangan');

	}
	public function delete_kelas($id)
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model = new M_model();
            $userWhere = array('id_kelas' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('kelas', $userData, $userWhere);
		    return redirect()->to('/Ruangan');
		}else{
			return redirect()->to('/Home');
		}
    }
	public function edit_jurusan($id)
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$where=array('id_jurusan'=>$id);
			echo view('header');
			echo view('menuutama');
			$data['jojo']=$model->getWhere('jurusan',$where);
			echo  view('ruangan/edit_jurusan',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}

	}
	public function aksi_edit_jurusan()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('nama_jurusan');


		$where=array('id_jurusan'=>$id);
		$simpan=array(
			'nama_jurusan'=>$a,
			'updated_at' => date('Y-m-d H:i:s')
	
		);
		$model=new M_model();
		$model->qedit('jurusan',$simpan, $where);
		return redirect()->to('/Ruangan/jurusan');

	}
	public function delete_jurusan($id)
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model = new M_model();
            $userWhere = array('id_jurusan' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('jurusan', $userData, $userWhere);
		    return redirect()->to('/Ruangan/jurusan');
		}else{
			return redirect()->to('/Home');
		}
    }
	public function edit_rombel($id)
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$data['g']=$model->tampil('guru');
			$where=array('id_rombel'=>$id);
			echo view('header');
			echo view('menuutama');
			$data['jojo']=$model->getWhere('rombel',$where);
			echo  view('ruangan/edit_rombel',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}

	}
	public function aksi_edit_rombel()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('nama_rombel');
		$b=$this->request->getPost('guru');


		$where=array('id_rombel'=>$id);
		$simpan=array(
			'nama_rombel'=>$a,
			'guru'=>$b,
			'updated_at' => date('Y-m-d H:i:s')
	
		);
		$model=new M_model();
		$model->qedit('rombel',$simpan, $where);
		return redirect()->to('/Ruangan/rombel');

	}
	public function delete_rombel($id)
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model = new M_model();
            $userWhere = array('id_rombel' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('rombel', $userData, $userWhere);
		    return redirect()->to('/Ruangan/rombel');
		}else{
			return redirect()->to('/Home');
		}
    }
	
}