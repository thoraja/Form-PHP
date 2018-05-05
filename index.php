<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>Weeks of Welcoming SI</title>
</head>

<body>
    <div class="form-box">
        <h1 style="text-align: center">Formulir</h1>
        <div>
            <form action="router.php" method="POST"
            enctype="multipart/form-data">
                <label for="name">Nama Lengkap</label>
                <input required type="text" id="name" name="name" placeholder="Nama lengkap..">

                <label for="NIM">NIM</label>
                <input required type="number" id="NIM" name="NIM" placeholder="NIM..">

                <label for="email">Email</label>
                <input required type="email" id="email" name="email" placeholder="Email..">

                <label for="gender">Jenis Kelamin</label>
                <br>
                <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki
                <br>
                <input type="radio" name="gender" value="Perempuan"> Perempuan
                <br>

                <label for="facilities">Fasilitas yang dimiliki</label>
                <table style="width:100%">
                    <tr>
                        <td>
                            <input type="checkbox" name="facility[]" value="Kendaraan"> Kendaraan</td>
                        <td>
                            <input type="checkbox" name="facility[]" value="Smartphone"> Smartphone</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="facility[]" value="Laptop"> Laptop</td>
                        <td>
                            <input type="checkbox" name="facility[]" value="Kamera DSLR"> Kamera DSLR</td>
                    </tr>
                </table>

                <label for="division1">Divisi Pilihan 1</label>
                <select id="division" name="division1">
                    <option value="Acara">Acara</option>
                    <option value="Dekorasi, Dokumentasi & Multiedia">Dekorasi, Dokumentasi & Multiedia</option>
                    <option value="Humas">Humas</option>
                    <option value="Perlengkapan">Perlengkapan</option>
                    <option value="Konsumsi">Konsumsi</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="PJL">PJL</option>
                    <option value="PJT">PJT</option>
                </select>

                <label for="division2">Divisi Pilihan 2</label>
                <select id="division" name="division2">
                    <option value="Acara">Acara</option>
                    <option value="Dekorasi, Dokumentasi & Multiedia">Dekorasi, Dokumentasi & Multiedia</option>
                    <option value="Humas">Humas</option>
                    <option value="Perlengkapan">Perlengkapan</option>
                    <option value="Konsumsi">Konsumsi</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="PJL">PJL</option>
                    <option value="PJT">PJT</option>
                </select>

                <label for="kelebihan">Kelebihan & Kekurangan</label>
                <textarea required style="height: 200px" type="text" id="kelebihan" name="kelebihan" placeholder="Deskripsi singkat kelebihan dan kekurangan.."></textarea>

                <label for="photo">Pas Foto</label>
                <br>
                <input required type="file" name="pic" accept="image/*">

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
