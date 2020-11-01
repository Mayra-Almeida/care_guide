$(".member").hover(
    function () {
      $( this ).find(".card-body").addClass("hover");
    },
    function () {
      $( this ).find(".card-body").removeClass("hover");
    }
  );