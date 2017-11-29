<input type ="hidden" name="store_id" value="{{$store_id}}">
<div class="box-body">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ (isset($product->name) ? old('name', $product->name): '')}}">
    </div>
    
    <div class="form-group">
        <label for="sku">SKU</label>
        <input type="text" class="form-control" id="sku" name="sku" value="{{ (isset($product->sku) ? old('sku', $product->sku): '')}}">
    </div>

    <div class="form-group">
        <label for="description">Descripción del producto</label>
        <textarea class="form-control" rows="3" placeholder="Describa su producto" name="description">{{ (isset($product->description) ? old('description',  $product->description): '')}}</textarea>
    </div>

    <div class="form-group">
        <label for="amount">Monto</label>
        <input type="number" step="0.01"  class="form-control" id="amount" name="amount" value="{{ (isset($product->amount) ? old('amount',  $product->amount): '')}}">
    </div>

</div>

<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>