<div class="form-group">
 <label>Enter Coffee Name</label>
 <input type="text" name="name" id="name" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Coffee Description</label>
 <input type="text" name="description" id="description" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Coffee Price</label>
 <input type="text" name="price" id="price" class="form-control" />
</div>


<script>
 $(document).ready(function () {

  var name = localStorage.getItem('name');
  var description = localStorage.getItem('description');
  var price = localStorage.getItem('price');

  $('#name').val(name);
  $('#description').val(description);
  $('#price').val(price);


 });
</script>
