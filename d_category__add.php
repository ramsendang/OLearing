<?php 
require_once('backend/component/header.php');
require_once('backend/component/d_category__sidebar.php');
?>
    <div class="col-10">
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
</div>