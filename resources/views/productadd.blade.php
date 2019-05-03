@extends('navigation')
@section('tittle')
Add Product
@endsection('tittle')
@section('text')

<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <p class="text-center">Register The Product<a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr>
<form  method='POST' action='/productcontrol'>
    {{csrf_field()}}
	    <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
             </div>
            <input name="name" class="form-control" placeholder="Enter Product Name" type="text">
	    </div>
            <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
         <textarea name ="description" class="md-textarea form-control" rows="3" placeholder="Enter Description"></textarea>
 
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="price" class="form-control" placeholder="Price" type=text>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="brand" class="form-control" placeholder="Brand" type="text">
    </div> <!-- form-group// -->
   <h1> Home Delivery</h1>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optradio" value="Yes">Yes
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optradio" value="No">No
        </label>
      </div>
      
                          
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Submit </button>
    </div> <!-- form-group// -->      
        
</form>

</div> <!-- card.// -->

</div>
<!--container end.//-->







@endsection('text')