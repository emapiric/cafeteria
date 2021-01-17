
<html>
 <head>
  <title>Coffee</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../styles.css">
 </head>
 <body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="containerNavbar" colour="red">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li><a href="..">Home</a></li>
        <li><a href="#">Coffee</a></li>
        <li class="active"><a href="../orders/ordersPage.php">Orders</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container-fluid padding">
    <div class="container">
    <br>
    <br>
    <br>
    <h1>Coffee Menu</h1>
    <br>
    <div class="panel panel-default">
      <div class="panel-heading">
      <div class="row">
        <div class="col-md-6">
        <h3 class="panel-title">Our offer</h3>
        </div>
        <div class="col-md-6" align="right">
        <button type="button" name="add_data" id="add_data" class="btn btn-success btn-xs">Add</button>
        </div>
      </div>
      </div>
      <div class="panel-body">
      <div class="table-responsive">
        <span id="form_response"></span>
        <table id="coffee_data" class="table table-bordered table-striped">
        <thead>
          <tr>
          <td>Coffee ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>Price</td>
          <td>View</td>
          <td>Edit</td>
          <td>Delete</td>
          </tr>
        </thead>
        </table>      
      </div>
      </div>
    </div>
    </div>
  </div>

  <footer>

        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-6">
                    <hr class="light">
                    <p>Contact: +123456789</p>
                    <p>heartscafeteria@gmail.com</p> 
                    <p>Kneza Mihaila 11</p>
                    <p>Belgrade, Serbia</p>
                </div>
                <div class="col-md-6">                   
                    <hr class="light">
                    <h5>Opening hours</h5>
                    <hr class="light">
                    <p>Working days: 7am - 8pm</p>
                    <p>Weekends: 8am - 6pm</p>
                </div>
            </div>
        </div>

    </footer>


 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 var dataTable = $('#coffee_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"sql/fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0,4,5,6],
    "orderable":false,
   },
  ],

 });

 $(document).on('click', '.view', function(){
    var id = $(this).attr('id');
  $.ajax({
   url:"sql/fetch_single_data.php",
   method:"POST",
   data:{id:id},
   dataType:'json',
   success:function(data)
   {
    localStorage.setItem('name', data['name']);
    localStorage.setItem('description', data['description']);
    localStorage.setItem('price', data['price']);
    var options = {
     ajaxPrefix:''
    };
    new Dialogify('forms/view_data_form.php', options)
     .title('Coffee Data')
     .buttons([
      {
       text:'Close',
       click:function(e){
        this.close();
       }
      }
     ]).showModal();
   }
  })
 });
 
 $('#add_data').click(function(){

  var options = {
   ajaxPrefix:''
  };
  new Dialogify('forms/add_data_form.php', options)
   .title('Add New Coffee')
   .buttons([
    {
     text:'Cancel',
     click:function(e){
      this.close();
     }
    },
    {
     text:'Insert',
     type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
     {
      var form_data = new FormData();
      if(!validate($('#name').val(),$('#description').val(),$('#price').val())){
        alert("Error");
      }
      form_data.append('name', $('#name').val());
      form_data.append('description', $('#description').val());
      form_data.append('price', $('#price').val());
      $.ajax({
       method:"POST",
       url:'sql/insert_data.php',
       data:form_data,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        if(data.error != '')
        {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        }
        else
        {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         dataTable.ajax.reload();
        }
       }
      });
     }
    }
   ]).showModal();
 });

 $(document).on('click', '.update', function(){
  var id = $(this).attr('id');
  $.ajax({
   url:"sql/fetch_single_data.php",
   method:"POST",
   data:{id:id},
   dataType:'json',
   success:function(data)
   {
    localStorage.setItem('name', data['name']);
    localStorage.setItem('description', data['description']);
    localStorage.setItem('price', data['price']);
    $('#form_response').html('<div class="alert alert-danger">'+id+'</div>');
    var options = {
     ajaxPrefix:''
    };
    new Dialogify('forms/edit_data_form.php', options)
     .title('Edit Coffee Data')
     .buttons([
      {
       text:'Cancel',
       click:function(e){
        this.close();
       }
      },
      {
       text:'Edit',
       type:Dialogify.BUTTON_PRIMARY,
       click:function(e)
       {
        var form_data = new FormData();
        form_data.append('name', $('#name').val());
        form_data.append('description', $('#description').val());
        form_data.append('price', $('#price').val());
        form_data.append('id', id);
        $.ajax({
         method:"POST",
         url:'sql/update_data.php',
         data:form_data,
         dataType:'json',
         contentType:false,
         cache:false,
         processData:false,
         success:function(data)
         {
          if(data.error != '')
          {
           $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
          }
          else
          {
           $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
           dataTable.ajax.reload();
          }
         }
        });
       }
      }
     ]).showModal();
   }
  })
 });

 $(document).on('click', '.delete', function(){
  var id = $(this).attr('id');
  Dialogify.confirm("<h3 class='text-danger'><b>Are you sure you want to remove this data?</b></h3>", {
   ok:function(){
    $.ajax({
     url:"sql/delete_data.php",
     method:"POST",
     data:{id:id},
     success:function(data)
     {
      Dialogify.alert('<h3 class="text-success text-center"><b>Data has been deleted</b></h3>');
      dataTable.ajax.reload();
     }
    })
   },
   cancel:function(){
    this.close();
   }
  });
 });

 function validate(name, description, price){

    if(name.len != '' && description != '' && price != ''){
        if(priceCheck(price)){
        return true;
        }
    }
    else{
      return false;
    }
  }

  function priceCheck(price){
    if(isNaN(parseInt(price))){
        if(price<0){
        return false;
        }
    }
    return true;
  }

});
</script>