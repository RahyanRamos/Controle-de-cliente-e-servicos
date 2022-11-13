<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '_parts/_linkCSS.php'; ?>
    <title>Nova Ordem</title>
</head>

<body>
    <header>

    </header>
    <?php include_once '_parts/_header.php'; ?>
    <div class="container mt-3">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label for="txtNumero" class="form-label">Nº Ordem de Serviço</label>
                    <input type="text" name="txtNumero" id="txtNumero" readonly class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="txtData" class="form-label">Data</label>
                    <input type="date" name="txtData" id="txtData" value="<?php echo date(Y-m-d) ?>" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="sltCliente" class="form-label"></label>
                    <select name="sltCliente" id="sltCliente" class="form-select">
                        <option value="">Selecione o cliente</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <?php include '_parts/_linkJS.php'; ?>
</body>
</html>