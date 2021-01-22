<div class="form-group">
 <label>Coffee:</label>
</div>
<div class="form-group">
    <label id="coffee"><i>Test</i></label>
</div>  
<div class="form-group">
 <label>Order date:</label>
</div>
<div class="form-group">
    <label id="orderDate"><i>Test</i></label>
</div>


<script>
 $(document).ready(function () {

  document.getElementById('coffee').innerHTML =localStorage.getItem('coffee');
  document.getElementById('orderDate').innerHTML =localStorage.getItem('orderDate');

 });
</script>