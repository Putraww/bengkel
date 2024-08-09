<div class="container">
    <form action="" method="post" class="form-reservasi">
        <div class="form-group">
            <label for="name">Nama Lengkap :</label>
            <input type="text" name="name" required class="form-control" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="email" required class="form-control" placeholder="nama@gmail.com">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" required class="form-control" placeholder="Alamat Lengkap">
        </div>
        <div class=" form-group">
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required class="form-control" placeholder="08XXXXXXXXXX">
        </div>
        <div class="form-group">
            <label>Jenis Motor :</label>
            <select id="jenis_motor" name="jenis_motor">
                <option value="Honda Beat">Honda Beat</option>
                <option value="Honda Vario">Honda Vario</option>
                <option value="Honda Scoopy">Honda Scoopy</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Tanggal :</label>
            <input type="date" id="date" name="date" required class="form-control">
        </div>

        <div class="form-group">
            <label for="time">Waktu :</label>
            <input type="time" id="time" name="time" required class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi Masalah Motor :</label>
            <textarea id="description" name="description" rows="4" required class="form-control"></textarea>
        </div>

        <button type="submit" style="background-color: red">Kirim Reservasi</button>
    </form>
</div>