<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row py-5 border-bottom border-2">
            <div class="col">
                <span class="fs-3">Product Add</span>
            </div>
            <div class="col text-end">
                <span><a class="text-decoration-none fw-bolder btn btn-outline-success px-3 me-3" id="save">Save</a></span>
                <span><a class="text-decoration-none fw-bolder btn btn-outline-danger px-3" id="cancel" href="/">Cancel</a></span>
            </div>
        </div>
    </div>
    <div class="container my-5" style="min-height:65vh">
        <div class="col-12 col-md-6 col-lg-4">
            <form id="product_form">
                <div class="mb-3 row">
                    <label for="sku" class="col-sm-3 col-form-label">SKU</label>
                    <div class="col-sm-9 input-control">
                      <input type="text" class="form-control" id="sku">
                      <small class="text-danger" hidden>Error</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9 input-control">
                      <input type="text" class="form-control" id="name">
                      <small class="text-danger" hidden>Error</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-3 col-form-label">Price ($)</label>
                    <div class="col-sm-9 input-control">
                      <input type="number" class="form-control" id="price">
                      <small class="text-danger" hidden>Error</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="productType" class="col-sm-5 col-form-label">Type Switcher</label>
                    <div class="col-sm-7 input-control">
                        <select class="form-select" id="productType">
                          <option value="0" selected>Type Switcher</option>
                          <option value="dvd">DVD</option>
                          <option value="book">Book</option>
                          <option value="furniture">Furniture</option>
                        </select>
                        <small class="text-danger" hidden>Error</small>
                    </div>
                </div>
                <div class="dynamics">
                    <div class="d-none" id="dvd">
                        <div class="mb-3 row">
                            <label for="size" class="col-sm-7 col-form-label">Size (MB)</label>
                            <div class="col-sm-5">
                              <input type="number" class="form-control" id="size">
                              <small class="text-danger" hidden>Error</small>
                            </div>
                        </div>
                        <div class="fs-6 fw-bolder mt-4">*Please, provide size</div>
                    </div>
                    <div class="d-none" id="furniture">
                        <div class="mb-3 row">
                            <label for="height" class="col-sm-7 col-form-label">Height (CM)</label>
                            <div class="col-sm-5">
                              <input type="number" class="form-control" id="height">
                              <small class="text-danger" hidden>Error</small>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="width" class="col-sm-7 col-form-label">Width (CM)</label>
                            <div class="col-sm-5">
                              <input type="number" class="form-control" id="width">
                              <small class="text-danger" hidden>Error</small>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="length" class="col-sm-7 col-form-label">Length (CM)</label>
                            <div class="col-sm-5">
                              <input type="number" class="form-control" id="length">
                              <small class="text-danger" hidden>Error</small>
                            </div>
                        </div>
                        <div class="fs-6 fw-bolder mt-4">*Please, provide dimensions</div>
                    </div>
                    <div class="d-none" id="book">
                        <div class="mb-3 row">
                            <label for="weight" class="col-sm-7 col-form-label">Weight (KG)</label>
                            <div class="col-sm-5">
                              <input type="number" class="form-control" id="weight">
                              <small class="text-danger" hidden>Error</small>
                            </div>
                        </div>
                        <div class="fs-6 fw-bolder mt-4">*Please, provide weight</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row border-top border-2 py-3 text-center">
            <div class="col">Scandiweb Test assignment</div>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=".\public\main.js"></script>
</body>
</html>
