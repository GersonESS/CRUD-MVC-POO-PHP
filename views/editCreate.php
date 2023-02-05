<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/index.css">
    <title>Clients</title>
</head>
<body>
    <a class="button btn-back" href="index.php">Volta</a>
    <h1>Clientes config</h1>
    <div class="content">
        <form id="form" action="index.php" method="POST">
            <div class="input-box">
                <label for="name">Nome:</label>

                 <!-- oninput="nameValidate()" -->

                 <input class="inputs required" type="text" placeholder="Digite o nome do cliente" value="<?= isset($resultData[0]['nome']) ? $resultData[0]['nome'] : '' ?>" name="nome" required>

                <!-- <input class="inputs required" type="text" placeholder="Digite o nome do cliente" value="<?= isset($resultData[0]['nome']) ? $resultData[0]['nome'] : '' ?>" name="nome" required oninput="nameValidate()"> -->
                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

            </div>
            <br><br>
            <div class="input-box">
                <label for="email">Email:</label>
                <input class="input" type="email" placeholder="Escreva o email do cliente" value="<?= isset($resultData[0]['email']) ? $resultData[0]['email'] : '' ?>" name="email" required>
            </div>
            <br><br>
            <div class="input-box">
                <label for="celular">Celular:</label>
                <input class="input" type="number" placeholder="Escreva o celular do cliente" value="<?= isset($resultData[0]['celular']) ? $resultData[0]['celular'] : '' ?>" name="celular" required>
            </div>
            <br><br>
            <input type="hidden" name="a" value="<?= isset($resultData[0]['id']) ? 'edit' : 'new' ?>">
            <input type="hidden" name="id" value="<?= isset($resultData[0]['id']) ? $resultData[0]['id'] : '' ?>">
            <input class="button btn-search" type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
<script>
    const form   = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans  = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate();
        comparePassword();
    });

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate(){
        if(campos[0].value.length < 3)
        {
            setError(0);
        }
        else
        {
            removeError(0);
        }
    }

    function emailValidate(){
        if(!emailRegex.test(campos[1].value))
        {
            setError(1);
        }
        else
        {
            removeError(1);
        }
    }

    function mainPasswordValidate(){
        if(campos[2].value.length < 8)
        {
            setError(2);
        }
        else
        {
            removeError(2);
            comparePassword();
        }
    }

    function comparePassword(){
        if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
        {
            removeError(3);
        }
        else
        {
            setError(3);
        }
    }

</script>
</html>