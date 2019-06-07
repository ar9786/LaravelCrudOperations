<?php include 'include/header.php'; ?>
      <!-- End Navbar -->
      <div class="content page_data">
        <div class="mb-5 clearfix">
          <p class="mb-0 fz35 pt-3">Sports Organisation</p>
        </div>
          <div class="custom_table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Account created date</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.</td>
                        <td class="text-center">Index Start Here</td>
                        <td class="text-center">15/02/2019</td>
                        
                        <td class="td-actions text-center">
                            <button type="button" class="btn btn-info pt-2 pb-2 pl-3 pr-3">
                                Disable
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2.</td>
                        <td class="text-center">Trade Finance News & Jobs.</td>
                        <td class="text-center">15/02/2019</td>                        
                        <td class="td-actions text-center">
                            <button type="button" class="btn btn-info pt-2 pb-2 pl-3 pr-3">
                                Disable
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3.</td>
                        <td class="text-center">C.D.C.S Refresher</td>
                        <td class="text-center">15/02/2019</td>                        
                        <td class="td-actions text-center">
                            <button type="button" class="btn btn-info pt-2 pb-2 pl-3 pr-3">
                                Disable
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4.</td>
                        <td class="text-center">Lorem ipsum dolor sit amet.</td>
                        <td class="text-center">15/02/2019</td>                        
                        <td class="td-actions text-center">
                            <button type="button" class="btn btn-info pt-2 pb-2 pl-3 pr-3">
                                Disable
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>

          </div>
      </div>


      <!-- add edit_category modal start here -->
        <div class="modal fade" id="edit_category" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-signup" role="document">
            <div class="modal-content">
              <div class="card card-signup card-plain m-0">
                <div class="modal-header">
                  <h5 class="modal-title card-title">Edit Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons">clear</i>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <form action="" class="w-100 pl-4 pr-4">
                      <div class="col-12">
                        <label for="customFile" class="mb-0">
                            <img src="http://via.placeholder.com/120x120" class="img-fluid rounded" alt="">
                            <span class="align-bottom ml-3">Upload Photo</span>
                        </label>
                        <input type="file" name="filename" class="custom-file-input d-none" id="customFile">
                      </div>                                                        
                      <div class="form-group col-12 mt-4">                              
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Category Name">
                      </div>
                      <div class="col-12">
                        <div class="col_selector mt-3">
                          <label class="mr-5">                                    
                            <span>Category Price : </span>
                          </label>
                          <div class="form-check form-check-radio form-check-inline mr-5">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Free
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Paid
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-12">                              
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Price">
                      </div>
                      <div class="col-12">
                        <div class="col_selector text-right">
                          <button type="submit" class="btn btn-info mr-3">Save</button>
                          <button type="submit" class="btn btn-info">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- add modal end here -->
   <?php include 'include/footer.php'; ?>