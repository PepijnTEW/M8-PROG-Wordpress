jQuery(document).ready(function ($) {
  $("#filter-form").on("change", function () {
    $.ajax({
      url: ajaxurl.url,
      data: $(this).serialize(),
      type: "GET",
      success: function (response) {
        $("#recept-grid").html(response);
      },
    });
  });
});
