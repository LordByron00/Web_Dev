<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Modal Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Style for the modal */
    .modal-frame {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Click an image to view different products/items</h2>
  <div class="row">
    <div class="col-md-4">
      <a href="#" class="image-link" data-image="image1.jpg">
        <img src="https://www.hp.com/content/dam/sites/worldwide/homepage/images/printers-main.jpg" alt="Product 1" class="img-fluid">
      </a>
    </div>
    <div class="col-md-4">
      <a href="#" class="image-link" data-image="image2.jpg">
        <img src="https://www.hp.com/content/dam/sites/worldwide/homepage/images/pcs-main.jpg" alt="Product 2" class="img-fluid">
      </a>
    </div>
    <div class="col-md-4">
      <a href="#" class="image-link" data-image="image3.jpg">
        <img src="https://www.nabdsys.com/blogs/wp-content/uploads/2015/11/iStock_000034862400Large-2.jpg" alt="Product 3" class="img-fluid">
      </a>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-frame" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <img id="modal-image" src="" alt="Product Image" class="img-fluid"> -->
        <!-- Content for each product can be dynamically loaded here based on which image was clicked -->
        <p id="modal-content">
        <div class="container">
    <div class="row">
      <!-- Product 1 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Description of Product 1.</p>
          </div>
        </div>
      </div>
      
      <!-- Product 2 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">Description of Product 2.</p>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">Description of Product 3.</p>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text">Description of Product 4.</p>
          </div>
        </div>
      </div>

      <!-- Product 5 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">Product 5</h5>
            <p class="card-text">Description of Product 5.</p>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 6">
          <div class="card-body">
            <h5 class="card-title">Product 6</h5>
            <p class="card-text">Description of Product 6.</p>
          </div>
        </div>
      </div>

      <!-- Product 7 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 7">
          <div class="card-body">
            <h5 class="card-title">Product 7</h5>
            <p class="card-text">Description of Product 7.</p>
          </div>
        </div>
      </div>

      <!-- Product 8 -->
      <div class="col-md-3">
        <div class="card product-card">
          <img src="https://media.wired.com/photos/64daad6b4a854832b16fd3bc/master/w_1920,c_limit/How-to-Choose-a-Laptop-August-2023-Gear.jpg" class="card-img-top" alt="Product 8">
          <div class="card-body">
            <h5 class="card-title">Product 8</h5>
            <p class="card-text">Description of Product 8.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('.image-link').click(function() {
      var imageSrc = $(this).data('image');
      $('#modal-image').attr('src', imageSrc);
      $('#productModal').modal('show');
    });
  });
</script>
</body>
</html>
