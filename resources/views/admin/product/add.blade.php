<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->

<a class="btn btn-primary mb-3" href="{{url('admin')}}">Back to home</a>
<form method="post" action="{{ url('product') }}" class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>ADD PRODUCT</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">NAMA PRODUCT</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="nama product" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">SLUG</label>  
  <div class="col-md-4">
  <input id="slug" name="slug" placeholder="slug" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">KATEGORI PRODUCT</label>
  <div class="col-md-4">
    <select id="category" name="category" class="form-control">
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">HARGA PRODUCT</label>  
  <div class="col-md-4">
  <input id="price" name="price" placeholder="harga product" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">STOK PRODUCT</label>  
  <div class="col-md-4">
  <input id="stock" name="stock" placeholder="stok product" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">DISCONT</label>  
  <div class="col-md-4">
  <input id="discont" name="discont" placeholder="discont" class="form-control input-md" required="" type="text">
    
  </div>
</div>
   
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">GAMBAR</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit"  class="btn btn-primary">SAVE</button>
  </div>
  </div>

</fieldset>
</form>
