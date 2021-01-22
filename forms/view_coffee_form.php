<div class="form-group">
 <label>Coffee name:</label>
</div>
<div class="form-group">
    <label id="name"><i>Test</i></label>
</div>  
<div class="form-group">
 <label>Coffee description:</label>
</div>
<div class="form-group">
    <label id="description"><i>Test</i></label>
</div>
<div class="form-group">
 <label>Coffee price:</label>
</div>
<div class="form-group">
    <label id="price"><i>Test</i></label>
</div>


<script>
 $(document).ready(function () {

  document.getElementById('name').innerHTML =localStorage.getItem('name');
  document.getElementById('description').innerHTML =localStorage.getItem('description');
  document.getElementById('price').innerHTML =localStorage.getItem('price');


 });
</script>