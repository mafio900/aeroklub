<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Imie">Imie</label>
    <input class="col-12 col-md-3" name="Imie" value="{if isset($data['Imie'])}{$data['Imie']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Nazwisko">Nazwisko</label>
    <input class="col-12 col-md-3" name="Nazwisko" value="{if isset($data['Nazwisko'])}{$data['Nazwisko']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Pesel">Pesel</label>
    <input class="col-12 col-md-3" name="Pesel" value="{if isset($data['Pesel'])}{$data['Pesel']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ulica">Ulica</label>
    <input class="col-12 col-md-3" name="Ulica" value="{if isset($data['Ulica'])}{$data['Ulica']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrDomu">Numer domu</label>
    <input class="col-12 col-md-3" name="NrDomu" value="{if isset($data['NrDomu'])}{$data['NrDomu']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrLokalu">Numer lokalu</label>
    <input class="col-12 col-md-3" name="NrLokalu" value="{if isset($data['NrLokalu'])}{$data['NrLokalu']}{/if}" type="text">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Miejscowosc">Miejscowość</label>
    <input class="col-12 col-md-3" name="Miejscowosc" value="{if isset($data['Miejscowosc'])}{$data['Miejscowosc']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="KodPocztowy">Kod pocztowy</label>
    <input class="col-12 col-md-3" name="KodPocztowy" value="{if isset($data['KodPocztowy'])}{$data['KodPocztowy']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrTelefonu">Numer telefonu</label>
    <input class="col-12 col-md-3" name="NrTelefonu" value="{if isset($data['NrTelefonu'])}{$data['NrTelefonu']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Email">E-mail</label>
    <input class="col-12 col-md-3" name="Email" value="{if isset($data['Email'])}{$data['Email']}{/if}" type="email">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ranga">Ranga</label>
    <input class="col-12 col-md-3" name="Ranga" value="{if isset($data['Ranga'])}{$data['Ranga']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Login">Login</label>
    <input class="col-12 col-md-3" name="Login" value="{if isset($data['Login'])}{$data['Login']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Password">Hasło</label>
    <input class="col-12 col-md-3" name="Password" type="password" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
    <input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>
