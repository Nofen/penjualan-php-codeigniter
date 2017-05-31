<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	</div>
	<div class="col-md-3  col-sm-4 col-xs-12 navbar">
		<ul class="list-group">
			<li class="list-group-item list-group-item-success"><a href="<?php echo base_url(); ?>index.php/cart/"><span class="badge pull-right">
			<?php echo $this->cart->total_items(); ?> </span> 
			<b>Keranjang Belanja</b></a></li>
		</ul>
		<hr/>
		<form name="cari" method="GET" action="<?php echo base_url().'index.php/produk/cari'; ?>">
		<ul align="left" class="list-group">
			<li class="list-group-item act">Pencarian</li>
			<li class="list-group-item"><input type="text" name="kata_kunci" required> 
				<input type="submit" value="Cari" class="btn btn-primary">
			</li>
		</ul>
		</form>
	</div>
	<div class="col-md-12 col-xs-12 footer">
		<p class="info">
			<b>Jual Handphone & Tablet Terbaru</b><br/>
			Anda berencana membeli handphone? Sebelum membeli, sebaiknya perhatikan fitur dan spesifikasi handphone tersebut. Jangan cepat tergiur dengan harga handphone yang murah atau rekomendasi teman. Pastikan handphone yang dibeli sudah sesuai dengan kebutuhan Anda. Blibli.com menjual berbagai macam handphone dengan garansi resmi dan berkualitas. Tersedia handphone atau smartphone dengan kualitas premium yang menghadirkan fitur canggih dan lengkap. Selain itu, Anda juga bisa menemukan beragam handphone dengan harga terjangkau, namun tetap memiliki kualitas terbaik. Blibli.com menjual produk merek-merek handphone, seperti Meizu M2, Sony, Hp Samsung, Blackberry, iPhone, Xiaomi, Oppo, Smartfren, HTC, Asus, Lenovo, LG dan merek lainnya.<br/>
			<b>Jual Handphone Tablet.</b><br/>
			Blibli.com menyediakan bermacam tablet untuk Anda yang sering melakukan aktivitas di luar ruangan dengan berbagai macam merek, seperti Samsung, Lenovo, Asus, Speed up, Acer, Sony, HP, Xiaomi, Advan, Polytron dan merek-merek lainnya. Anda juga bisa menemukan berbagai pilihan smartphone dengan platform Android, iOS iPhone, Blackberry dan Windows Mobile yang menawarkan keunikan tersendiri dan tentunya dengan beragam harga dan spesifikasi terbaik. Smartphone Android terbaik di blibli.com antara lain Meizu M2, Nexus 6, Asus Zenfone 4, Asus Zenfone 5, Asus Zenfone 6, dan Lenovo P70.<br/>
			<b>Aksesoris Handphone & Tablet.</b><br/>
			 Bagi Anda yang ingin mencari aksesoris handphone atau tablet, Anda bisa mendapatkanya di Blibli.com. Tersedia beragam aksesoris handphone dan tablet seperti casing, skin protector, headphone, tongsis, charger mobil, powerbank serta media penyimpanan untuk handphone dan tablet, seperti SD Card, Mobile Memory Card, MicroSD dan Micro SDHC.
		</p>
	</div>

</body>
</html>