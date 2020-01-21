<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="UslugaNazwa">Nazwa usługi</label>
  <input class="col-12 col-md-6" name="UslugaNazwa" value="{if isset($data['UslugaNazwa'])}{$data['UslugaNazwa']}{/if}" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="CenaJedn">Cena jednostkowa</label>
  <input class="col-12 col-md-6" name="CenaJedn" value="{if isset($data['CenaJedn'])}{$data['CenaJedn']}{/if}" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="JednMiary">Jednostka miary</label>
  <input class="col-12 col-md-6" name="JednMiary" value="{if isset($data['JednMiary'])}{$data['JednMiary']}{/if}" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Opis">Opis</label>
  <input class="col-12 col-md-6" name="Opis" value="{if isset($data['Opis'])}{$data['Opis']}{/if}" type="text">
  <div class="col-12 text-center text-md-left"></div>
</div>

{if !isset($data)}
<div class="form-control-* form-row mb-2 col-12">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="ZdjecieNazwa">Nazwa zdjęcia</label>
    <input class="col-12 col-md-6" name="ZdjecieNazwa" type="text">
    <div class="col-12 text-center text-md-left"></div>
</div>
{/if}
<div class="form-control-* form-row mb-2 col-12">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Zdjecie">Zdjęcie</label>
    <input class="col-12 col-md-6" name="Zdjecie" type="file">
    <div class="col-12 text-center text-md-left"></div>
</div>

<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>
