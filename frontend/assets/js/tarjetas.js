$(document).ready(function(){
    
    var tarjetas = $("#tarjetas");

    $.get("../backend/obtenerPersonaje.php", {})
        .done(function(data){
            var personaje = $.parseJSON(data);
            console.log(personaje);
            $.each(personaje, function(key, value){                
                tarjetas.append(
                    '<div class="col" >'+
                        '<div class="card" style="height: 400px;">'+
                            '<div class="img" style="text-align: center;">'+
                                '<img class="img-personaje"  src="../frontend/assets/img/uploads/' + personaje[key].img + '" class="card-img-top" alt="' + personaje[key].img + '" style="height: 150px; width: 150px;">'+
                            '</div>'+
                            '<div class="card-body">'+
                                '<h5 class="card-title">' + personaje[key].nombre + '</h5>'+
                                '<p class="card-text" style="height: 100px; text-align: justify;">' + personaje[key].descripcion+'</p>'+
                                '<div class="botones" style = "margin-top: 50px;">'+
                                    '<input type="text" class="like" readonly name="btn-like1" id="id' + personaje[key].codigo + '"  value="Like" onclick="confirmarLike('+personaje[key].codigo+')" style="text-align: center;">'+
                                    '<input type="text" class="dislike" readonly name="btn-dislike1" id="id' + personaje[key].codigo + '" value="Disike"  onclick="confirmarDislike('+personaje[key].codigo+')" style="text-align: center;">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            })
        })
    
});