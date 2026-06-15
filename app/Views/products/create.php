<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto - CRUD PHP</title>
    <link rel="stylesheet" href="/assets/create.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Produto</h1>
        
        <form action="?route=products/store" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome" name="nome" required placeholder="Ex: Teclado Mecânico RGB">
            </div>

            <div class="form-group">
                <label for="preco">Preço (R$)</label>
                <input type="number" id="preco" name="preco" step="0.01" required placeholder="0.00">
            </div>

            <div class="form-group">
                <label for="estoque">Quantidade em Estoque</label>
                <input type="number" id="estoque" name="estoque" required placeholder="Quantidade disponível">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" placeholder="Dê detalhes sobre o produto..."></textarea>
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-form btn-save">Salvar Produto</button>
                <a href="?route=products" class="btn btn-form btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>