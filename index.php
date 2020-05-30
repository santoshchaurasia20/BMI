<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Body Mass Index Calculator</title>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
    <link rel="stylesheet" href="css/stylesheet.css">
      <link rel="stylesheet" href="css/main.css">
  
</head>

<body>




<div class="mainbox">
 <!--  <img src="img_snow_wide.jpg" alt="Snow" style="width:100%;"> -->
  <div class="bottom-left"><figure><img src="images/btmleft.png"></figure></div>
  <div class="top-left"><figure><img src="images/topleft.png"></figure></div>
  <div class="top-right"><figure><img src="images/topright.png"></figure></div>
  <div class="bottom-right"><figure><img src="images/btmright.png"></figure></div>
  <div class="centered">
      <figure class="logo"><img src="images/logo.png"></figure>





<section class="banner">
    <div class="containerdiv">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <figure class=""><img src="images/bnr1.png"></figure>
       <!--  <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div> -->
      </div>

      <div class="item">
        <figure class=""><img src="images/bnr2.png"></figure>
      
      </div>
    
  
    </div>

  </div>


</div>

<p>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women. Enter your weight and height using standard or metric measures. Select "Submit" to know your BMI.</p>
</section>
<div class="row">
<div class="col-sm-12">
<div class="calc col-sm-4">

<div class="row">

<div class="calcform">
        <form method="post"  id="bmi_form">
      <div class="form-group row">
        <div class="  col-sm-12">
<input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required>
</div>
</div>




  <div class="form-group row ">
         <div class="col-sm-12 ">
            <div class="radiobox">
    <div class="col-xs-4">
        <div class="row">
        <h4>Gender</h4>
    </div>
    </div>

    <div class="col-xs-8 ">
 <div class="row">
        <input  type="radio" name="gender"  id="sad" class="input-hidden selected_card" value="female" />

                  <label for="sad">

                    <img src="images/female.png" alt="">

                  </label>

 <input type="radio" name="gender"  id="happy" class="input-hidden selected_card" value="male" />

    <label for="happy"> <img src="images/male.png" alt=""> </label>
</div>
</div>
</div>
</div>

</div>


  <div class="form-group row ">
         <div class="col-sm-12 ">
            <div class="numberbox">
    <div class="col-xs-4">
        <div class="row">
        <h4>Weight</h4>
    </div>
    </div>

    <div class="col-xs-8 ">
 <div class="row">
       <input type="number" class="number form-control"  min="1" name="weight"  required>

                  

</div>
</div>
</div>
</div>

</div>


<div class="form-group row ">
         <div class="col-sm-12 ">
            <div class="numberbox">
    <div class="col-xs-4">
        <div class="row">
        <h4>Height</h4>
    </div>
    </div>

    <div class="col-xs-8 ">
 <div class="row">
 <input type="number" class="number form-control"  min="1" name="height"  id="height" required>
                  

</div>
</div>
</div>
</div>

</div>



<button type="submit" class="submit" id="BMI">Submit</button>

</form>

</div>


</div>


</div>
<div class=" col-sm-4 details">
<div class="h3box">
<h3>YOU ARE    <span>    :    </span>   <span id="measure"> </span></h3>

</div>

<p>Hello here, the user of our amazing BMI calculator based on the information you provided us we are sorry to inform you that you have a UNDERWEIGHT body mass index.</p>

<div class="contactdetails">
<p>For more information contact<br>
your physician today
<br>
<span>
    or call on toll free number :<br>
<a href="tel:022 2581 7000">022 2581 7000</a>

</span>
</p>
</div>


</div>
<div class=" col-sm-4">

<figure class="art"> <img src="images/art.png" alt=""></figure>

</div>


</div>




</div>

  </div>
</div>

<script>
$("form").submit(function(e) {
    e.preventDefault();
    var f = $(this);
   
    var height = f.find('[name=height]').val();
    var weight = f.find('[name=weight]').val();
   
  var bmi= weight / (height / 100) ** 2;

if (bmi <= 18.4) {
        measure = "Underweight";
        
	} else if (bmi >= 18.5 && bmi <= 24.9) {
		measure = "Normal";
	} else if (bmi >= 25 && bmi <= 29.9) {
		measure = "Overweight";
	} else if (bmi >= 30) {
		measure = "Obese";
    }
    document.getElementById("measure").innerHTML=measure;
    console.log(measure);
    $.ajax(
        {
            url: "save.php",
            data: $("form").serialize(),
            processData: false,
            type: "POST",
            success: function ( data ) {
                console.log("Save Data to database");

            },
            error : function(data,error){ console.log(error);}});
  
         
});
</script>




</body>

</html>
