<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4 Multiple Files upload</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-5">
        <form action="<?= site_url('upload') ?>" method="post" enctype="multipart/form-data">

            <?php if (session('pesan')) : ?>
                <div class="alert alert-success mt-3">
                    <?= session('pesan') ?>
                </div>
            <?php endif; ?>

            <div class="form-gruup">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar[]" class="form-control" multiple/> 
            </div>
            <br/>
            <button type="submit" class="btn btn-primary btn-block">UPLOAD GAMBAR</button>

        </form>
    </div>

</body>
</html>