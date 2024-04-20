<?php namespace App\Models\uangkas;

use CodeIgniter\Model;

class M_model extends Model
{
	public function tampil($table) {
		return $this->db->table($table)
						->where('deleted_at', null)
						->get()
						->getResult();
	}
	
	public function geta()
    {
        return $this->findAll();
    }
	public function hapus($table, $where){
		return $this->db->table($table)->delete($where);
	}
	public function simpan($table, $data){
		return $this->db->table($table)->insert($data);
	}
	public function getWhere($table, $where){
		return $this->db->table($table)->getWhere($where)->getRow();
	}
	public function qedit($table, $data, $where){
		return $this->db->table($table)->update($data, $where);
	}

	public function join2($table1, $table2, $on){
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->where("$table1.deleted_at", null)
						->get()
						->getResult();
	}
	
	public function getWhere2($table, $where){
		return $this->db->table($table)->getWhere($where)->getRowArray();
	}
	public function join3($table1, $table2,$table3, $on,$on1,$where){
		return $this->db->table($table1)
		->join($table2, $on, 'left')
		->join($table3, $on1, 'left')
		->getWhere($where)
		->getResult();
	}
	public function join4($table1, $table2, $table3, $table4, $on1, $on2, $on3)
	{
		$builder = $this->db->table($table1);
		$builder->select('*');
		$builder->join($table2, $on1);
		$builder->join($table3, $on2);
		$builder->join($table4, $on3);
	
		
		// Add the WHERE clause for deleted_at for each table
		$builder->where("$table1.deleted_at IS NULL");
		$builder->where("$table2.deleted_at IS NULL");
		$builder->where("$table3.deleted_at IS NULL");
		$builder->where("$table4.deleted_at IS NULL");
		
		
		$query = $builder->get();
		return $query->getResult();
	}
	

public function joint($table1, $table2, $on, $userLevel, $userId){
    $query = $this->db->table($table1)
                     ->join($table2, $on, 'left');

    // For levels 1 to 4, allow them to see all data
    if ($userLevel >= 1 && $userLevel <= 6) {
        $query->where('pembayaran.deleted_at', null);
    } elseif ($userLevel == 4) {
        // For level 5, only show their own payment data (user_id in siswa should match the logged-in user's ID)
        $query->where('siswa.user', $userId)
              ->where('pembayaran.deleted_at', null);
    } else {
        // Invalid user level, return an empty result or handle the error accordingly
        return [];
    }

    return $query->get()->getResult();
}

