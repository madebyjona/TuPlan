window.addEventListener("DOMContentLoaded", () => {
  let $btnHamb = document.querySelector(".encabezado__hamburguesa a");
  let $Menu = document.querySelector(".encabezado__menu-responsive");

  $Menu.hidden = true;
  $btnHamb.addEventListener("click", (e) => {
    console.log("menuuuuu")
    e.preventDefault();

    $Menu.hidden = !$Menu.hidden;
    $Menu.classList.toggle("menu_active");
  });
});

jQuery(document).ready(function ($) {
  $(".filter-link").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("activeFilter");
    editFilterInputs($("#filters-" + $(this).data("type")), $(this).data("id"));

    filterProducts();
  });

  function editFilterInputs(inputField, value) {
    const currentFilters = inputField.val().split(",");

    const newFilter = value.toString();

    if (currentFilters.includes(newFilter)) {
      const i = currentFilters.indexOf(newFilter);
      currentFilters.splice(i, 1);
      inputField.val(currentFilters);
    } else {
      inputField.val(inputField.val() + "," + newFilter);
    }
  }

  $(".submit-price").on("click", function (event) {
    event.preventDefault();
    filterProducts();
  });

  function filterProducts() {
    const tipos = $("#filters-tipos").val().split(",");
    const propiedad = $("#filters-propiedad").val().split(",");
    const zonas = $("#filters-zonas").val().split(",");
    const price_min = $("#price_min")[0].value;
    const price_max = $("#price_max")[0].value;

    $.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      dataType: "json",
      data: {
        action: "filter_products",
        tipos,
        zonas,
        propiedad,
        price_min,
        price_max,
      },
      success: function (res) {
        $("#result-count").html(res.total);
        $("#main-product-list").html(res.html);
      },
      error: function (err) {
        console.error(err);
      },
    });
  }

  $("#filter-link-home").on("click", function () {
    filterProductsHome();
  });

  function filterProductsHome() {
    const tipos = $("#select-tipo").val().toLowerCase();
    const propiedad = $("#select-propiedad").val().toLowerCase();
    const zonas = $("#select-zona").val().toLowerCase();
    location.href = `/inmuebles?tipo=${tipos}&propiedad=${propiedad}&zona=${zonas}`;
  }
  if (window.location.href.indexOf("?tipo=") != -1) {
    // Se ejecuta cuando la página ya se cargó
    $(function () {
      // Crear un objeto URL con la ubicación de la página
      let url = new URL(window.location.href);
      // Busca si existe el parámetro
      let tipo = url.searchParams.get("tipo");
      let propiedad = url.searchParams.get("propiedad");
      let zona = url.searchParams.get("zona");

      $("#" + tipo).toggleClass("activeFilter");
      $("#" + propiedad).toggleClass("activeFilter");
      $("#" + zona).toggleClass("activeFilter");

      $("#filters-tipos").val("," + tipo);
      $("#filters-propiedad").val("," + propiedad);
      $("#filters-zonas").val("," + zona);

      filterProducts();
    });
  }

  const modal = document.getElementById("myModal");

  $(".slick-slide img").on("click", function () {
    modal.style.display = "block";
    $(".modal-content .slick-slide").attr("style","width:100%");
    $(".modal-content .slick-list").attr("style","height:100%");
    $(".modal-content .slick-track").attr("style","width:100%");
  });

  $(".close").on("click", function () {
    modal.style.display = "none";
  });
  

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
};
