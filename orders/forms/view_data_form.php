<div class="form-group">
 <label>Coffee ID:</label>
</div>
<div class="form-group">
    <label id="coffee"><i>Test</i></label>
</div>  
<div class="form-group">
 <label>Order date:</label>
</div>
<div class="form-group">
    <label id="user"><i>Test</i></label>
</div>


<script>
 $(document).ready(function () {

  document.getElementById('coffee').innerHTML =localStorage.getItem('coffee');
  document.getElementById('orderdate').innerHTML =localStorage.getItem('orderdate');

 });
</script>