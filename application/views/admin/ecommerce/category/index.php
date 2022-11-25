<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Nazar</a></li>
                        <li class="breadcrumb-item"><a href="#">Modul Ecommerce</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
                <h4 class="page-title"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <?php include 'input_category.php' ?>
                    <button type="btn btn-primary btn-sm float-end" class="btn btn-info" onclick="tambahKategori()">
                        <i class=" uil-plus"></i> <span> Tambah Data</span> </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($category as $c) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $c['category'] ?></td>
                                    <td>
                                        <button type="button" class="badge btn-primary"><i class="uil-pen"></i> </button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->




</div> <!-- container -->

</div> <!-- content -->

<?php include 'script.php' ?>