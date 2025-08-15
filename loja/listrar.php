<?php
include "cabecalho.php";
?>

<body>
    <h1>Bem vindo ao meu site com CRUD</h1>
    <h2>Leonardo T. e Murilo</h2>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger">Atualizar</button>
                    <button type="button" class="btn btn-warning">Apagar</button>
                </div>
            </tbody>
        </table>
    </div>
</body>