
			<!--<?php foreach($mob as $m){?>
				<table>
					<tr><td>No Registrasi</td><td></td>
					<tr><td>Merk</td><td></td>
					<tr><td>Type</td><td></td>
					<tr><td>Warna</td><td></td>
					<tr><td>Harg Sewa</td><td></td>
					<tr><td>Tahun Pembuatan</td><td></td>
					<tr><td>Bulan Pajak</td><td></td>
					<tr><td>Status</td><td></td>
					<tr><td>Kategori</td><td></td>
					<tr><td>ID Perbaikan</td><td></td>
					
				</table>
			<?php } ?>-->
           
<html>
<head>
</head>
<body>
			<?php foreach($detail as $m){?>
				<table>
					<tr><td>No Registrasi </td><td> : </td><td><?php echo $m->noRegistrasi; ?></td>
					<tr><td>Merk </td><td> : </td><td><?php echo $m->merk; ?></td>
					<tr><td>Type </td><td> : </td><td><?php echo $m->type; ?></td>
					<tr><td>Warna </td><td> : </td><td><?php echo $m->warna; ?></td>
					<tr><td>Harga Sewa </td><td> : </td><td><?php echo $m->hargaSewa; ?></td>
					<tr><td>Tahun Pembuatan </td><td> : </td><td><?php echo $m->tahunPembuatan; ?></td>
					<tr><td>Bulan Pajak </td><td> : </td><td><?php echo $m->bulanPajak; ?></td>
					<tr><td>Status </td><td> : </td><td><?php echo $m->status; ?></td>
					<tr><td>Kategori </td><td> : </td><td><?php echo $m->kategori; ?></td>
					<!--<tr><td>ID Perbaikan </td><td> : </td><?php echo $m->idPerbaikan; ?><td></td>
					-->
					<tr><td><img id="gambar" src="gambar/<?php echo $m->gambar; ?>" alt="Foto" style="max-width: 350px; max-height: 350px; border: 1px solid #000" /></td></tr>
            </div>
</div>
				</table>
			<?php } ?>
</body>
<html>