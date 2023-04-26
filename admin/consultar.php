<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de dados</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <form id="form_consultar" name="form_consultar" class="form_consultar" action="consulta.php">
        
        <div><h1>Consultar dados</h1></div>

            <div class="agrupamento_consulta">
              
                <div>

                    <div><label>Codigo do veículo</label></div>

                    <div><input type="text" id="codigo_veiculo" name="codigo_veiculo" placeholder="000" required autofocus></div>

                    <div><input type="submit" id="btn_consultar" name="btn_consultar" value="Consultar"></div>


                </div>
            </div>

    </form>
    
</body>
</html>