<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AULIA SINTA_1122</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/0d95b64c38.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #242424">
  <div class="container">
    <h1 class="text-light text-center">Movie List</h1>

    <button type="button" class="btn btn-primary float-end"><i class="fas fa-plus-circle"></i> Create</button>

    <div class="row">
      <div class="col-sm input-group mb-3">
        <input type="text" class="form-control" id="search" placeholder="Search movie title..." aria-label="Recipient's username" aria-describedby="button-addon2" />
        <button class="btn btn-primary" type="button" id="button-addon2">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="col-sm input-group mb-3">
        <select class="form-select" id="filter" aria-label="Default select example">
          <option class="text-muted" selected>Filter movie rating</option>
          <option value="r">R</option>
          <option value="d">D</option>
          <option value="su">SU</option>
          <option value="pg-13">PG-13</option>
        </select>
      </div>
      <div class="col-sm input-group mb-3">
        <select class="form-select" id="sort" aria-label="Default select example">
          <option value="ASC">Sort by Title Ascending</option>
          <option value="DESC">Sort by Title Descending</option>
        </select>
      </div>
    </div>
    <div class="row" id="content">
      <?php
      require_once 'connect.php';
      $query = mysqli_query($conn, "SELECT * FROM movies");
      while ($row = mysqli_fetch_object($query)) :
      ?>
        <div class="col-sm">
          <div class="card" style="width: 15rem">
            <img src="<?= $row->gambar; ?>" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title"><?= $row->judul; ?> (<?= $row->tahun; ?>)</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-start">
                  <p class="card-text">Rating: <?= $row->rating; ?></p>
                </div>
                <div class="d-flex justify-content-end">
                  <i class="fas fa-edit fa-lg text-primary mr-1"></i>
                  <i class="fas fa-trash-alt fa-lg text-danger"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#search').on('keyup', function() {
        $.ajax({
          type: 'POST',
          url: 'search.php',
          data: {
            search: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });

      $('#filter').on('change', function() {
        $.ajax({
          type: 'POST',
          url: 'filter.php',
          data: {
            filter: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });

      $('#sort').on('change', function() {
        $.ajax({
          type: 'POST',
          url: 'sort.php',
          data: {
            sort: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });
    });
  </script>
</body>

</html>