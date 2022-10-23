<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->

<a class="btn btn-primary mb-3" href="{{url('admin')}}">Back to home</a>
<form method="post" action="{{ url('category') }}" class="form-horizontal">
@csrf
  <fieldset>
<!-- Form Name -->
<legend>ADD CATEGORY</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">NAMA CATEGORY</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" placeholder="nama product" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">SLUG</label>  
  <div class="col-md-4">
  <input id="slug" name="slug" placeholder="slug" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="product_name">DESKRIPSI</label>  
    <div class="col-md-4">
    <textarea id="description" name="description" placeholder="deskripsi" class="form-control input-md" required="" type="text"></textarea>
      
    </div>
  </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="save" name="save" class="btn btn-primary">SAVE</button>
  </div>
  </div>

</fieldset>
</form>
