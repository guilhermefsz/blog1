<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="cartão">
        <div class="cabeçalho-do-cartão">
            Cadastre-se
        </div>
        <div class="corpo-do-cartão">
            <p class="card-text"><small class="text-muted">Preencha o formulário abaixo para fazer seu cadastro</small></p>

            <form nome="cadastrar" método="POST"
             action="<?=URL?>/usuarios/cadastrar" class="mt-4">
                <div class="grupo-de-formulários">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <tipo de entrada="texto" nome="nome" id="nome" classe="controle-de-formulário" require 
                    value="<?=$dados['nome']?>" class='form-control<?=$dados['nome_erro'] ? 'is-invalid': '' ?>'>
                    <div class="invalid-feedback"><?=$dados['nome_erro']?></div>
                </div>

                <div class="grupo-de-formulários">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input tipo="email" nome="email" id="email" classe="form-control" require>
                </div>

                <div class="grupo-de-formulários">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="senha" nome="senha" id="senha" class="form-control" require>
                </div>

                <div class="grupo-de-formulários">
                    <label for="confirma_senha">Confirma Senha: <sup class="text-danger">*</sup></label>
                    <input type="senha" name="confirma_senha" id="confirma_senha" class="form-control" require>
                </div>

                <div class="linha">
                    <div class="col">
                        <input type="submit" value="Cadastrar"class="btn btn-info btn-block">
                    </div>

                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>