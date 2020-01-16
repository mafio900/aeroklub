{extends file="../baseForm.html.tpl"}
{block name=title}Formularz logowania{/block}
{block name=action}zaloguj{/block}
{block name=formBody}
        <div class="form-group row mb-2">
            <label class="col-sm-2 col-form-label" for="Login">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" name="Login" placeholder="Wprowadź login">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row  mb-2">
            <label class="col-sm-2 col-form-label" for="Password">Hasło</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="Password" placeholder="Wprowadź hasło">
                <div class=""></div>
            </div>
        </div>
        <div class="alert alert-danger collapse" role="alert"></div>
{/block}
{block name=submitName}Zaloguj się{/block}
