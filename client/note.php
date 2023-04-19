<!DOCTYPE html>
<html>
 <head>
  <title>My Recommendations</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    input[type=submit] {
  background: #45a049;
  background color: white;
  margin: 4px 0;
  padding: 9px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 } 

 input[type=submit]:hover {
  background-color: #4CAF50;
 }
 th{
     background-color: #6d5c97;
     color: #fff;
     border-bottom: 1px solid #ddd;
   }
 </style>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">My Recommendations</a>
     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
   <br />
   <!-- <form method="post" action="">
    <div class="form-group">
     <label>Enter Title</label>
     <input type="text" name="subject" id="subject" class="form-control" autofocus required>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post"  value="Search" />
    </div>
   </form> -->


   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Risk Rating</th>
      <th scope="col">Product Type</th>
      <th scope="col">Instrument</th>
      <th scope="col">Sector</th>
      <th scope="col">Region</th>
      <th scope="col">Country</th>
      <th scope="col">Currency</th>
      <th scope="col">Description</th>
      <th scope="col">Investment</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
                     <?php 
                        include "db.php";
                        $result=mysqli_query($con,"select * from recommend")or die ("query 2 incorrect.......");

                        while(list($id, $name, $riskrating, $producttype, $instrument, $sector, $region, $country,  $currency, $content, $investment)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$name</td><td>$riskrating</td><td>$producttype</td><td>$instrument</td><td>$sector</td><td>$region</td><td>$country</td><td>$currency</td><td>$content</td><td>$investment</td>";

                        echo"<td>
                        <a href='buyrec.php?id=$id&action=insert' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm'>
                                <span class='material-icons-sharp'>Buy</span></a>
                        <a href='dashboard.php' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm'>
                                <span class='material-icons-sharp'>Cancel</span></a> 
                        </td></tr>";
                        }
                        mysqli_close($con);
                      ?>
    </tr>
  </tbody>
 </table>
   
   

  </div>
 </body>
</html>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>