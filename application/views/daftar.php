<h3>Pendaftaran Member </h3><hr/>
<?php
switch ($daftar) {
    case 'sukses':
        echo "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo '<b>Selamat pendaftaran berhasil<b/> <br/>';
        echo 'Silahkan masuk/login <br/>'; 
        echo "</div>";
        break;
    case 'gagal':
        echo "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo '<b>Mohon maaf pendaftaran gagal</b> <br/>';
        echo 'Username telah digunakan member lain <br/>'; 
        echo "</div>";
        break;
}

    echo form_open('member/daftar'); ?>
      <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="username">Username :</label>
        <input type="text" class="form-control" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Daftar">
      </div>
    </form>
