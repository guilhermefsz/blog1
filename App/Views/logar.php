<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="cartão">
        <div class="cabeçalho-do-cartão">
            Login
        </div>
        <div class="corpo-do-cartão">
            <p class="card-text"><small class="text-muted">Faça o seu login no sistema</small></p>

            <form nome="logar" método="POST"
             action="<?=URL?>/usuarios/logar" class="mt-4">
               

                <div class="grupo-de-formulários">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input tipo="email" nome="email" id="email" classe="form-control" require>
                </div>

                <div class="grupo-de-formulários">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="senha" nome="senha" id="senha" class="form-control" require>
                </div>

                <div class="linha">
                    <div class="col">
                        <input type="submit" value="Logar"class="btn btn-info btn-block">
                    </div>

                    <div class="col">
                        <a href="#">Você não tem uma conta? Faça o seu cadastro</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>