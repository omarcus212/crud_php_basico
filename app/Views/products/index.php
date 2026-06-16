<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Produtos</h1>
                <p class="text-gray-500 text-sm">Gerencie o inventário da sua loja</p>
            </div>
            <a href="?route=products/create" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition shadow-sm">
                + Novo Produto
            </a>
        </div>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="mt-6 p-4 bg-green-50 border border-green-100 text-green-700 rounded-lg text-sm text-center">
                <?= $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>


        <?php if (isset($_SESSION['error'])): ?>
            <div class="mt-6 p-4 bg-red-50 border border-red-100 text-red-700 rounded-lg text-sm text-center">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 border-b border-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Nome</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Preço</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Estoque</th>
                        <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($products as $product): ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900"><?= $product['nome'] ?></div>
                            <div class="text-xs text-gray-500 truncate max-w-xs"><?= $product['descricao'] ?></div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            R$ <?= number_format($product['preco'], 2, ',', '.') ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-medium <?= $product['estoque'] > 10 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                                <?= $product['estoque'] ?> em estoque
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <a href="?route=products/edit&id=<?= $product['id'] ?>" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Editar</a>
                            <a href="?route=products/delete&id=<?= $product['id'] ?>" 
                               onclick="return confirm('Deseja excluir este produto?')"
                               class="text-red-400 hover:text-red-600 text-sm font-medium">Excluir</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <?php if (empty($products)): ?>
                <div class="py-12 text-center">
                    <p class="text-gray-400">Nenhum produto cadastrado.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>