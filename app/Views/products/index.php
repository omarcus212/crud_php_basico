<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Produtos</h1>
    
    <a href="?route=products/create" class="btn btn-create">Novo Produto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Nenhum produto cadastrado.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars((string)$product['id']) ?></td>
                        <td><?= htmlspecialchars($product['nome']) ?></td>
                        <td>R$ <?= number_format($product['preco'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars((string)$product['estoque']) ?></td>
                        <td>
                            <a href="?route=products/edit&id=<?= $product['id'] ?>" class="btn btn-edit">Editar</a>
                            <a href="?route=products/delete&id=<?= $product['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>