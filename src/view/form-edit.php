<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title> Agenda de Contatos </title>
    
    <link rel="stylesheet" href="../../style/body/body.css">
    <link rel="stylesheet" href="../../style/menu/menu.css">
    <link rel="stylesheet" href="../../style/form/form.css">
    <link rel="stylesheet" href="../../style/form/form-input.css">
    <link rel="stylesheet" href="../../style/form/form-buton.css">
    <link rel="stylesheet" href="../../style/modal/modal.css">
    <link rel="stylesheet" href="../../style/alert/alert.css">

</head>
<body>
    <main>
        <section class="modal">
            
            <div>
                <span class="modal-msg"> Deseja deletar o contato? </span>
                <a class="modal-link" href="/deletar-contato?id=<?php echo $contato['id']; ?>"> SIM </a> 
                <button class="modal-btn"> NÃO </button>
            </div>

        </section>
        <header>
            
            <nav class="menu">
                <h1 class="title"> Agenda </h1>
                <ul>
                    <li>
                        <a href="/formulario-contato"> Cadastrar </a>
                    </li>
                    <li>
                        <a href="/lista-contato"> Contatos </a>
                    </li>
                </ul>
            </nav>

        </header>
        <section>

            <?php if($_SERVER['PATH_INFO'] === '/visualizar-contato'): ?>
            <form class="form-contato" action="" method="">
                <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name" value="<?php echo $contato['name'];?>" disabled>
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday" value="<?php echo $contato['birthday'];?>" disabled>
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email" value="<?php echo $contato['email'];?>" disabled>
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel" value="<?php echo $contato['tel'];?>" disabled>
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel" value="<?php echo $contato['cel'];?>" disabled>
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" id="cep" type="text" name="cep" value="<?php echo $contato['cep'];?>" disabled>
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street" value="<?php echo $contato['street'];?>" disabled>
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num" value="<?php echo $contato['num'];?>" disabled>
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp" value="<?php echo $contato['comp'];?>" disabled>
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district" value="<?php echo $contato['district'];?>" disabled>
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city" value="<?php echo $contato['city'];?>" disabled>
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf" value="<?php echo $contato['uf'];?>" disabled>
                </div>
                <a class="form-link" id="link-edit-contato" href="/editar-contato?id=<?php echo $contato['id']; ?>"> Editar </a> 
                <a class="form-link" id="link-delete-contato"> Deletar </a>   
            </form> 
            <?php endif; ?>

            <?php if($_SERVER['PATH_INFO'] === '/editar-contato'): ?>
            <form class="form-contato" action="/atualizar-contato?id=<?php echo $contato['id']; ?>" method="POST">
                <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name" value="<?php echo $contato['name'];?>">
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday" value="<?php echo $contato['birthday'];?>">
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email" value="<?php echo $contato['email'];?>">
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel" value="<?php echo $contato['tel'];?>">
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel" value="<?php echo $contato['cel'];?>">
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" id="cep" type="text" name="cep" value="<?php echo $contato['cep'];?>">
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street" value="<?php echo $contato['street'];?>">
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num" value="<?php echo $contato['num'];?>">
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp" value="<?php echo $contato['comp'];?>">
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district" value="<?php echo $contato['district'];?>">
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city" value="<?php echo $contato['city'];?>">
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf" value="<?php echo $contato['uf'];?>">
                </div>
                <button class="form-btn" id="btn-update-contato" type="submit"> Atualizar </button>
                <aside class="alert">
                    <span class="msg-alert"></span>
                </aside>
            </form> 
            <?php endif; ?> 
            
        </section>

        <script type="module" src="../../script/main.js"></script>

    </main>
</body>
</html>
