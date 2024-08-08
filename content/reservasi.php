<div class="container">
    <form action="" method="post" class="form-reservasi">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required class="form-control">
        </div>
        <div class="form-group">
            <select id="jenis_motor" name="jenis_motor">
                <label for="jenis_motor">Jenis Motor :</label>
                <option value="Honda Beat">Honda Beat</option>
                <option value="Honda Vario">Honda Vario</option>
                <option value="Honda Scoopy">Honda Scoopy</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Tanggal:</label>
            <input type="date" id="date" name="date" required class="form-control">
        </div>

        <div class="form-group">
            <label for="time">Waktu:</label>
            <input type="time" id="time" name="time" required class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi Masalah:</label>
            <textarea id="description" name="description" rows="4" required class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Reservasi</button>
    </form>
</div>