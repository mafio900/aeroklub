<div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa statusu</label>
  <input class="col-12 col-md-6" name="StatusNazwa" value="{if isset($data['StatusNazwa'])}{$data['StatusNazwa']}{/if}" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>
