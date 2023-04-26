<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    
    <form id="form_atualizar" name="form_atualizar" class="form_atualizar" action="atualiza.php">

        <div><h1>Atualizar os dados</h1></div>

            <div class="agrupamento_atualizar">
                <div>

                    <div><label>Codigo do veículo</label></div>

                    <div><input type="text" id="codigo_veiculo" name="codigo_veiculo" placeholder="000" required autofocus></div>

                    <div><label>Digite a descrição do veículo </label></div>

                    <div><input type="text" id="descricao_veiculo" name="descricao_veiculo" required autofocus></div>

                    <div><label>Digite a marca do veículo </label></div>

                    <div><input type="text" id="marca_veiculo" name="marca_veiculo" required autofocus></div>

                    <div><label>Digite o modelo do veículo</label></div>

                    <div><input type="text" id="modelo_veiculo" name="marca_veiculo" required autofocus></div>

                    <div><label>Digite o ano do veículo</label></div>

                    <div><input type="text" id="ano_veiculo" name="ano_veiculo" placeholder="0000/0000" required autofocus></div>

                    <div><input type="submit" id="btn_atualizar" name="btn_atualizar" value="Atualizar"></div>

                </div>    
            
            </div>

    </form>

</body>
</html>