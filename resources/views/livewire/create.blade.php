<div class="mt-5  ">

    <div class="font-family-roboto col-md-5 card mx-auto opacity-100 shadow-lg text-light"
    style="background-color: #d5317bcd">
        <h3 class="card-title mt-5 text-center" style="color:#f1c40f"><strong>Crie Sua Conta!</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label> {{-- placeholder: colocar um texto de exemplo
                    dentro de uma caixa de texto --}}
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Amanda"
                        wire:model.defer="nome">
                        @error('nome') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input name="text" id="endereco" class="form-control" rows="5" placeholder="Ex.:Rua: Paineiras 12-34"
                        wire:model.defer="endereco"></input>
                        @error('endereco') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror
                </div>


                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" rows="5" placeholder="Ex: 000.000.000-00"
                        wire:model.defer="cpf">
                        @error('cpf') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror

                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Ex.: amanda@portalsesisp.org.br" wire:model.defer="email">
                        @error('email') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror
                </div>

            
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="telefone" name="telefone" id="telefone" class="form-control" rows="5" placeholder="Ex.:+55 (99)9999-9999"
                        wire:model.defer="telefone">
                        @error('telefone') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror
                </div>
               
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group ">
                        <input type="password" name="password" id="password" class="form-control" rows="5"
                            wire:model.defer="password"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                    @error('password') <span class="error" style="color:#f1c40f">{{ $message }}</span> @enderror
                </div>

        
                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #4eaeef">
                        <strong>Cadastre-se</strong></button>
                </div>

                    <!-- Exibindo a mensagem de sucesso -->
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style='background-color:#4eaeef color:white' >
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

            </form>
        </div>
    </div>

</div>