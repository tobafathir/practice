<?php

include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Nama Pemain Bola</title>
</head>
<body class="bg-info">


<table class="table table-secondary">
    <thead class="thead-secondary">
        <tr>
            <th scope="col">Nama Pemain</th>
            <th scope="col">Nama Team</th>
        </tr>
    </thead>
    <tbody  class="bg-secondary">
        <?php foreach ($data_daftar as $key):?>
            <tr>
                <td><?php echo $key['nama'];?></td>
                <td><?php echo $key['club'];?></td>
                <td><a  href="delete.php?id=<?php echo $key['id']; ?>">Hapus</a> | 
                <a href="edit.php?id=<?php echo $key['id']; ?>">Edit</a></td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>

<!-- from input daftar -->

<div class="container">
    <div class="row">
        <div class="col">
        <form action="input.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemain</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Team</label>
                    <input type="text" name="club" class="form-control">
                </div>

                <button type="submit" class="btn btn-dark">simpan</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>