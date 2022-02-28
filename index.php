<!doctype html>
<html>
<head>
 
 <meta name="robots" content="noindex,nofollow">
 <title>AJAX Pet Starter</title>
 <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
 <script type="text/javascript">
 $("document").ready(function(){
 $("#pet_likes").hide();
 $("#pet_name").hide();
 $("#pet_eats").hide();
 $("#pet_feels").click(function(e){
 $("#pet_likes").slideDown(200);
 });

 $("#pet_likes").click(function(e){
 $("#pet_eats").slideDown(200);
 });
 $("#pet_eats").click(function(e) {
 $("#pet_name").slideDown(200);
 });


 $('#myForm').submit(function(e){
 let feels = $("input[name=feels]:checked").val();
 let likes = $("input[name=likes]:checked").val();
 let eats = $("input[name=eats]:checked").val(); 
 let name = $("input[name=name]").val();

 let pets = "";
 if (feels == "fluffy" && likes == "petted" && eats == "carrots") {
 pets="rabbit"
 } else if (feels == "scaly" && likes == "petted" && eats == "carrots") {
 pets="chameleon"
 } else if (feels == "fluffy" && likes == "petted" && eats == "pets") {
 pets="fox"
 } else if (feels == "scaly" && likes == "petted" && eats == "pets") {
 pets="gator"
 } else if (feels == "fluffy" && likes == "ridden" && eats == "pets") {
 pets="jaguar"
 } else if (feels == "fluffy" && likes == "ridden" && eats == "carrots") {
 pets="panda"
 } else if (feels == "scaly" && likes == "ridden" && eats == "carrots") {
 pets="turtle"
 } else if (feels == "scaly" && likes == "ridden" && eats == "pets") {
 pets="velociraptor"
 }
 let output =""
 let pic = pets
 output += `<p>Your pet feels: ${feels}</p>`;
 output += `<p>Your pet likes to be: ${likes}</p>`;
 output += `<p>Your pet eats: ${eats}</p>`;
 output += `<p>Your pet is a(n): ${pets}!</p>`;
 output += `<p>Your pet's name is: ${name}!</p>`;

 $("#output").html(output);
 
 $('#pet').load(`includes/content.html #${pic}`);
 e.preventDefault();

 });
 });
 </script>
</head>
<body>
<h2>AJAX Pet Starter</h2>
<form id="myForm" name="myForm" action="form-handler.php" method="post">
<p>Below is a starter page for the AJAX Pet Adoption Agency assignment.</p>
 <div id="pet_feels">
 <h3>Feels</h3>
 <p>Please choose how you would like your pet to feel:</p>
 <input type="radio" name="feels" value="fluffy">fluffy <br />
 <input type="radio" name="feels" value="scaly">scaly <br />
 </div>
 <div id="pet_likes">
 <h3>Likes</h3>
 <p>Please tell us what your pet will like:</p>
 <input type="radio" name="likes" value="petted">to be petted <br />
 <input type="radio" name="likes" value="ridden">to be ridden <br />
 </div>
 <div id="pet_eats">
 <h3>Eats</h3>
 <p>Please tell us what your pet likes to eat:</p>
 <input type="radio" name="eats" value="carrots">carrots <br />
 <input type="radio" name="eats" value="pets">other people's pets <br />
 </div>
 <div id="pet_name">
 <h3>Name</h3>
 <p>What would you like your pet's name to be?</p>
 <input type="text" name="name" required = "required"><br/>
 </div>

 <input type="submit" value="submit it!" />
 <div id="output">Output goes here!</div>
 <div id="pet"></div>
</form>
</body>
</html>