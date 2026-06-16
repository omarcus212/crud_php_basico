<form action="<?= $action ?>" method="POST" class="space-y-6">
    <div>
        <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome do Produto</label>
        <input type="text" name="nome" id="nome" value="<?= $product['nome'] ?? '' ?>" required 
            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="preco" class="block text-sm font-medium text-gray-700 mb-1">Preço (R$)</label>
            <input type="number" step="0.01" name="preco" id="preco" value="<?= $product['preco'] ?? '' ?>" required 
                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
        </div>
        <div>
            <label for="estoque" class="block text-sm font-medium text-gray-700 mb-1">Quantidade</label>
            <input type="number" name="estoque" id="estoque" value="<?= $product['estoque'] ?? '' ?>" required 
                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
        </div>
    </div>

    <div>
        <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
        <textarea name="descricao" id="descricao" rows="4" 
            class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"><?= $product['descricao'] ?? '' ?></textarea>
    </div>

    <div class="pt-4 flex items-center justify-end space-x-4">
        <a href="?route=products" class="text-gray-500 hover:text-gray-700 text-sm font-medium">Cancelar</a>
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-2.5 rounded-lg text-sm font-semibold transition shadow-sm">
            <?= $submitButtonText ?>
        </button>
    </div>
</form>