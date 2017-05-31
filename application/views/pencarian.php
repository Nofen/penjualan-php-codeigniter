<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <nav class='navbar navbar-default'>
          <ul class='nav navbar-nav'>
            <li >Hasil Pencarian</li>
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