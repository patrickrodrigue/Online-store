$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});

var button = document.getElementById("comprar");
button.addEventListener('click', function() {
  window.location.href = "detalhesproduto.php";
});
