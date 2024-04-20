<?php

namespace App\Controllers\uangkas;
use App\Models\uangkas\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class laporan extends BaseController
{
	public function uang_semua()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='lmasuk';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filters',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
	}
    public function uang_masuk()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='masuk';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function uang_keluar()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='keluar';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
	}

	public function uang_denda()
	{
		
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='denda';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
		
	}
    public function uang_kas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='kas';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
	}
    public function lunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='lunas';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}
	}
    public function belum_lunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
			$model=new M_model();
			$kui['kunci']='blunas';
			echo view('uangkas/header');
			echo view('uangkas/menuutama');
			echo view('uangkas/filter',$kui);
			echo view('uangkas/footer');
		}else{
			return redirect()->to('/Home');
		}

	}
	public function cari_msk()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Uang-Masuk";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_klr()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Uang-Keluar";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_denda()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Uang-Denda";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_kas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Uang-Kas";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_lunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Lunas";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_blunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Belum-Lunas";
    $kui['duar'] = $model->filter2('pembayaran', $awal, $akhir, $status);
    echo view('uangkas/c_msk', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function cari_semua()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $kui['duar'] = $model->filterrr('pembayaran', $awal, $akhir);
    echo view('uangkas/laporan_semua', $kui);
}else{
	return redirect()->to('/Home');
}
	}
	public function pdf_msk()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Masuk";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_klr()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Keluar";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_denda()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Denda";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_kas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Kas";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_lunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Lunas";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_blunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Belum-Lunas";
		$kui['duar']=$model->filter2('pembayaran',$awal,$akhir,$status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/c_msk',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function pdf_semua()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$kui['duar']=$model->filterrr('pembayaran',$awal,$akhir);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('uangkas/laporan_semua',$kui));
		$dompdf->setPaper('A6','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_msk()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Masuk";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);
			$totalNilai += $data->jumlah; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Uang-Masuk';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_klr()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Keluar";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);
			$totalNilai += $data->jumlah; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Uang-Keluar';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_denda()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Denda";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;
		$totalDenda = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);
			$totalNilai += $data->jumlah; 
			$totalDenda += $data->denda; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('J' . ($column), 'Total Denda');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('K' . ($column), $totalDenda);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Uang-Denda';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_kas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Uang-Kas";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);
			$totalNilai += $data->jumlah; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Uang-Kas';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_lunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Lunas";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);

			$totalNilai += $data->jumlah; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Lunas';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}
	}
	public function excel_blunas()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ||  session()->get('level')==3 ||  session()->get('level')==6){
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$status = "Belum-Lunas";
		$data=$model->filter2('pembayaran',$awal,$akhir,$status);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Siswa')
		->setCellValue('B1', 'Jumlah')
		->setCellValue('C1', 'Denda')
		->setCellValue('D1', 'Keterangan')
		->setCellValue('E1', 'Status')
		->setCellValue('F1', 'Tanggal')
		->setCellValue('G1', 'Deadline');

		$column=2;
		$totalNilai = 0;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->jumlah)
			->setCellValue('C'. $column, $data->denda)
			->setCellValue('D'. $column, $data->keterangan)
			->setCellValue('E'. $column, $data->status)
			->setCellValue('F'. $column, $data->tanggal)
			->setCellValue('G'. $column, $data->deadline);
			$totalNilai += $data->jumlah; 
			$column++;
		}
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('H' . ($column), 'Total Jumlah');
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('I' . ($column), $totalNilai);

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Belum-Lunas';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/Home');
	}

	}
	public function excel_semua()
{
    if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 6) {
        $model = new M_model();
        $awal = $this->request->getPost('awal');
        $akhir = $this->request->getPost('akhir');
        $data = $model->filterrr('pembayaran', $awal, $akhir);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nama Pembayaran')
            ->setCellValue('C1', 'Tanggal')
            ->setCellValue('D1', 'Uang Masuk (In)')
            ->setCellValue('E1', 'Uang Keluar (Out)')
            ->setCellValue('F1', 'Total');

        $column = 2;
        $totalIn = 0;
        $totalOut = 0;
        $totalKeseluruhan = 0; // Variabel untuk menyimpan total keseluruhan
        $no = 1;

        foreach ($data as $gas) {
            // Menambahkan jumlah ke total sesuai dengan transaksi
            if ($gas->status === 'Uang-Masuk') {
                $totalIn += $gas->jumlah;
                $totalOut += 0;
            } else if ($gas->status === 'Uang-Keluar') {
                $totalIn += 0;
                $totalOut += $gas->jumlah;
            }

            // Menghitung total kumulatif berdasarkan transaksi terakhir
            $total = $totalIn - $totalOut;

            // Menambahkan nilai total dari setiap baris ke total keseluruhan
            $totalKeseluruhan += $total;

            $sheet->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, $gas->keterangan)
                ->setCellValue('C' . $column, $gas->tanggal)
                ->setCellValue('D' . $column, ($gas->status === 'Uang-Masuk') ? $gas->jumlah : 0)
                ->setCellValue('E' . $column, ($gas->status === 'Uang-Keluar') ? $gas->jumlah : 0)
                ->setCellValue('F' . $column, $total);

            $column++;
            $no++;
        }

        // Menambahkan total keseluruhan di baris terakhir
        $sheet->setCellValue('E' . $column, 'Total Keseluruhan')->setCellValue('F' . $column, $totalKeseluruhan);

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data_Laporan_Total.xlsx';

        // Coba Redirect hasilnya xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    } else {
        return redirect()->to('/Home');
    }
}


		

}