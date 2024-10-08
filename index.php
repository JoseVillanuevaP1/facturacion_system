<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML format</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <form class="form-text" id="formId" action="procesar_xml.php" method="post" enctype="multipart/form-data">
        <h1>Capturar datos documento XML</h1>
        <hr>
        <div>
            <input type="file" id="inputId" accept=".xml" required>
            <button type="submit" class="extraer">Extraer y generar Excel</button>
        </div>
        <div>
            <!-- <input type="button" id="btn" value="Process" onclick=""/> -->
            
        </div>
        <hr>
        <table class="table-dark" border="0" id="tableId">
            <tr>
                <th>Número documento</th>
                <th>Fecha de facturación</th>
                <th>Fecha de contabilización</th>
                <th>IGV</th>
                <th>Sub-total</th>
                <th>Total</th>
                <th>Detalle</th>
            </tr>
        </table>
    </form>

    
</body>
<script src="script.js"></script>
<script src="xlsx.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</html>