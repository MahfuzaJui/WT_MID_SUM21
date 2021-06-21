<?php
	$Name="";
	$err_Name="";
	$CardNumber="";
	$err_CardNumber="";
	$Day="";
    $err_Day="";
    $Month="";
    $err_Month="";
    $Year="";
    $err_Year="";
	$Amount="";
	$err_Amount="";
	$Phone="";
	$err_Phone="";
	
	$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	
	$hasError=false;
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Name"])){
			$hasError = true;
			$err_Name="Name Required";
		}
		else
		{
			$Name=htmlspecialchars($_POST["Name"]);
		}
		if(empty($_POST["CardNumber"]))
		{
			$hasError = true;
			$err_CardNumber="Card Number Required";
		}
		elseif(strlen($_POST["CardNumber"]) < 10)
		{
			$hasError = true;
			$err_Username="Card Number must contain at least 10 Number";
		}
		else if(is_numeric($_POST["CardNumber"]) == false)
		{
            $hasError = true;
			$err_CardNumber="Card number must contain number";
        }
		 else
		{
            $CardNumber=$_POST["CardNumber"];
        }
			if(!isset($_POST["Day"]))
        {
			$hasError = true;
            $err_Day= "Day required";
        }
        else
        {
            $Day = $_POST["Day"];
        }
        if(!isset($_POST["Month"]))
        {
			$hasError = true;
            $err_Month= "Month required";
        }
        else
        {
            $Month = $_POST["Month"];
        }
        if(!isset($_POST["Year"]))
        {
			$hasError = true;
            $err_Year= "Year required";
        }
        else
        {
            $Year = $_POST["Year"];
        }
	}	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Payment</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="Name" value="<?php echo $Name; ?>"></td>
						<td><span> <?php echo $err_Name;?> </span></td>
					</tr>
					<tr>
						<td align="right">Card Number:</td>
						<td><input type="text" name="Card Number" value="<?php echo $CardNumber; ?>"></td>
						<td><span> <?php echo $err_CardNumber;?> </span></td>
					</tr>
					<tr>
						<td align="right">Validation Date:</td>
						<td><select name="Day" style="width:48px"><option selected disabled>Day</option>
							<?php 
								for($d=1;$d<=31;$d++)
								{
									if($d==$Day)
									{
										echo "<option selected>$d</option>";
									}
									else
									{
										echo "<option>$d</option>";
									}
								}
							?>
							</select><span><?php echo $err_Day;?></span>
							<select name="Month" style="width:70px"><option selected disabled>Month</option>
							<?php
								foreach($months as $m)
								{
									if($m == $Month)
									{
										echo "<option selected>$m</option>";
									}
									else
									{
										echo "<option>$m</option>";
									}
								}
							?>
							</select><span><?php echo $err_Month;?></span>
							<select name="Year" style="width:52px"><option selected disabled>Year</option>
							<?php
								for($y=1970;$y<=2021;$y++)
								{
									if($y==$Year)
									{
											echo "<option selected>$y</option>";
									}
									else
									{
											echo "<option>$y</option>";
									}
								}
							?>
							</select><br><span><?php echo $err_Year;?></span>
						</td>
					</tr>
					<tr>
						<td align="right">Amount:</td>
						<td><input type="text" name="Amount" value="<?php echo $Amount; ?>"></td>
						<td><span> <?php echo $err_Amount;?> </span></td>
					</tr>
					<tr>
						<td align="right">Phone Number:</td>
						<td><input type="text" name="Phone" value="<?php echo $Phone; ?>"></td>
						<td><span> <?php echo $err_Phone;?> </span></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>	
			</fieldset>
		</form>
	</body>
</html>
