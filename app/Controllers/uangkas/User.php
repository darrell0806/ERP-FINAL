<?php

namespace App\Controllers\uangkas;
use App\Models\uangkas\M_model;
class User extends BaseController
{
    public function index()
    {
		if(session()->get('level')==1){
        $model=new M_model();
			$on='user.level=level.id_level';
			$data['a'] = $model->join2('user', 'level',$on);
            echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/user/view',$data);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function guru()
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model=new M_model();
        $data['a'] = $model->tampil('guru');
        echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/user/guru',$data);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function tambah_guru()
    {
		if(session()->get('level')==1 ||  session()->get('level')==2){
        $model=new M_model();
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo  view('uangkas/user/tambah_guru');
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function aksi_tambah_guru()
	{
		$nik= $this->request->getPost('nik');
        $nama= $this->request->getPost('nama_guru');
		$nohp= $this->request->getPost('nohp');
		$a= $this->request->getPost('username');
		$b= $this->request->getPost('password');
        $foto= $this->request->getFile('foto');
		if($foto->isValid() && ! $foto->hasMoved())
		{
			$imageName = $foto->getName();
			$foto->move('images/',$imageName);
		}

		$data1=array(
			'username'=>$a,
			'password'=>md5($b),
			'level'=>'3',
			'foto'=>$imageName,
            'created_at'=>date('Y-m-d H:i:s'),
			'deleted_at' => null
			
		);
		$darrel=new M_model();
		$darrel->simpan('user', $data1);
		$where=array('username'=>$a);
		$ae=$darrel->getWhere2('user', $where);
		$id = $ae['id_user'];
		$data2=array(
			'nik'=>$nik,
			'nama_guru'=>$nama,
			'nohp'=>$nohp,
			'user'=>$id,
            'created_at'=>date('Y-m-d H:i:s')
		);
		$darrel->simpan('guru', $data2);

		return redirect()->to('/User/guru');
	
	}
	public function siswa()
    {
        $level = session()->get('level');
        $id_user = session()->get('id'); 

		$model = new M_model();

        if ($level == 3) {
            $data['a'] = $model->getSiswaByGuruId($id_user);
        } else {
            $data['a'] = $model->getAllPData();
        }
            echo view('uangkas/header');
            echo view('uangkas/menuutama');
            echo view('uangkas/user/siswa', $data);
            echo view('uangkas/footer');
        
    }

    public function tambah_siswa()
    {
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3){
        $model=new M_model();
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			$data['a'] = $model->tampil('kelas');
			$data['c'] = $model->tampil('jurusan');
			$data['e'] = $model->tampil('rombel');
			echo  view('uangkas/user/tambah_siswa', $data);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
    }
    public function aksi_tambah_siswa()
	{
		$a=$this->request->getPost('nis');
		$b=$this->request->getPost('nama');
		$c=$this->request->getPost('kelas');
		$d=$this->request->getPost('jurusan');
		$e=$this->request->getPost('rombel');
		$f= $this->request->getPost('username');
		$g= $this->request->getPost('password');
        $foto= $this->request->getFile('foto');
		if($foto->isValid() && ! $foto->hasMoved())
		{
			$imageName = $foto->getName();
			$foto->move('images/',$imageName);
		}
		$data1=array(
			'username'=>$f,
			'password'=>md5($g),
			'level'=>'5',
			'foto'=>$imageName,
            'created_at'=>date('Y-m-d H:i:s'),
			'deleted_at' => null
			
		);
		$darrel=new M_model();
		$darrel->simpan('user', $data1);
		$where=array('username'=>$f);
		$ae=$darrel->getWhere2('user', $where);
		$id = $ae['id_user'];
		$simpan=array(
			'nis'=>$a,
			'nama'=>$b,
			'kelas'=>$c,
			'jurusan'=>$d,
			'rombel'=>$e,
			'user'=>$id,
			'created_at'=>date('Y-m-d H:i:s'),
			
		);
		$model=new M_model();
		$model->simpan('siswa',$simpan);
		return redirect()->to('/User/siswa');
	}
	// public function bendahara()
    // {
    //     $model=new M_model();
	// 	$on='siswa.user=user.id_user';
	// 	$data['a'] = $model->jointa('siswa', 'user',$on);
    //     echo view('header');
	// 		echo view('menuutama');
	// 		echo view('bendahara/view',$data);
	// 		echo view('footer');
    // }
    public function tambah_bendahara()
	{
		$level = session()->get('level');
        $id_user = session()->get('id'); // Asumsi ID user yang masuk disimpan dalam data sesi 'id_user'.

		$model = new M_model();

        if ($level == 3) {
            $data['a'] = $model->getSiswaByGuruId($id_user);
        } else {
            $data['a'] = $model->getAllPData();
        }
            echo view('uangkas/header');
            echo view('uangkas/menuutama');
            echo view('uangkas/bendahara/tambah', $data);
            echo view('uangkas/footer');
	}
	public function edit_guru($user)
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
			$where=array('user'=>$user);
			$where2=array('id_user'=>$user);
			$data['jojo']=$model->getWhere('guru',$where);
			$data['rizkan']=$model->getWhere('user',$where2);
			echo view('header');
			echo view('menuutama');
			echo view('user/edit_guru',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	public function aksi_edit_guru()
{
    $nik = $this->request->getPost('nik');
    $a = $this->request->getPost('username');
    $nama = $this->request->getPost('nama_guru');
    $nohp = $this->request->getPost('nohp');
    $id = $this->request->getPost('id');
    $id2 = $this->request->getPost('id2');
    $foto = $this->request->getFile('foto');

    $imageName = null; 

    if ($foto && $foto->isValid() && !$foto->hasMoved()) {
        $imageName = $foto->getName();
        $foto->move('images/', $imageName);
    }

    $where = array('id_user' => $id);
    $data1 = array(
        'username' => $a,
        'updated_at' => date('Y-m-d H:i:s'),
		'deleted_at' => null
    );

    if ($imageName) {
        $data1['foto'] = $imageName;
    }

    $darrel = new M_model();
    $darrel->qedit('user', $data1, $where);
    $where2 = array('user' => $id2);
    $data2 = array(
        'nik' => $nik,
        'nama_guru' => $nama,
        'nohp' => $nohp,
        'updated_at' => date('Y-m-d H:i:s')
    );
    $darrel->qedit('guru', $data2, $where2);
    return redirect()->to('/User/guru');
}

public function edit_siswa($user)
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3){
			$model=new M_model();
			$where=array('user'=>$user);
			$where2=array('id_user'=>$user);
			$data['a']=$model->tampil('kelas');
			$data['c']=$model->tampil('jurusan');
			$data['e']=$model->tampil('rombel');
			$data['jojo']=$model->getWhere('siswa',$where);
			$data['rizkan']=$model->getWhere('user',$where2);
			$data['id_siswa'] = $user;
			echo view('header');
			echo view('menuutama');
			echo view('user/edit_siswa',$data);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
		}
	}
	public function aksi_edit_siswa()
{
	$nis=$this->request->getPost('nis');
	$b=$this->request->getPost('nama');
	$c=$this->request->getPost('kelas');
	$d=$this->request->getPost('jurusan');
	$e=$this->request->getPost('rombel');
	$a= $this->request->getPost('username');
	$id = $this->request->getPost('id');
    $id2 = $this->request->getPost('id2');
	$foto= $this->request->getFile('foto');

    $imageName = null; 

    if ($foto && $foto->isValid() && !$foto->hasMoved()) {
        $imageName = $foto->getName();
        $foto->move('images/', $imageName);
    }

    $where = array('id_user' => $id);
    $data1 = array(
        'username' => $a,
        'updated_at' => date('Y-m-d H:i:s'),
		'deleted_at' => null
    );

    if ($imageName) {
        $data1['foto'] = $imageName;
    }

    $darrel = new M_model();
    $darrel->qedit('user', $data1, $where);
    $where2 = array('user' => $id2);
    $data2 = array(
        'nis' => $nis,
        'nama' => $b,
        'kelas' => $c,
		'jurusan' => $d,
		'rombel' => $e,
        'updated_at' => date('Y-m-d H:i:s')
    );
    $darrel->qedit('siswa', $data2, $where2);
    return redirect()->to('/User/siswa');
}
public function delete_siswa($id)
{
	if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3){
    $model = new M_model();

    $guruWhere = array('user' => $id);
    $guruData = array('deleted_at' => date('Y-m-d H:i:s')); 
    $model->qedit('siswa', $guruData, $guruWhere);

    $userWhere = array('id_user' => $id);
    $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
    $model->qedit('user', $userData, $userWhere);

    return redirect()->to('/User/siswa');
}else{
	return redirect()->to('/Home');
}
}

public function aksi_bendahara()
{
    $id_siswa = $this->request->getPost('bendahara'); 
    $db = \Config\Database::connect();

    $tableUser = 'user';
    $tableSiswa = 'siswa';
    $columnToUpdate = 'level';
    $newLevelValue = 4;

    $sql = "UPDATE $tableUser AS u
            JOIN $tableSiswa AS s ON u.id_user = s.user
            SET u.$columnToUpdate = $newLevelValue,
                u.deleted_at = NULL
            WHERE s.id_siswa = ?";

    $db->query($sql, [$id_siswa]);
    return redirect()->to(base_url('/User/siswa'));
}


}







