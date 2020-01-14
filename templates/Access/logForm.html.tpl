{extends file="../baseForm.html.tpl"}
{block name=title}Formularz logowania{/block}
{block name=action}zaloguj{/block}
{block name=formBody}
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Login">Login</label>
            <input type="text" class="col-12 col-md-3" id="login" name="Login" placeholder="Wprowadź login">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Password">Hasło</label>
            <input type="password" class="col-12 col-md-3" id="password" name="Password" placeholder="Wprowadź hasło">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="alert alert-danger collapse" role="alert"></div>
{/block}
{block name=submitName}Zaloguj się{/block}
