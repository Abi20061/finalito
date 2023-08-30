$(document).ready(function () {
    //alert("Funciona jquery");
    $("#boton1").on("click", function(){
        alert("funciona click");
        console.log("funciona click boton1");
        $("#texto1").html("Texto agregado al parrafo")

    });
    $("#texto1").hover(function () {
        $(this).css("background-color", "purple");
        $(this).css("font-size", "50px");
    }, function (){
        $(this).css("background-color", "white");
        $(this).css("font-size", "20px");
        }
    );
    $("#boton2").click(function (e) {
        $("#imagen1").fadeToggle();
    });
});