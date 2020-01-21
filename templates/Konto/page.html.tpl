{extends file="../baseForm.html.tpl"}
{block name=title}Witaj, {$login}{/block}
{block name=action}konto/zmien{/block}
{block name=formBody}
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Imie">Imie</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Imie" value="{$data['Imie']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Nazwisko">Nazwisko</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Nazwisko" value="{$data['Nazwisko']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Pesel">Pesel</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Pesel" value="{$data['Pesel']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Ulica">Ulica</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Ulica" value="{$data['Ulica']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="NrDomu">Numer domu</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="NrDomu" value="{$data['NrDomu']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="NrLokalu">Numer lokalu</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="NrLokalu" value="{$data['NrLokalu']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Miejscowosc">Miejscowość</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Miejscowosc" value="{$data['Miejscowosc']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="KodPocztowy">Kod pocztowy</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="KodPocztowy" value="{$data['KodPocztowy']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="NrTelefonu">Numer telefonu</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="NrTelefonu" value="{$data['NrTelefonu']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row mb-2">
    <label class="col-sm-5 col-form-label" for="Email">E-mail</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" name="Email" value="{$data['Email']}">
        <div class=""></div>
    </div>
</div>
<div class="form-group row my-2">
    <label class="col-sm-5 col-form-label" for="Password">Potwierdź hasłem</label>
    <div class="col-sm-7">
        <input type="password" class="form-control" id="password" name="Password">
        <div class=""></div>
    </div>
</div>
{/block}
{block name=submitName}Zmień dane{/block}
