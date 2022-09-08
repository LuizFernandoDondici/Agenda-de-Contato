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
    <link rel="stylesheet" href="../../style/alert/alert.css">

</head>
<body>
    <main>
        <header>
            
            <nav class="menu">
                <h1 class="title"> Agenda </h1>
                <ul>
                    <li>
                        <a href="/lista-contato"> Contatos </a>
                    </li>
                </ul>
            </nav>

        </header>
        <section>

            <form class="form-contato" action="/salvar-contato" method="POST">
                <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name">
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday">
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email">
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel">
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel">
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" id="cep" type="text" name="cep">
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street">
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num">
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp">
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district">
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city">
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf">
                </div>
                <button class="form-btn" id="btn-save-contato" type="submit"> Salvar </button>
                <aside class="alert">
                    <span class="msg-alert"></span>
                </aside>
            </form> 

        </section>

        <script type="module" src="../../script/main.js"></script>
        
    </main>
</body>