	public function joiny($table1, $table2, $on){
		return $this->db->table('pengeluaran')
		->join('siswa', 'pengeluaran.siswa = siswa.id_siswa', 'left')
		->where('pengeluaran.deleted_at', null)
		->where('siswa.deleted_at', null)
		->get()
		->getResult();
	}
	public function filter2($table, $awal, $akhir, $status)
	{
		return $this->db->query("
			SELECT *
			FROM ".$table."
			INNER JOIN siswa ON ".$table.".siswa = siswa.id_siswa
			WHERE ".$table.".tanggal BETWEEN '".$awal."' AND '".$akhir."'
			AND ".$table.".status = '".$status."'
		")->getResult();
	}
	public function filterrr($table, $awal, $akhir)
{
    return $this->db->query("
        SELECT *
        FROM ".$table."
        INNER JOIN siswa ON ".$table.".siswa = siswa.id_siswa
        WHERE ".$table.".tanggal BETWEEN '".$awal."' AND '".$akhir."'
    ")->getResult();
}
	public function getPaymentDataBySiswaId($id_siswa)
	{
		return $this->db->table('pembayaran')
			->join('siswa', 'pembayaran.siswa = siswa.id_siswa', 'left')
			->where('pembayaran.siswa', $id_siswa)
			->where('pembayaran.deleted_at', null)
			->where('siswa.deleted_at', null)
			->where('pembayaran.status', 'Uang-Kas') // Add this line to filter by 'Uang-Kas' status
			->where('pembayaran.status2', 'Lunas')    // Add this line to filter by 'Lunas' status
			->get()
			->getResult();
	}
	public function getPaymenttDataBySiswaId($id_siswa)
	{
		return $this->db->table('pembayaran')
			->join('siswa', 'pembayaran.siswa = siswa.id_siswa', 'left')
			->where('pembayaran.siswa', $id_siswa)
			->where('pembayaran.deleted_at', null)
			->where('siswa.deleted_at', null)
			->where('pembayaran.status', 'Uang-Kas') // Add this line to filter by 'Uang-Kas' status
			->where('pembayaran.status2', 'Belum-Lunas')    // Add this line to filter by 'Lunas' status
			->get()
			->getResult();
	}
	public function getdenda($id_siswa)
	{
		return $this->db->table('pembayaran')
			->join('siswa', 'pembayaran.siswa = siswa.id_siswa', 'left')
			->where('pembayaran.siswa', $id_siswa)
			->where('pembayaran.deleted_at', null)
			->where('siswa.deleted_at', null)
			->where('pembayaran.status', 'Uang-Denda') // Add this line to filter by 'Uang-Kas' status
			->where('pembayaran.status2', 'Lunas')    // Add this line to filter by 'Lunas' status
			->get()
			->getResult();
	}
	
	public function getdendaa($id_siswa)
	{
		return $this->db->table('pembayaran')
			->join('siswa', 'pembayaran.siswa = siswa.id_siswa', 'left')
			->where('pembayaran.siswa', $id_siswa)
			->where('pembayaran.deleted_at', null)
			->where('siswa.deleted_at', null)
			->where('pembayaran.status', 'Uang-Denda') // Add this line to filter by 'Uang-Kas' status
			->where('pembayaran.status2', 'Belum-Lunas')    // Add this line to filter by 'Lunas' status
			->get()
			->getResult();
	}

public function getSiswaWithConditions($on, $on1, $on2, $id_guru)
{
    $query = $this->db->table('siswa')
        ->join('kelas', $on)
        ->join('jurusan', $on1)
        ->join('rombel', $on2)
        ->where('rombel.guru', $id_guru) 
        ->get()
		->getResult();
}


public function getGuruByUserId($id_user)
{

    $query = $this->db->table('guru')
        ->where('user', $id_user)
        ->get();
    return $query->getRowArray();
}
public function join4_where($table1, $table2, $table3, $table4, $on1, $on2, $on3, $where)
    {
        $builder = $this->db->table($table1);
        $builder->select('*');
        $builder->join($table2, $on1);
        $builder->join($table3, $on2);
        $builder->join($table4, $on3);
        $builder->where($where);
        $query = $builder->get();
        return $query->getResult();
    }
	public function getSiswaByGuruId($id_user)
    {
        
        $builder = $this->db->table('siswa');
    $builder->select('*');
    $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
    $builder->join('guru', 'guru.rombel = rombel.id_rombel');
    $builder->join('kelas', 'kelas.id_kelas = rombel.kelas');
    $builder->join('jurusan', 'jurusan.id_jurusan = rombel.jurusan');
    $builder->where('guru.user', $id_user);
    $builder->where('siswa.deleted_at', null);

    $query = $builder->get();
    return $query->getResult();
    }
	
	public function getAllPaymentData()
{
    $builder = $this->db->table('pembayaran');
        $builder->select('*');
		$builder->join('siswa', 'pembayaran.siswa = siswa.id_siswa');
		$builder->where('pembayaran.deleted_at IS NULL');

        $query = $builder->get();
        return $query->getResult();
}

public function getAllPData()
{
    $builder = $this->db->table('siswa');
    $builder->select('*');
    $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
    $builder->join('kelas', 'kelas.id_kelas = rombel.kelas');
    $builder->join('jurusan', 'jurusan.id_jurusan = rombel.jurusan');
    $builder->where('siswa.deleted_at', null);

    $query = $builder->get();
    return $query->getResult();
}

	public function getPaymentDataByUserId($id_user)
    {
		$builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->join('siswa', 'pembayaran.siswa = siswa.id_siswa');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->join('guru', 'guru.rombel = rombel.id_rombel'); // Menyambungkan guru dengan rombel berdasarkan ID user guru.
        $builder->where('guru.user', $id_user); // Memfilter siswa berdasarkan ID user guru yang masuk.

        $query = $builder->get();
        return $query->getResult();
	}

	public function getPaymentDataByLoggedInStudent($userId)
{
    // Mengambil informasi rombel siswa yang sedang login
    $builder = $this->db->table('siswa');
    $builder->select('rombel');
    $builder->where('user', $userId);
    
    $query = $builder->get();
    $result = $query->getRow();

    if ($result) {
        // Mengambil data pembayaran berdasarkan rombel siswa yang login
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->join('siswa', 'pembayaran.siswa = siswa.id_siswa');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->where('siswa.rombel', $result->rombel); // Menggunakan informasi rombel
        
        $query = $builder->get();
        return $query->getResult();
    }

    return []; // Mengembalikan array kosong jika data siswa tidak ditemukan
}
public function getPaymentDataByLoggedInStudentpem($userId)
{
    // Mengambil informasi rombel siswa yang sedang login
	$builder = $this->db->table('siswa');
    $builder->select('rombel');
    $builder->where('user', $userId);
    
    $query = $builder->get();
    $result = $query->getRow();

    if ($result) {
        // Mengambil data siswa berdasarkan rombel siswa yang login
        $builder = $this->db->table('siswa');
        $builder->select('*');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->join('kelas', 'rombel.kelas = kelas.id_kelas');
        $builder->join('jurusan', 'rombel.jurusan = jurusan.id_jurusan');
       
        $builder->where('rombel.id_rombel', $result->rombel);
		$builder->where('siswa.deleted_at', null); // Menggunakan informasi rombel
        
        $query = $builder->get();
        return $query->getResult();
    }

    return []; // Mengembalikan array kosong jika data siswa tidak ditemukan
}
public function getPaymentDataByLoggedInStudentpen($userId)
{
    $builder = $this->db->table('siswa');
    $builder->select('rombel');
    $builder->where('user', $userId);
    
    $query = $builder->get();
    $result = $query->getRow();

    if ($result) {
        // Mengambil data siswa berdasarkan rombel siswa yang login
        $builder = $this->db->table('siswa');
        $builder->select('*');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->join('kelas', 'rombel.kelas = kelas.id_kelas');
        $builder->join('jurusan', 'rombel.jurusan = jurusan.id_jurusan');
       
        $builder->where('rombel.id_rombel', $result->rombel);
		$builder->where('siswa.deleted_at', null); // Menggunakan informasi rombel
        
        $query = $builder->get();
        return $query->getResult();
    }

    return []; // Mengembalikan array kosong jika data siswa tidak ditemukan
}
public function getPaymentDataByLoggedInStudentpentan($userId)
{
    $builder = $this->db->table('guru');
    $builder->select('rombel');
    $builder->where('user', $userId);
    
    $query = $builder->get();
    $result = $query->getRow();

    if ($result) {
        // Mengambil data guru berdasarkan rombel guru yang login
        $builder = $this->db->table('siswa');
        $builder->select('*');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->join('kelas', 'rombel.kelas = kelas.id_kelas');
        $builder->join('jurusan', 'rombel.jurusan = jurusan.id_jurusan');
       
        $builder->where('rombel.id_rombel', $result->rombel);
		$builder->where('siswa.deleted_at', null); // Menggunakan informasi rombel
        
        $query = $builder->get();
        return $query->getResult();
    }

    return []; // Mengembalikan array kosong jika data guru tidak ditemukan
}
public function getPaymentDataByLoggedInStudentt($userId)
{
  
    $builder = $this->db->table('siswa');
    $builder->select('rombel');
    $builder->where('user', $userId);
    
    $query = $builder->get();
    $result = $query->getRow();

    if ($result) {
        // Mengambil data pembayaran berdasarkan rombel siswa yang login
        $builder = $this->db->table('pengeluaran');
        $builder->select('*');
        $builder->join('siswa', 'pengeluaran.siswa = siswa.id_siswa');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->where('siswa.rombel', $result->rombel); // Menggunakan informasi rombel
        
        $query = $builder->get();
        return $query->getResult();
    }

    return []; // Mengembalikan array kosong jika data siswa tidak ditemukan
}
	public function getPaymentDataByUserIdd($id_user)
    {
        $builder = $this->db->table('pengeluaran');
        $builder->select('*');
        $builder->join('siswa', 'pengeluaran.siswa = siswa.id_siswa');
        $builder->join('rombel', 'siswa.rombel = rombel.id_rombel');
        $builder->join('kelas', 'kelas.id_kelas = rombel.kelas');
        $builder->join('jurusan', 'jurusan.id_jurusan = rombel.jurusan');
        $builder->join('guru', 'guru.rombel = rombel.id_rombel');
        $builder->where('guru.user', $id_user);
    
        $query = $builder->get();
        return $query->getResult();
	}
	public function getAllPaymentDataa()
    {
        $builder = $this->db->table('pengeluaran');
        $builder->select('*');
		$builder->join('siswa', 'pengeluaran.siswa = siswa.id_siswa');
		$builder->where('pengeluaran.deleted_at IS NULL');

        $query = $builder->get();
        return $query->getResult();
    }


	

  
}