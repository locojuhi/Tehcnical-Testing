<div class="box-body">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ (isset($store->name) ? old('name', $store->name): '')}}">
    </div>
    
    <div class="form-group">
        <label for="sku">Fecha de Apertura</label>
        <input type="date" class="form-control" id="opening_date" name="opening_date" value="{{ (isset($store->opening_date) ? old('opening_date', $store->opening_date): '')}}">
    </div>

    <div class="form-group">
        <label for="lat">Latitud</label>
        <input type="number" step="0.00000000001"  class="form-control" id="lat" name="lat" value="{{ (isset($store->lat) ? old('lat',  $store->lat): '')}}">
    </div>

    <div class="form-group">
        <label for="lng">Longitud</label>
        <input type="number" step="0.00000000001"  class="form-control" id="lng" name="lng" value="{{ (isset($store->lng) ? old('lng',  $store->lng): '')}}">
    </div>

</div>

<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>