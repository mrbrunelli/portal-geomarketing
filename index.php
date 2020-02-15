<?php
include './includes/header.php';
?>


<div class="text-center">
    <div class="row z-depth-2 pb-5 pl-2 pr-2">
        <form method="post" id="formLogin">
            <div class="row" id="divBemvindo" style="min-height: 82px;">
                <h1 class="h3" id="bemvindo" style="color: #2980b9; display: none; ;">Bem Vindo</h1>
            </div>

            <div class="input-field col s12">
                <input type="text" name="usuario" id="usuario" class="comborda" required>
                <label for="usuario" class="lab">Usuario</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="senha" id="senha" class="comborda" required>
                <label for="senha">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">
                    <span>Lembre-me</span>
                </label>
            </div>

            <button class="btn btn-block " id="botao" type="submit">Entre</button>
        </form>
    </div>
</div>

<script>
    
</script>


<?php
include './includes/footer.php';
?>