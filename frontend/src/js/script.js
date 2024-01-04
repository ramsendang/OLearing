$(document).ready(function () {
    // Initially show the first tab content
    $(".tab-content:first").addClass("show");
  
    // Click event handler for tabs
    $(".tab").click(function () {
      // Hide all tab contents
      $(".tab-content").removeClass("show");
  
      // Show the corresponding tab content based on data-tab attribute
      var tabId = $(this).data("tab");
      $("#" + tabId).addClass("show");
    });
  });
  