<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="max-w-2xl mx-auto px-4 py-12">
        <div class="mb-8">
            <a href="?route=products" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium mb-4 inline-block">← Voltar para a lista</a>
            <h1 class="text-3xl font-bold text-gray-900">Editar Produto</h1>
            <p class="text-gray-500 text-sm">Atualize os dados do item selecionado.</p>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="mt-6 p-4 bg-red-50 border border-red-100 text-red-700 rounded-lg text-sm text-center">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
            <?php 
                $action = "?route=products/update&id=" . $product['id'];
                $submitButtonText = "Atualizar Produto";
                require __DIR__ . '/_form.php'; 
            ?>
        </div>
    </div>
</body>
</html>