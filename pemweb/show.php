<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Data produk</h1>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama produk</th>
                <th>harga</th>
                <th>gambar produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                    <td><a class="btn btn-primary" <?=$row['image'];?>" target="_blank">unduh</a></td>
                    <td>
                        <a class="btn btn-warning" edit.php?id=<?=$row['id'];?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Hapus</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>