
<div id="contenedor">
    <div id="menu_panel">

        <div  id="sub_menu_titulo">
            <h2>MENÚ PRINCIPAL</h2>
        </div>

        <div class="btn-group-vertical" role="group" aria-label="...">
            <a class="btn btn-primary btn-lg" role="button" id="pro_stock">PRODUCTOS STOCK</a>
            <a class="btn btn-primary btn-lg" role="button" id="pro_stock_min">PRODUCTOS CON STOCK</a>
            <a class="btn btn-primary btn-lg" role="button" id="clis_proves">CLIENTES Y PROVEEDORES</a>
            <a class="btn btn-primary btn-lg" role="button" id="p_mas_vende">PRODUCTOS MÁS VENDIDOS</a>
            <a class="btn btn-primary btn-lg" role="button" id="total_dinero">TOTAL DE DINERO</a>
            <a class="btn btn-primary btn-lg" role="button" id="compras_prove">COMPRA DE LOS PROVEEDORES</a>
            <a class="btn btn-primary btn-lg" role="button" id="ventas_cli">VENTA CLIENTES</a>
            <a class="btn btn-primary btn-lg" role="button" id="bol_fac">BOLETAS O FACTURAS</a>
            <a class="btn btn-primary btn-lg" role="button" id="bol_fac_prove">DETALLE BOLETASS O FACTURAS 1</a>
            <a class="btn btn-primary btn-lg" role="button" id="bol_fac_cli">DETALLE BOLETASS O FACTURAS 2</a>
            <a class="btn btn-primary btn-lg" role="button">CLIENTES PRODUCTO</a>
            <a class="btn btn-primary btn-lg" role="button">MOVIMIENTOS PRODUCTO</a>

        </div>
    </div>
    <div id="panel_principal">
        <div class="card">
            <div class="card-header">
                <h1>Panel Principal</h1>
            </div>
        </div>
        <div id="formularios"></div>
        <div id="resultado">

        </div>
    </div>
    <div id="boton_pdf">
        <button type="button" onclick="crear_pdf()">Crear PDF</button>
    </div>
    <script>
        function crear_pdf() {
            html2canvas(document.getElementById('resultado')).then(function (canvas) {


                let contentWidth = canvas.width;
                let contentHeight = canvas.height;

                //The height of the canvas which one pdf page can show;
                let pageHeight = contentWidth / 592.28 * 841.89;
                //the height of canvas that haven't render to pdf
                let leftHeight = contentHeight;
                //addImage y-axial offset
                let position = 0;
                //a4 format [595.28,841.89]
                let imgWidth = 595.28;
                let imgHeight = 592.28/contentWidth * contentHeight;

                let pageData = canvas.toDataURL('image/jpeg', 1.0);

                let pdf = new jsPDF('', 'pt', 'a4');

                if (leftHeight < pageHeight) {
                    pdf.addImage(pageData, 'JPEG', 0, 0, imgWidth, imgHeight );
                } else {
                    while(leftHeight > 0) {
                        pdf.addImage(pageData, 'JPEG', 0, position, imgWidth, imgHeight)
                        leftHeight -= pageHeight;
                        position -= 841.89;
                        //avoid blank page
                        if(leftHeight > 0) {
                            pdf.addPage();
                        }
                    }
                }
                pdf.save('reportes.pdf')
                //
                //
                // let img=canvas.toDataURL('image/png')
                // let doc = new jsPDF();
                // doc.addImage(img,'JPGE',20,20)
                // doc.save('reporte1.pdf')
                // document.body.appendChild(canvas);
            })
        }
    </script>
</div>
