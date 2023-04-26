<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover dados</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <form id="form_" name="form_remover" class="form_remover" action="remover.php">
        
        <div><h1>Remover dados</h1></div>

            <div class="agrupamento_remover">
              
                <div>

                    <div><label>Codigo do veículo</label></div>

                    <div><input type="text" id="codigo_veiculo" name="codigo_veiculo" placeholder="000" required autofocus></div>

                    <div><input type="submit" id="btn_remover" name="btn_remover" value="Remover"></div>


                </div>
            </div>

    </form>
    
</body>
</html>