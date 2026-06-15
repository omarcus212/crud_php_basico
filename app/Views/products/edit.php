<!DOCTYPE html>
<html lang="en">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Editar Produto - CRUD PHP</title>
    <link rel="stylesheet" href="/assets/create.css">
</head>
<body>
    
    <div class="container">
        <h1>Editar Produto</h1>
        
        <form action="?route=products/update&id=<?= $product['id'] ?>" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($product['nome']) ?>" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço (R$)</label>
                <input type="number" id="preco" name="preco" step="0.01" value="<?= htmlspecialchars((string)$product['preco']) ?>" required>
            </div>

            <div class="form-group">
                <label for="estoque">Quantidade em Estoque</label>
                <input type="number" id="estoque" name="estoque" value="<?= htmlspecialchars((string)$product['estoque']) ?>" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao"><?= htmlspecialchars($product['descricao']) ?></textarea>
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-form btn-save">Atualizar Produto</button>
                <a href="?route=products" class="btn btn-form btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>