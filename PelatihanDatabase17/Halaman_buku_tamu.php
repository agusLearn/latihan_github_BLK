<?php
require_once "MySQL_connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>

<body>
    <!-- Jumbotron + Form inpu Buku Tamu -->
    <div align="center">
        <div class="jumbotron" style="max-width: 47rem;">

            <?php if (isset($_SESSION['login'])) : ?>
                <?php  

                if ($_SESSION['login'] == 1) {
                ?>
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['pesan_login']; ?>
                    </div>
                <?php } ?>

            <?php endif; ?>

            <a href="#" class="btn btn-danger float-right">Logout</a>
            <h3 class="dbTamu" align="left">Input Data Tamu</h3>

            <!-- Cek Email -->
            <?php if (isset($_SESSION['email_cek'])) : ?>
                <?php
                $email_exists = $_SESSION['email_cek'];

                if ($email_exists == 3) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['email_message']; ?>
                    </div>
                <?php } ?>


            <?php endif; ?>

            <?php

            if (isset($_SESSION['insert_alert'])) : ?>

                <?php
                $insert_alert = $_SESSION['insert_alert'];

                if ($insert_alert == 0) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['insert_message']; ?>
                    </div>
                <?php
                } else { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['insert_message']; ?>
                    </div>
                <?php } ?>

            <?php endif ?>


            <form action="Proses_insert_buku_tamu.php" method="post">
                <div class="form-group" align="left">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group" align="left">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group" align="left">
                    <label>Pesan</label>
                    <textarea class="form-control" name="pesan" placeholder="Masukkan Pesan & Kesan Anda" required></textarea>
                </div>
                <div class="form-group" align="left">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">reset</button>
                    <button type="submit" class="btn btn-warning ">Save changes</button>
                </div>
            </form>

            <!-- Alert -->

            <?php
            if (isset($_SESSION['info_update'])) : ?>

                <?php if ($_SESSION['info_update'] = 1) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!!!</strong> Data Sudah Dirubah.
                    </div>
                <?php endif ?>

            <?php endif ?>


            <!-- Data Tabel -->
            <h3 class="dbTamu" align="left">Data Buku Tamu</h3>

            <table class="table table-bordered bg-warning" id="myTable">
                <thead>
                    <tr class="tabel1" align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan/Komentar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nama_tamu']; ?></td>
                                <td><?= $row['email_tamu']; ?></td>
                                <td><?= $row['pesan_tamu']; ?></td>

                                <td align="center">
                                    <div class="btn-group">
                                        <!-- <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda akan menghapus record ini?')">
                                            <i class="fa fa-trash"></i>
                                        </a> -->

                                        <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" data-id-delete="<?= $row['id_tamu']; ?>">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_tamu']; ?>" data-nama="<?= $row['nama_tamu']; ?>" data-email="<?= $row['email_tamu']; ?>" data-pesan="<?= $row['pesan_tamu']; ?>">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="#" class="btn btn-dark disable">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>



            <!-- Modal Update -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Buku Tamu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            <form action="Proses_update_buku_tamu.php" method="post">
                                <div class="form-group" align="left">
                                    <label>ID</label>
                                    <input type="text" class="form-control edit-id" name="id" value="" readonly required>
                                </div>
                                <div class="form-group" align="left">
                                    <label>Nama</label>
                                    <input type="text" class="form-control edit-nama" name="nama" value="">
                                </div>
                                <div class="form-group" align="left">
                                    <label>Email</label>
                                    <input type="text" class="form-control edit-email" name="email" value="">
                                </div>
                                <div class="form-group" align="left">
                                    <label>Pesan</label>
                                    <textarea class="form-control edit-pesan" name="pesan"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning btn-block" value="Update">
                                </div>
                                <div class="form-group">
                                    <a href="Halaman_buku_tamu.php">
                                        <i class="fa fa-arrow-left"></i>
                                        Back
                                    </a>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            <div class="modal" tabindex="-1" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert2 alert-danger" role="alert">
                                <h2>Yakin Mau di Hapus ?....</h2>
                            </div>
                            <form action="Proses_delete_buku_tamu.php" method="GET">
                                <div class="form-group" align="left">
                                    <input type="text" hidden class="form-control delete-id" name="idTamu" value="">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Unset Session -->
            <?php
            unset($_SESSION['insert_alert']);
            unset($_SESSION['email_cek']);
            unset($_SESSION['info_update']);
            unset($_SESSION['login'])
            ?>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#myTable').DataTable({
                pageLength: 10,
            });

            $('#exampleModal').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var id = button.data('id')
                var nama = button.data('nama');
                var email = button.data('email');
                var pesan = button.data('pesan');
                console.log(button);
                console.log(nama);
                console.log(email);



                var modal = $(this);



                modal.find(".modal-body .edit-id").val(id);
                modal.find('.modal-body .edit-nama').val(nama);
                modal.find('.modal-body .edit-email').val(email);
                modal.find('.modal-body .edit-pesan').html(pesan);
            });

            $('.alert').delay(500).fadeOut(2000);


            $('#delete').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var id = button.data('id-delete')
                // console.log(id);

                var modal = $(this);

                modal.find(".modal-body .delete-id").val(id);

            });

        });
    </script>
</body>

</html>