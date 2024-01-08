<?php
  // for displaying all the categories 
  require_once('categoryController.php');
?>
<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-allCategory-tab" data-bs-toggle="pill" data-bs-target="#v-pills-allCategory" type="button" role="tab" aria-controls="v-pills-allCategory" aria-selected="true">All Category</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addCategories" type="button" role="tab" aria-controls="v-pills-addCategories" aria-selected="false">Add Categories</button>
    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <!------------------------------- 
    ---------------------------------
    ---------------------------------
    All Categories
    ---------------------------------
    ---------------------------------
    --------------------------------->
    <div class="tab-pane fade show active" id="v-pills-allCategory" role="tabpanel" aria-labelledby="v-pills-allCategory-tab" tabindex="0">
      
      
    </div>
    <!------------------------------- 
    ---------------------------------
    ---------------------------------
    Add Categories
    ---------------------------------
    ---------------------------------
    --------------------------------->
    <div class="tab-pane fade" id="v-pills-addCategories" role="tabpanel" aria-labelledby="v-pills-addCategories-tab" tabindex="0">
      <form id="category_form" class="row g-3 needs-validation" method="post" novalidate>
          <div class="col-12">
              <label for="validationCustom01"  class="form-label">Category Name</label>
              <input type="text" class="form-control" id="category" name="category" id="validationCustom01" required>
              <div class="valid-feedback">
              Looks good!
              </div>
          </div>
          <div class="col-12">
              <label for="validationCustom01" class="form-label">Category Description</label>
              <input type="text" class="form-control" id="cDescription" name="cDescription" id="validationCustom01" required>
              <div class="valid-feedback">
              Looks good!
              </div>
          </div>
          <div class="col-12 d-flex">
              <button class="btn btn-primary" id="category_submit__button">Add Category</button>
          </div>
      </form>
      <div class="row">
        <div class="col">
          <p id="form_result"></p>
        </div>
      </div>
      <script>
          $(document).ready(function() {
              $('#category_submit__button').click(function() {
                  // Serialize form data
                  var formData = $('#category_form').serialize();

                  // Make an AJAX request to a PHP script
                  $.ajax({
                      url: 'categoryController.php', // Replace with your PHP script file
                      method: 'POST',
                      data: formData,
                      success: function(response) {
                          // Update the result div with the data received from the server
                          $('#form_result').html(response);
                      },
                      error: function(error) {
                          console.error('Error:', error);
                      }
                  });
              });
          });

      </script>
    </div>
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
  </div>
</div>