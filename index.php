<html>
<title> Currency Converter </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/convert.js"></script>
<link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
    <body>
        <center>
            <section id="banner">
                <center>
<div class="container">
	<div class="text">
	<p class="line-1 anim-typewriter">Currency Converter</p>
    </div>
	<br />	
    <center>
	<form align="center" method="post" id="currency-convert-form">
        <div class="f">
            
		<div class="form-group row">
		 <div class="col-xs-4">
		<label for="from_curr">From:</label>
		<select name="currency_from" class="form-control">
<option value="USD" selected="1">US Dollar(United States)</option><option value="BRL">Brazilian Real(Brazil)</option><option value="GBP">British Pound(United Kingdom)</option><option value="CNY">Chinese Yuan(China)</option><option value="INR">Indian Rupee(India)</option><option value="DEM">German Mark(Germany)</option><option value="EUR">Euro(France)</option><option value="ITL">Italian Lira(Italy)</option><option value="CAD">Canadian Dollar(Canada)</option><option value="JPY">Japanese Yen(Japan)</option>
		</select>		
		</div>		
		</div>
            
		<div class="form-group row">
		<div class="col-xs-4">
		<label for="pwd">To:</label>
		<select name="currency_to" class="form-control">
<option value="INR" selected="1">Indian Rupee(India)</option><option value="USD">US Dollar(United States)</option><option value="BRL">Brazilian Real(Brazil)</option><option value="GBP">British Pound(United Kingdom)</option><option value="CNY">Chinese Yuan(China)</option><option value="DEM">German Mark(Germany)</option><option value="EUR">Euro(France)</option><option value="ITL">Italian Lira(Italy)</option><option value="CAD">Canadian Dollar(Canada)</option><option value="JPY">Japanese Yen(Japan)</option>
		</select>
		</div>
		<div class="col-xs-4">
		<div id="currency_conversion_rate"></div>	
		<div id="converted_currency_amount"></div>		
		</div>
		</div>
            
		<div class="form-group row">
		<div class="col-xs-4">
		<label>Amount :</label>
		<input type="number" placeholder="Amount" name="amount" id="amount" class="form-control">
		</div>
		</div>
        </div>
		<button type="submit" class="btn btn-info" name="convert_currency" id="convert_currency">Convert</button>		
	</form>	
    </center>
	<br><br>	
			
</div>
                </center>
            </section>
        </center>
    </body>
</html>


