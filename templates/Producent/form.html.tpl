<div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa producenta</label>
  <input class="col-12 col-md-3" name="ProducentNazwa" value="{if isset($data['ProducentNazwa'])}{$data['ProducentNazwa']}{/if}" type="text">
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>
