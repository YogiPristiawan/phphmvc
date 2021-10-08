<div class="container pt-5">

  <div class="row my-3">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Kategori</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option value="">--Pilih Kategori--</option>

        <?php foreach ($data['genre'] as $g) : ?>
          <option value="<?= $g['genre_id']; ?>"><?= $g['name']; ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>

</div>
<div class="d-flex justify-content-center flex-wrap" id="content">
  <?php foreach ($data['film'] as $f) : ?>
    <div class="card mx-4 my-5" style="max-width: 200px;">
      <!-- <img src="" alt="" class="card-image-top"> -->

      <div class="text-center" style="width: 200px; height: 200px;">
        <h4 class="text-danger"><?= $f['picture']; ?></h4>
      </div>

      <div class="card-body">
        <div class="card-title mt-4">
          <h3 class="text-success font-weight-bold"><?= $f['name']; ?></h3>
        </div>

        <h5 class="mt-5">Genre : </h5>

        <?php foreach ($f['genre'] as $g) : ?>
          <a href=" <?= BASEURL, "/home/genre/", $g['genre_id'] ?>">
            <h6 class="text-success d-inline"><?= $g['name']; ?> | </h6>
          </a>
        <?php endforeach ?>
        <?php foreach ($f['genre'] as $g) : ?>
          <a href=" <?= BASEURL, "/home/genre/", $g['genre_id'] ?>">
            <h6 class="text-success d-inline"><?= $g['name']; ?> | </h6>
          </a>
        <?php endforeach ?>


        <h5 class="mt-4">Pemeran : </h5>
        <?php foreach ($f['pemeran'] as $p) : ?>
          <a href=" <?= BASEURL, "/home/pemeran/", $p['pemeran_id'] ?>">
            <h6 class="text-info d-inline"><?= $p['name']; ?> | </h6>
          </a>
        <?php endforeach ?>
        <?php foreach ($f['pemeran'] as $p) : ?>
          <a href=" <?= BASEURL, "/home/pemeran/", $p['pemeran_id'] ?>">
            <h6 class="text-info d-inline"><?= $p['name']; ?> | </h6>
          </a>
        <?php endforeach ?>

        <div class="card-text mt-4">
          <hr class="mt-4 mb-3">
          <p class="card-text">Keterangan : </p>
          <p class="card-text"><?= $f['description']; ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  <?php foreach ($data['film'] as $f) : ?>
    <div class="card mx-4 my-5">
      <!-- <img src="" alt="" class="card-image-top"> -->

      <div class="text-center" style="width: 200px; height: 200px;">
        <h4 class="text-danger"><?= $f['picture']; ?></h4>
      </div>

      <div class="card-body">
        <div class="card-title mt-4">
          <h3 class="text-success font-weight-bold"><?= $f['name']; ?></h3>
        </div>

        <h5 class="mt-5">Genre : </h5>
        <div class="flex flex-wrap">
          <?php foreach ($f['genre'] as $g) : ?>
            <div>
              <a href=" <?= BASEURL, "/home/genre/", $g['genre_id'] ?>">
                <h6 class="text-success"><?= $g['name']; ?> | </h6>
              </a>
            </div>
          <?php endforeach ?>
        </div>

        <h5 class="mt-2">Pemeran : </h5>
        <div class="flex flex-wrap">
          <?php foreach ($f['pemeran'] as $p) : ?>
            <div>
              <a href=" <?= BASEURL, "/home/pemeran/", $p['pemeran_id'] ?>">
                <h6 class="text-info"><?= $p['name']; ?> | </h6>
              </a>
            </div>
          <?php endforeach ?>
          <?php foreach ($f['pemeran'] as $p) : ?>
            <div>
              <a href=" <?= BASEURL, "/home/pemeran/", $p['pemeran_id'] ?>">
                <h6 class="text-info"><?= $p['name']; ?> | </h6>
              </a>
            </div>
          <?php endforeach ?>
        </div>
        <div class="card-text mt-4">
          <hr class="mt-4 mb-3">
          <p class="card-text">Keterangan : </p>
          <p class="card-text"><?= $f['description']; ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>