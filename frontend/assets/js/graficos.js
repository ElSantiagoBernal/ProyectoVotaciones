$.get("../backend/obtenerVotos.php", {})
    .done(function (data) {
        var votos = $.parseJSON(data);

        var etiquetas = [];
        var votacionLikes = [];
        var votacionDislikes = [];
        $.each(votos, function (key, value) {
            etiquetas.push(votos[key].nombre);
            votacionLikes.push(votos[key].likes);
            votacionDislikes.push(votos[key].dislikes);
        });

        graficoMeGusta(etiquetas, votacionLikes);
        graficoNoMeGusta(etiquetas, votacionDislikes);
    })


function graficoMeGusta(etiquetas, votacion) {
    const ctx = document.getElementById('graficoMeGusta').getContext('2d');
    const chartMeGusta = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: '# de likes',
                data: votacion,
                // TODO: Cargar colores aleatorios de acuerdo con la cantidad de personajes
                backgroundColor: [
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB()
                ],
                borderColor: [
                    (0,0,0,0)
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Gráfico Total No Me Gusta
// TODO: Implementar una función para este tipo de gráfico y cargar datos dinámicos.


/*const ctx1 = document.getElementById('graficoNoMeGusta').getContext('2d');
const graficoNoMeGusta = new Chart(ctx1, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            label: '# No me gusta',
            data: [12, 19, 3],
            backgroundColor: [
                colorRGB(),
                colorRGB(),
                colorRGB
            ],
            hoverOffset: 4
        }]
    }
});*/

function graficoNoMeGusta(etiquetas, votacion) {
    const ctx1 = document.getElementById('graficoNoMeGusta').getContext('2d');
    const graficoNoMeGusta = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: etiquetas,
            datasets: [{
                label: '# No me gusta',
                data: votacion,
                backgroundColor: [
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB()
                ],
                hoverOffset: 4
            }]
        }
    });
    /*const ctx = document.getElementById('graficoNoMeGusta').getContext('2d');
    const chartMeGusta = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: '# De dislikes',
                data: votacion,
                // TODO: Cargar colores aleatorios de acuerdo con la cantidad de personajes
                backgroundColor: [
                    colorRGB(),
                    colorRGB()
                ],
                borderColor: [
                    colorRGB(),
                    colorRGB
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });*/
}

function generarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function colorRGB() {
    var color = "(" + generarNumero(25) + "," + 0 + "," + generarNumero(255) + ")";
    return "rgb" + color;
}