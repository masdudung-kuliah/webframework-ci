<?= $this->extend('layouts/administrator') ?>

<?= $this->section('page_title') ?>
Add New Category
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <form id="add-new-category" action="<?= base_url('categories/store') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>" value="<?= old('name') ?>" required>
                        <?php if (session('errors.name')) : ?>
                            <div class="invalid-feedback">
                                <?= session('errors.name') ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea name="description" id="description" class="form-control <?= session('errors.description') ? 'is-invalid' : '' ?>"><?= old('description') ?></textarea>
                        <?php if (session('errors.description')) : ?>
                            <div class="invalid-feedback">
                                <?= session('errors.description') ?>
                            </div>
                        <?php endif ?>
                    </div>
                </form>
            </div>
            <div class="card-header">
                <div class="card-tools">
                    <button type="submit" class="btn btn-primary submit-form">Save</button>
                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('page_script') ?>
<script>
    $('document').ready(function(){
        $('button.submit-form').click(function(){
            $('#add-new-category').submit();
        })
    })
</script>
<?= $this->endSection() ?>