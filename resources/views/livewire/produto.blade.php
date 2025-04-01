<div>
    <form wire:submit.prevent="salvarProduto">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Nome -->
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" wire:model="nome" required>
            @error('nome') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Ingredientes -->
        <div>
            <label for="ingredientes">Ingredientes</label>
            <textarea id="ingredientes" wire:model="ingredientes" required></textarea>
            @error('ingredientes') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Valor -->
        <div>
            <label for="valor">Valor</label>
            <input type="text" id="valor" wire:model="valor" required>
            @error('valor') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Imagem -->
        <div>
            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" wire:model="imagem" required>
            @error('imagem') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Botão de envio -->
        <button type="submit">Salvar Produto</button>
    </form>

    <!-- Mostrar a imagem prévia, caso tenha sido selecionada -->
    @if ($imagem)
        <div>
            <strong>Pré-visualização:</strong>
            <img src="{{ $imagem->temporaryUrl() }}" width="100" alt="Imagem do Produto">
        </div>
    @endif
</div>
