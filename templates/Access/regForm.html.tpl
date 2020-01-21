{extends file="../baseForm.html.tpl"}
{block name=title}Formularz rejestracji{/block}
{block name=action}zarejestruj{/block}
{block name=formBody}
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Login">Login</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="login" name="Login" data-url="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}check/">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Password">Hasło</label>
            <div class="col-sm-7">
                <input type="password" class="form-control" id="password" name="Password">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Imie">Imie</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Imie">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Nazwisko">Nazwisko</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Nazwisko">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Pesel">Pesel</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Pesel">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Ulica">Ulica</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Ulica">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="NrDomu">Numer domu</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="NrDomu">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="NrLokalu">Numer lokalu</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="NrLokalu">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Miejscowosc">Miejscowość</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Miejscowosc">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="KodPocztowy">Kod pocztowy</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="KodPocztowy">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="NrTelefonu">Numer telefonu</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="NrTelefonu">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label class="col-sm-5 col-form-label" for="Email">E-mail</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="Email">
                <div class=""></div>
            </div>
        </div>
{/block}
{block name=submitName}Zarejestruj się{/block}
