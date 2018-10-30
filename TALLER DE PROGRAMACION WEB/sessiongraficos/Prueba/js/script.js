let app= angular.module('graf',[]);

app.controller("graficos_pro",['$scope','$http',function (s, h) {
    s.productos=[];
    s.descripcionproductos=[];
    s.canti_pro=[];
    s.recivirpro=function () {
        h({
            method:'POST',
            url:'./php/controlador_pro.php'
        })
            .then(function (data) {
                s.productos=data.data;
                // console.log(s.productos[0].Descripcion_Producto)
                for (let clave in s.productos){
                    if (s.productos.hasOwnProperty(clave)){
                        console.log("la clave es "+ clave+ "y el valor es "+s.productos[clave].Descripcion_Producto);
                        s.descripcionproductos.push(s.productos[clave].Descripcion_Producto);
                        s.canti_pro.push(s.productos[clave].Cantidad);
                    }
                }
                console.log(s.descripcionproductos);
                console.log(s.canti_pro);
                creargrafico(s.canti_pro,s.descripcionproductos,'migrafico')
            },function (error) {
                console.log("Ubo un error"+error)
            })
    }
}]);
function creargrafico(cantidad_pro,nom_pro,id) {
    let ctx = document.getElementById(id).getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: nom_pro,
            datasets: [{
                label: '# veces comprado',
                data: cantidad_pro,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
            // scales: {
            //     yAxes: [{
            //         ticks: {
            //             fontSize: 15
            //         }
            //     }],
            //     xAxes: [{
            //        ticks:{
            //            fontSize: 15
            //        }
            //     }]
            // }
        }
    });

}
function limpiarcanvas() {
    // Creamos nuestro canvas
    let dato = document.getElementById("migrafico").getContext('2d');
    let migrafico=new Chart(dato);
    migrafico.destroy();
}