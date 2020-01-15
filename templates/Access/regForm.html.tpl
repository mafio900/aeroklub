{extends file="../baseForm.html.tpl"}
{block name=title}Formularz rejestracji{/block}
{block name=action}zarejestruj{/block}
{block name=formBody}
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Login">Login</label>
            <input type="text" class="col-12 col-md-3" id="login" name="Login" data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}check/">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Password">Hasło</label>
            <input type="password" class="col-12 col-md-3" id="password" name="Password">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Imie">Imie</label>
            <input type="text" class="col-12 col-md-3" name="Imie">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Nazwisko">Nazwisko</label>
            <input type="text" class="col-12 col-md-3" name="Nazwisko">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Pesel">Pesel</label>
            <input type="text" class="col-12 col-md-3" name="Pesel">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ulica">Ulica</label>
            <input type="text" class="col-12 col-md-3" name="Ulica">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrDomu">Numer domu</label>
            <input type="text" class="col-12 col-md-3" name="NrDomu">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrLokalu">Numer lokalu</label>
            <input type="text" class="col-12 col-md-3" name="NrLokalu">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Miejscowosc">Miejscowość</label>
            <input type="text" class="col-12 col-md-3" name="Miejscowosc">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="KodPocztowy">Kod pocztowy</label>
            <input type="text" class="col-12 col-md-3" name="KodPocztowy">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrTelefonu">Numer telefonu</label>
            <input type="text" class="col-12 col-md-3" name="NrTelefonu">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="form-control-* form-row mb-2">
            <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Email">E-mail</label>
            <input type="text" class="col-12 col-md-3" name="Email">
            <div class="col-12 text-center text-md-left"></div>
        </div>
        <div class="alert alert-danger collapse" role="alert"></div>
{/block}
{block name=submitName}Zarejestruj się{/block}
