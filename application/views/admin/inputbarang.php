
<?php echo form_open('admin/simpandatabarang','enctype="multipart/form-data"'); ?>
  <div class="form-group">
    <label for="merk">Merk:</label>
    <input type="text" class="form-control" name="merk" required>
    <label for="tipe">Tipe:</label>
    <input type="text" class="form-control" name="tipe" required>
    <label for="harga">Harga:</label>
    <input type="number" class="form-control" name="harga" required>
    <label for="foto">Foto:</label>
    <input type='file' class="form-control" name='foto' required>
  </div>

  <div class="form-group">
    <label>Spesifikasi : </label><br/>
    <label for="layar">Layar (inch) : </label>
    <input type="number" class="form-control" name="layar">
    <label for="os">OS :</label>
    <input type="text" class="form-control" name="os">
    <label for="prosesor">Prosesor :</label>
    <input type="text" class="form-control" name="prosesor">
    <label for="ram">Ram (GB) :</label>
    <input type="number" class="form-control" name="ram">
    <label for="internal">Internal (GB) :</label>
    <input type="number" class="form-control" name="internal">
    <label for="kamblk">Kamera Belakang (MP) :</label>
    <input type="number" class="form-control" name="kamblk">
    <label for="kamdpn">Kamera Depan (MP) :</label>
    <input type="number" class="form-control" name="kamdpn">
  </div>
  <div class="form-group">
    <label>Deskripsi : </label><br/>
    <textarea name="deskripsi"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-default">
  </div>
</form>