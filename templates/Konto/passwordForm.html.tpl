{extends file="../baseForm.html.tpl"}
{block name=title}Zmiana hasła dla konta: {$login}{/block}
{block name=action}konto/zmiana-hasla{/block}
{block name=formBody}
<div class="form-group row my-2">
    <label class="col-sm-5 col-form-label" for="Password">Stare hasło</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="password" name="PasswordOld">
        <div class=""></div>
    </div>
</div>
<div class="form-group row my-2">
    <label class="col-sm-5 col-form-label" for="Password">Nowe hasło</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="password2" name="PasswordNew">
        <div class=""></div>
    </div>
</div>
{/block}
{block name=submitName}Zmień hasło{/block}
