<?= $this->extend('layouts/administrator') ?>

<?= $this->section('page_title') ?>
Category List
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <a type="button" class="btn btn-primary" href="<?=site_url('categories/create')?>">
                        <i class="fas fa-plus me-2"></i>
                        Add Category
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= esc($category->id) ?></td>
                                <td><?= esc($category->name) ?></td>
                                <td><?= esc($category->description) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

<?= $this->endSection() ?>