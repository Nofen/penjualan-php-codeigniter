<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
foreach ($barang as $row){ ?>
	<div class="col-md-5 col-sm-12 col-xs-12 kolom"> 
		<p align="center">
			<img height='300px' width='250px' src='<?php echo base_url()."assets/gambar/produk/".$row->foto; ?>'/>
		</p>
	</div>
	<div class="col-md-7 col-sm-12 col-xs-12 kolom"> 
		<table>
			<tr>
				<th class="judul" colspan="2"><?php echo $row->merk." ".$row->tipe;  ?></th>
			</tr>
			<tr>
				<td><br/><b>Merk</b></td>
				<td><br/>: <?php echo $row->merk ?></td>
			</tr>
			<tr>
				<td><b>Harga</b></td>
				<td>: <?php echo "<span class='harga'>Rp ".number_format($row->harga,0,',','.')." ,- </span>" ?></td>
			</tr>
			<tr>
				<td colspan="2"><br/><?php echo anchor('cart/addcart/'.$row->idbarang,'<span class="btn btn-md btn-info" >Tambah Ke Keranjang</span>')."<br/>"; ?>
				</td>
			</tr>
		</table>
<?php 
} 
foreach ($spesifikasi as $row){ ?>
	<hr/>
	<table>
		<tr>
			<th colspan="2">Spesifikasi</th>
		</tr>
		<tr>
			<td>Layar</td>
			<td>: <?php echo $row->layar ?> inch</td>
		</tr>
		<tr>
			<td>Os</td>
			<td>: <?php echo $row->os ?></td>
		</tr>
		<tr>
			<td>Prosesor</td>
			<td>: <?php echo $row->prosesor ?></td>
		</tr>
		<tr>
			<td>Ram</td>
			<td>: <?php echo $row->ram ?> GB</td>
		</tr>
		<tr>
			<td>Internal</td>
			<td>: <?php echo $row->internal ?> GB</td>
		</tr>
		<tr>
			<td>Kamera (depan)</td>
			<td>: <?php echo $row->kamdpn ?> MP</td>
		</tr>
		<tr>
			<td>Kamera (Belakang)</td>
			<td>: <?php echo $row->kamblk ?> MP</td>
		</tr>
	</table>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 kolom"><hr/>
	<p align="left" class="judul">Deskripsi produk</p>
	<pre>
		<?php echo $row->deskripsi; ?>
	</pre>
</div> 
<?php
} 
?>