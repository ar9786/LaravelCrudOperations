 <?php include 'include/header.php'; ?>
      <!-- End Navbar -->
      <div class="content page_data">
        <div class="mb-5">
          <p class="mb-0 fz35 pt-3">Images</p>
        </div>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="col_selector mb-4">
                  <div class="img_upload">
                    <label for="customFile" class="mb-0">
                      <i class="fa fa-upload"></i>
                    </label>
                    <input type="file" name="filename" class="custom-file-input d-none" id="customFile">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col_selector mb-4">
                  <div class="col_image img_hover">
                    <img src="./assets/img/images_1.jpg" alt="" class="img-fluid data_img w-100">
                    <p class="fz26 m-0 hover_icon">
                      <a href="javascript:void(0);" class="mr-3" data-toggle="modal" data-target="#img_view"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col_selector mb-4">
                  <div class="col_image img_hover">
                    <img src="./assets/img/images_1.jpg" alt="" class="img-fluid data_img w-100">
                    <p class="fz26 m-0 hover_icon">
                      <a href="javascript:void(0);" class="mr-3" data-toggle="modal" data-target="#img_view"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col_selector mb-4">
                  <div class="col_image img_hover">
                    <img src="./assets/img/images_1.jpg" alt="" class="img-fluid data_img w-100">
                    <p class="fz26 m-0 hover_icon">
                      <a href="javascript:void(0);" class="mr-3" data-toggle="modal" data-target="#img_view"><i class="fa fa-eye"></i></a>
                      <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- // image view modal start here -->
      <div class="modal fade" id="img_view" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-signup" role="document">
          <div class="modal-content">
            <div class="card card-signup card-plain m-0">
              <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons">clear</i>
                </button>
                
              </div>
              <div>
                  <img src="./assets/img/view_image.jpg" class="img-fluid" alt="">
                </div>
              <!-- <div class="modal-body pt-0 pb-0">
                <div class="row">
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- // image view modal end here -->
    <?php include 'include/footer.php'; ?>