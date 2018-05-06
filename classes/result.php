<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Weeks of Welcoming SI</title>
</head>

<body>
    <?php
$extension = strtolower(pathinfo($file['pic']['name'], PATHINFO_EXTENSION));
$photo = "images/uploaded." . $extension;
if (file_exists($photo)) {
    unlink($photo);
}
move_uploaded_file($file['pic']['tmp_name'], $photo);
?>
    <div class="form-box">
        <div>
            <div>
                <img class="pas-foto" src="<?php echo "../../$photo" ?>" alt="Pas Foto">
            </div>
            <label for="name">Nama Lengkap</label>
            <div><?php echo $data['name']; ?></div>

                <label for="NIM">NIM</label>
                <div><?php echo $data['NIM']; ?></div>

                <label for="faculty">Fakultas</label>
                <div><?php echo $fakultas; ?></div>

                <label for="email">Email</label>
                <div><?php echo $data['email']; ?></div>

                <label for="gender">Jenis Kelamin</label>
                <div><?php echo $data['gender']; ?></div>

                <label for="facilities">Fasilitas yang dimiliki</label>
                <div>
                    <ul>
                    <?php
                    foreach ($data['facility'] as $facility) {
                        echo "<li> " . $facility;
                    }
                    ?>
                    <ul>
                </div>

                <label for="division">Divisi Pilihan 1</label>
                <div><?php echo $data['division1']; ?></div>

                <label for="division">Divisi Pilihan 2</label>
                <div><?php echo $data['division2']; ?></div>

                <label for="Kelebihan">Kelebihan & Kekurangan</label>
                <div><?php echo $data['kelebihan']; ?></div>
        </div>
    </div>
</body>
</html>
