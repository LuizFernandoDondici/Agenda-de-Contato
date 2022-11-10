<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title> Agenda de Contatos </title>
    
    <link rel="stylesheet" href="../../style/body/body.css">
    <link rel="stylesheet" href="../../style/menu/menu.css">
    <link rel="stylesheet" href="../../style/list/list.css">

</head>
<body>
    <main>
        <header>
            
            <nav class="menu">
                <h1 class="title"> Agenda </h1>
                <ul>
                    <li>
                        <a href="/formulario-contato"> Cadastrar </a>
                    </li>
                </ul>
            </nav>

        </header>
        <section>

            <table class="table">
                <thead>
                    <tr>
                        <th id="thead-nome"> Nome </th>
                        <th id="thead-telefone"> Telefone </th>
                        <th id="thead-celular"> Celular </th>
                        <th id="thead-email"> E-mail </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listContato as $contato):?>
                    <tr>
                        <td id="tbody-nome"><a href="/visualizar-contato?id=<?=$contato['id']?>">  <?=$contato['name']?>  </a></td>
                        <td id="tbody-telefone"><a href="/visualizar-contato?id=<?=$contato['id']?>">  <?=$contato['tel']?>  </a></td>
                        <td id="tbody-celular"><a href="/visualizar-contato?id=<?=$contato['id']?>">  <?=$contato['cel']?>  </a></td>
                        <td id="tbody-email"><a href="/visualizar-contato?id=<?=$contato['id']?>">  <?=$contato['email']?>  </a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </section>
    </main>
</body>
</html>
