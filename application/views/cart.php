<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<h3 align="left">Keranjang Belanja</h3> <hr/>
		<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Quantity</th>
				<th>Harga Satuan</th>
				<th>Subtotal</th>
				<th>Pilihan</th>
			</tr>
		<tbody >
			<?php
				echo form_open('cart/updatecart');
	  			$i=1;
				foreach ($this->cart->contents() as $barang){
					echo form_hidden($i.'[rowid]', $barang['rowid']);
					echo "<tr align='left'>";
					echo "<td>".$i."</td>";
		    	    echo "<td>".$barang['name']."</td>";
	        		echo "<td>".form_input(array('name' => $i.'[qty]', 'value' => $barang['qty'], 'maxlength' => '3', 'size' => '5'))."</td>";
	    	    	echo "<td>Rp ".number_format($barang['price'],0,',','.')."</td>";
	    	    	echo "<td>Rp ".number_format($barang['subtotal'],0,',','.')."</td>";
	        		echo "<td> ".anchor('cart/delcart/'.$barang['rowid'],'<span class="btn btn-danger btn-xs">Hapus</span>')."</td>";
					echo "</tr>";
					$i++;
				}
			?>
			<tr align="left">
				<td></td>
				<td><b>Items :</b></td>
				<td><b><?php echo $this->cart->total_items(); ?></b></td>
				<td><b>Total : </b></td>
				<td><b>Rp <?php echo number_format($this->cart->total(),0,',','.') ?></b></td>
				<td></td>
			</tr>
		</tbody>
		</table>
		<p align="left">
		<?php
			echo anchor('cart/delcart/'.'destroy','<span class="btn btn-danger btn-md">Hapus Keranjang</span>');
		?>
			<input class="btn btn-warning btn-md" type="submit" value="Update Keranjang"/>
			<a class="btn btn-success" href="<?php echo base_url(); ?>">Lanjutkan Belanja</a>
			<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/cart/">Menuju Pembayaran</a>
		</form>
		</p>