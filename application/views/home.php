<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
if (!isset($merk))
	$merk='Semua';
?>
        <nav class='navbar navbar-default'>
          <ul class='nav navbar-nav'>
            <li class="<?php if($merk == 'Semua')echo 'active'; ?>" ><?php echo anchor(base_url(),'Semua') ?></li>
            <li class="<?php if($merk == 'Samsung')echo 'active'; ?>" ><?php echo anchor('produk/kategori/Samsung','Samsung'); ?></li>
            <li class="<?php if($merk == 'Iphone')echo 'active'; ?>" ><?php echo anchor('produk/kategori/Iphone','Iphone'); ?></li>
            <li class="<?php if($merk == 'Lenovo')echo 'active'; ?>" ><?php echo anchor('produk/kategori/Lenovo','Lenovo'); ?></li>
            <li class="<?php if($merk == 'Xiaomi')echo 'active'; ?>" ><?php echo anchor('produk/kategori/Xiaomi','Xiaomi'); ?></li>
            <li class="" ><?php echo anchor('produk/kategori/Oppo','Oppo'); ?></li>
          </ul>
        </nav>
		<hr/>
			<?php
				$i=0;
				foreach ($barang as $row){
					echo "<div class='col-md-3 col-sm-5 col-xs-12 katalog'>";
	    	    	echo "<a href='".base_url()."index.php/produk/detail/".$row->idbarang."'>
	    	    		<img height='200px' width='200px' src='".base_url()."assets/gambar/produk/".$row->foto."'/><br/>";
	    	    	echo $row->merk."<br/>";
	        		echo $row->tipe."<br/></a>";
	        		echo "<span class='harga'>Rp ".number_format($row->harga,0,',','.')." ,- </span><br/>";
	        		echo "</div>";
				}
			?>
		<div class='col-md-12  col-sm-12 col-xs-12'>
			<ul class="pagination">
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			</ul>
		</div>