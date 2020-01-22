<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>One passanger</title>

	
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
    <script type='text/javascript' src='js/dynamicpage.js'></script>
</head>

<body>
<div class="creditCardForm1">


	<div id="page-wrap">

        <header>

		
		  <nav>
		      <ul class="group">
		          <li><a href="one.php">One passanger</a></li>
		          <li><a href="two.php">Two passangers</a></li>
		          <li><a href="three.php">Three passangers</a></li>
				  <li><a href="four.php">Four passangers</a>
		      </ul>
		  </nav>
		</header>
		<hr>
		<section id="main-content">
		<div id="guts">
		 <h2>Passenger 1</h2>
                    <div class="owner">
                        <label for="owner"><h3> Full Name</h3></label><h3 class="b">Arrrrr</h3> 
                        <input type="text" class="form-control2" id="owner">
                    </div>
		
                    	<div class="address">
                        <label for="address"><h3> Street Address</h3></label> 
                        <input type="text" class="control" id="address">
						<label for="city"><h3>City</h3></label> 
						<label for="state"><h3 class="c">State</h3></label> 
						<label for="country"><h3 class="d">Country</h3></label> </br>
                        <input type="text" class="control1" id="city">
                        <select id="expiration-date1">
                            <option value=""> -none-</option>
                            <option value=""> Alabama</option>
                            <option value=""> Alaska</option>
                            <option value=""> Arizona</option>
                            <option value=""> Arkansas</option>
                            <option value=""> California</option>
							<option value=""> Colorado</option>
							<option value=""> Connecticut</option>
							<option value=""> Delaware</option>
							<option value=""> Florida</option>
							<option value=""> Georgia</option>
							<option value=""> Hawaii</option>
							<option value=""> Idaho</option>
							<option value=""> Illinois</option>
							<option value=""> Indiana</option>
							<option value=""> Iowa </option>
							<option value=""> Kansas</option>
							<option value=""> Kentucky</option>
							<option value=""> Louisiana</option>
							<option value=""> Maine</option>
							<option value=""> Maryland</option>
							<option value=""> Massachusetts</option>
							<option value=""> Michigan</option>
							<option value=""> Minnesota</option>
							<option value=""> Mississippi</option>
							<option value=""> Missouri</option>
							<option value=""> Montana</option>
							<option value=""> Nebraska</option>
							<option value=""> Nevada </option>
							<option value=""> New Hampshire</option>
							<option value=""> New Jersey</option>
							<option value=""> New Mexico</option>
							<option value=""> New York</option>
							<option value=""> North Carolina</option>
							<option value=""> North Dakota</option>
							<option value=""> Ohio</option>
							<option value=""> Oklahoma</option>
							<option value=""> Oregon</option>
							<option value=""> Pennsylvania</option>
							<option value=""> Rhode Island</option>
							<option value=""> South Carolina</option>
							<option value=""> South Dakota</option>
							<option value=""> Tennessee</option>
							<option value=""> Texas</option>
							<option value=""> Utah</option>
							<option value=""> Vermont</option>
							<option value=""> Virginia</option>
							<option value=""> Washington</option>
							<option value=""> West Virginia</option>
							<option value=""> Wisconsin</option>
							<option value=""> Wyoming</option>
                        </select>
						<input type="text" class="control2" id="country">
                    </div>
					
					<div class="address">
                        <label for="number"><h3>Phone Number</h3></label> 
                        <input type="tel" class="control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
						<label for="email"><h3> Email</h3></label></br>
                        <input type="email" class="control" id="email" name="email" pattern="" required>
					</div>
					<br>
                   <div class="form-group" id="pay-now">
                        <button type="submit" class="btn-default" id="confirm-purchase">Confirm</button>
                    </div>
					<br>
                </form>
		<br>
	<h3 class="b">Arrrrr</h3>
	<br>
		</div>
		</section>
		
	</div>
	
	

	
     
</body>

</html>