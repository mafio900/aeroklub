{extends file="../baseTemplate.html.tpl"}
{block name=title}Formularz logowania{/block}
{block name=body}
<div class="container">
    <form id="logform" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}zaloguj/" method="post">
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="login">Login</label>
            <input type="text" class="col-12 col-md-3" id="login" name="login" placeholder="Wprowadź login">
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="password">Hasło</label>
            <input type="password" class="col-12 col-md-3" id="password" name="password" placeholder="Wprowadź hasło">
        </div>
        <div class="alert alert-danger collapse" role="alert"></div>
        <button type="submit" class="btn btn-success">Zaloguj</button>
    </form>
</div>
{/block}
