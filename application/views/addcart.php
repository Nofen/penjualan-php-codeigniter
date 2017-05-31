<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<h3 align="left">Telah ditambahkan ke keranjang belanja</h3> <hr/>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama barang</th>
				<th>Quantity</th>
				<th>Harga satuan</th>
			</tr>
		</thead>
		<tbody >
			<tr align="left">
			<?php
	    	    	echo "<td>".$barang['name']."</td>";
	        		echo "<td>".$barang['qty']."</td>";
	    	    	echo "<td>Rp ".number_format($barang['price'],0,',','.')."</td>";
			?>
			</tr>
		</tbody>
		</table>
		<p align="left">
			<a class="btn btn-success" href="<?php echo base_url(); ?>">Lanjutkan Belanja</a>
			<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/cart/">Keranjang Belanja</a>
		</p>