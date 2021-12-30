<?php
$content = '
<style >
</style>';

$content .='
<page>
	<div style="padding:4mm; border:1px solid;" align="center">
		<span style="font-size:40px;"> Tanda Terima Kartu Keluarga </span>
	</div>

	<div style="padding:20px 0 10px 0; font-size:15px;">
		 Data Penduduk 
	</div>

<table border="1px" class="tabel">
                                        <tr>
                                            <th>NO.</th>
                                            <th>Kepala Keluarga</th>
                                            <th>NIK</th>
                                            <th>Kampung</th>
                                            <th>Kecamatan</th>
                                        </tr>';
                                        $no =1;
                                    	$sql = $koneksi->query("select * from db_kk");
                                    	while ($data= $sql->fetch_assoc()) {
                                    	$content .= '
                                    	<tr>
                                    		<td align="center">'.$no++.'</td>
                                    		<td>'.$data->kep_kel.'</td>
                                    		<td>'.$data->nik.'</td>
                                    		<td>'.$data->kamp.'</td>
                                    		<td>'.$data->kec.'</td>
                                    	</tr>
                                    	';

                                    	}



$content .= '
</table>

</page>';


require_once('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>