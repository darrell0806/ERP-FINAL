<?php

namespace App\Controllers\uangkas;
use App\Models\uangkas\M_model;

class Transaksi extends BaseController
{
    public function index()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id'); 
    
        $model = new M_model();
    
        if ($userLevel == 3) {
            $data['a'] = $model->getPaymentDataByUserId($userId);
        } elseif ($userLevel == 6) {
            // Modify this line to fetch data for level 4 with the same rombel
            $data['a'] = $model->getPaymentDataByLoggedInStudent($userId);
        } else {
            $data['a'] = $model->getAllPaymentData();
        }
    
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pembayaran', $data);
        echo view('uangkas/footer');
    }
    
    
    
    

    public function tambah_pembayaran()
    {
        if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
            $model=new M_model();
            $level = session()->get('level');
            $userId = session()->get('id'); // Asumsi ID user yang masuk disimpan dalam data sesi 'id_user'.
    
            $model = new M_model();
    
            if ($level == 6) {
                $data['a'] = $model->getPaymentDataByLoggedInStudentpen($userId);
            }  elseif ($level == 3) {
                // Modify this line to fetch data for level 4 with the same rombel
                $data['a'] = $model->getPaymentDataByLoggedInStudentpentan($userId);
            }else {
                $data['a'] = $model->getAllPData();
            }
            echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/transaksi/tambah_pembayaran',$data);
			echo view('uangkas/footer');
        }else{
			return redirect()->to('uangkas/Home');
		}
    }
    public function aksi_tambah_pembayaran()
    {
        $a=$this->request->getPost('siswa');
        $b=$this->request->getPost('jumlah');
        $c=$this->request->getPost('status');
          $h=$this->request->getPost('status2');
        $d=$this->request->getPost('denda');
        $e=$this->request->getPost('keterangan');
        $f=$this->request->getPost('tanggal');
        $g=$this->request->getPost('deadline');

		$simpan=array(
			'siswa'=>$a,
            'jumlah'=>$b,
            'status'=>$c,
            'status2'=>$h,
            'denda'=>$d,
            'keterangan'=>$e,
            'tanggal'=>$f,
            'deadline'=>$g,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('pembayaran',$simpan);
		return redirect()->to('uangkas/Transaksi');
    }
    public function edit_pembayaran($id)
    {
        $level = session()->get('level');
        if ($level == 1 || $level == 2 || $level == 3) {
            $model = new M_model();
            $where = array('id_pembayaran' => $id);
            $data['jojo'] = $model->getWhere('pembayaran', $where);
            
            if ($level == 3) {
                $userId = session()->get('id');
                $data['a'] = $model->getPaymentDataByLoggedInStudentpentan($userId);
            } else {
                $data['a'] = $model->getAllPData();
            }
    
            echo view('uangkas/header');
            echo view('uangkas/menuutama');
            echo view('uangkas/transaksi/edit_pembayaran', $data);
            echo view('uangkas/footer');
        } else {
            return redirect()->to('uangkas/Home');
        }
    }
    
    public function aksi_edit_pembayaran()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('siswa');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('status');
        $h=$this->request->getPost('status2');
		$d=$this->request->getPost('denda');
        $e=$this->request->getPost('keterangan');
        $f=$this->request->getPost('tanggal');
        $g=$this->request->getPost('deadline');
        

		$where=array('id_pembayaran'=>$id);
		$simpan=array(
			'siswa'=>$a,
			'jumlah'=>$b,
			'status'=>$c,
            'status2'=>$h,
			'denda'=>$d,
            'keterangan'=>$e,
            'tanggal'=>$f,
            'deadline'=>$g,
            'updated_at'=>date('Y-m-d H:i:s'),
            'deleted_at' => null

		);
		$model=new M_model();
		$model->qedit('pembayaran',$simpan, $where);
		return redirect()->to('uangkas/Transaksi');

	}
    public function delete_pembayaran($id)
    {
        if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3||  session()->get('level')==6){
        $model = new M_model();
            $userWhere = array('id_pembayaran' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('pembayaran', $userData, $userWhere);

    return redirect()->to('uangkas/Transaksi');
}else{
    return redirect()->to('uangkas/Home');
}
    }
    public function pengeluaran()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id'); // Asumsi ID user yang masuk disimpan dalam data sesi 'id_user'.

        $model = new M_model();

        if ($userLevel == 3) {
            $data['a'] = $model->getPaymentDataByUserIdd($userId);
        } elseif ($userLevel == 6) {
            // Modify this line to fetch data for level 4 with the same rombel
            $data['a'] = $model->getPaymentDataByLoggedInStudentt($userId);
        } else {
            $data['a'] = $model->getAllPaymentDataa();
        }

        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pengeluaran', $data);
        echo view('uangkas/footer');
    }
    public function tambah_pengeluaran()
    {
        if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
        $model=new M_model();
        $level = session()->get('level');
        $userId = session()->get('id'); // Asumsi ID user yang masuk disimpan dalam data sesi 'id_user'.

		$model = new M_model();

        if ($level == 6) {
            $data['a'] = $model->getPaymentDataByLoggedInStudentpem($userId);
        } elseif ($level == 3) {
            // Modify this line to fetch data for level 4 with the same rombel
            $data['a'] = $model->getPaymentDataByLoggedInStudentpentan($userId);
        }else {
            $data['a'] = $model->getAllPData();
        }
            echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/transaksi/tambah_pengeluaran',$data);
			echo view('uangkas/footer');
        }else{
			return redirect()->to('uangkas/Home');
		}
    }
    public function aksi_tambah_pengeluaran()
    {
        $a=$this->request->getPost('siswa');
        $b=$this->request->getPost('jumlah');
        $c=$this->request->getPost('status');
         $h=$this->request->getPost('status2');
        $d=$this->request->getPost('denda');
        $e=$this->request->getPost('keterangan');
        $f=$this->request->getPost('tanggal');
        $g=$this->request->getPost('deadline');

		$simpan=array(
			'siswa'=>$a,
            'jumlah'=>$b,
            'status'=>$c,
            'status2'=>$h,
            'denda'=>$d,
            'keterangan'=>$e,
            'tanggal'=>$f,
            'deadline'=>$g,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('pengeluaran',$simpan);
		return redirect()->to('uangkas/Transaksi/pengeluaran');
    }
    public function edit_pengeluaran($id)
    {
        $level = session()->get('level');
        if ($level == 1 || $level == 2 || $level == 3) {
            $model = new M_model();
            $where = array('id_pengeluaran' => $id);
            $data['jojo'] = $model->getWhere('pengeluaran', $where);
            
            if ($level == 3) {
                $userId = session()->get('id');
                $data['a'] = $model->getPaymentDataByLoggedInStudentpentan($userId);
            }else {
                $data['a'] = $model->getAllPData();
            }
    
    
            echo view('uangkas/header');
            echo view('uangkas/menuutama');
            echo view('uangkas/transaksi/edit_pengeluaran', $data);
            echo view('uangkas/footer');
        } else {
            return redirect()->to('uangkas/Home');
        }
    }
    
    public function aksi_edit_pengeluaran()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('siswa');
		$b=$this->request->getPost('jumlah');
		$c=$this->request->getPost('status');
        $h=$this->request->getPost('status2');
		$d=$this->request->getPost('denda');
        $e=$this->request->getPost('keterangan');
        $f=$this->request->getPost('tanggal');
        $g=$this->request->getPost('deadline');
        

		$where=array('id_pengeluaran'=>$id);
		$simpan=array(
			'siswa'=>$a,
			'jumlah'=>$b,
			'status'=>$c,
            'status2'=>$h,
			'denda'=>$d,
            'keterangan'=>$e,
            'tanggal'=>$f,
            'deadline'=>$g,
            'updated_at'=>date('Y-m-d H:i:s'),
            'deleted_at' => null

		);
		$model=new M_model();
		$model->qedit('pengeluaran',$simpan, $where);
		return redirect()->to('uangkas/Transaksi/pengeluaran');

	}
    public function delete_pengeluaran($id)
    {
        if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
        $model = new M_model();
            $userWhere = array('id_pengeluaran' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('pengeluaran', $userData, $userWhere);

    return redirect()->to('uangkas/Transaksi/pengeluaran');
}else{
    return redirect()->to('uangkas/Home');
}
    }
    public function kas_lunas()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id');
    
        $model = new M_model();
    
        if ($userLevel == 4) {
            // Ambil id_siswa berdasarkan user_id yang ada di tabel siswa
            $siswa = $model->db->table('siswa')
                              ->where('user', $userId)
                              ->get()
                              ->getRow();
    
            if ($siswa) {
                $data['a'] = $model->getPaymentDataBySiswaId($siswa->id_siswa);
            } else {
                $data['a'] = [];
            }
        } else {
            $data['a'] = $model->getAllPaymentData();
        }
    
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pembayaran', $data);
        echo view('uangkas/footer');
    }
    public function kas_blunas()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id');
    
        $model = new M_model();
    
        if ($userLevel == 4) {
            // Ambil id_siswa berdasarkan user_id yang ada di tabel siswa
            $siswa = $model->db->table('siswa')
                              ->where('user', $userId)
                              ->get()
                              ->getRow();
    
            if ($siswa) {
                $data['a'] = $model->getPaymenttDataBySiswaId($siswa->id_siswa);
            } else {
                $data['a'] = [];
            }
        } else {
            $data['a'] = $model->getAllPaymentData();
        }
    
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pembayaran', $data);
        echo view('uangkas/footer');
    }
    public function denda_lunas()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id');
    
        $model = new M_model();
    
        if ($userLevel == 4) {
            // Ambil id_siswa berdasarkan user_id yang ada di tabel siswa
            $siswa = $model->db->table('siswa')
                              ->where('user', $userId)
                              ->get()
                              ->getRow();
    
            if ($siswa) {
                $data['a'] = $model->getdenda($siswa->id_siswa);
            } else {
                $data['a'] = [];
            }
        } else {
            $data['a'] = $model->getAllPaymentData();
        }
    
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pembayaran', $data);
        echo view('uangkas/footer');
    }
    public function denda_blunas()
    {
        $userLevel = session()->get('level');
        $userId = session()->get('id');
    
        $model = new M_model();
    
        if ($userLevel == 4) {
            // Ambil id_siswa berdasarkan user_id yang ada di tabel siswa
            $siswa = $model->db->table('siswa')
                              ->where('user', $userId)
                              ->get()
                              ->getRow();
    
            if ($siswa) {
                $data['a'] = $model->getdendaa($siswa->id_siswa);
            } else {
                $data['a'] = [];
            }
        } else {
            $data['a'] = $model->getAllPaymentData();
        }
    
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/transaksi/v_pembayaran', $data);
        echo view('uangkas/footer');
    }
    public function uang_kas()
    {
        $model=new M_model();
        $data['a'] = $model->tampil('uang');
        echo view('uangkas/header');
        echo view('uangkas/menuutama');
        echo view('uangkas/v_uang',$data);
        echo view('uangkas/footer');
    }
    public function tambah_uang()
	{
	
			$model=new M_model();
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/tambah_uang');
			echo view('uangkas/footer');
		
	}
   
    public function aksi_tambah_uang()
    {
        $a=$this->request->getPost('uang_kas');

		$simpan=array(
			'uang_kas'=>$a,
			'created_at'=>date('Y-m-d H:i:s')
		);
		$model=new M_model();
		$model->simpan('uang',$simpan);
		return redirect()->to('uangkas/Transaksi/uang_kas');
    }
    public function edit_uang($id)
	{
		
			$model=new M_model();
			$where=array('id_uang'=>$id);
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			$data['jojo']=$model->getWhere('uang',$where);
			echo  view('uangkas/edit_uang',$data);
			echo view('uangkas/footer');
		
	}
	
    public function aksi_edit_uang()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('uang_kas');


		$where=array('id_uang'=>$id);
		$simpan=array(
			'uang_kas'=>$a,
			'updated_at' => date('Y-m-d H:i:s')
	
		);
		$model=new M_model();
		$model->qedit('uang',$simpan, $where);
		return redirect()->to('uangkas/Transaksi/uang_kas');

	}
	public function delete_uang($id)
    {
		
        $model = new M_model();
            $userWhere = array('id_uang' => $id);
            $userData = array('deleted_at' => date('Y-m-d H:i:s')); 
            $model->qedit('uang', $userData, $userWhere);
		    return redirect()->to('uangkas/Transaksi/uang_kas');
	
    }
}