<div class="i_quote">
 <?php if(isset($_SESSION['coverage'])) { ?>
  <div class="session_destroy"><a href="<?php echo $current_page.'?ended=1'?>">Go back to insurance plans...</a></div>
  <?php } ?>
  <!--code for download forms -->
  
  <?php if((isset($_SESSION['coverage'])) && (!isset($success))) {
	
	  if(($_SESSION['coverage'] != 'All Risk') && ($_SESSION['coverage'] != 'Motor')){
	  ?>
	  
	  <div class="session_destroy">
	  <a href="<?php echo $form_folder.$_SESSION['coverage'].'.doc'; ?>">
	  
	  <?php echo 'Download Form B: '.$_SESSION['coverage'].' ' ?>
	  </a>
	  And fill in Form A below.</div>
	  
	  <?php } else{ ?>
	  
	  <div class="session_destroy">
	  
	  <a href="<?php echo $form_folder.$_SESSION['coverage'].'.zip'; ?>">
	  <?php echo 'Download Form B: '.$_SESSION['coverage'].' ' ?>
	  </a>
	  And fill in Form A below.</div>
	  
	  <?php } }?>
  
	  <?php if(isset($fback)){?>
	  <div class="required1"><?php echo $fback; ?></div>
	  <?php } ?>
	  
	  <?php if(isset($c_error)){?>
	  <div class="required1"><?php echo $c_error; ?></div>
	  <?php }?>
	  
	  <?php if(isset($e_error)){ ?>
	  <div class="required1"><?php echo $e_error; ?></div>
	  <?php }?>
	  
	  <?php if(isset($success)){ ?>
	  <div class="required1"><?php echo $success; ?></div>
	  
	  <?php }else if(!isset($success)){ ?>
	  <div class="header">Insurance quote form A</div>
  
		  <form action="<?php echo $current_page_location; ?>" method="post">

			<div class="label">Name <span class="required">*</span></div>
			<div class="input1">
			  <input type="text" value="<?php if(isset($_POST['f_name'])){ echo $_POST['f_name']; }?>" name="f_name" placeholder="Your First Name" required/>
			  </div>
			<div class="input1">
			  <input type="text" value="<?php if(isset($_POST['l_name'])){ echo $_POST['l_name']; }?>" name="l_name" placeholder="Your Last Name"  required/>
			  </div>

			<div class="label">Birth Date <span class="required">*</span></div>
			<div class="input2">
			  <input id="Datepicker2" value="<?php if(isset($_POST['b_date'])){ echo $_POST['b_date']; }?>"  type="date" placeholder="mm/dd/yyyy" name="b_date" required/>

			  </div>

			<div class="label">Email <span class="required">*</span></div>
			<div class="input2">
			  <input type="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>" name="email" placeholder="Your email Adress" required/>
			  </div>

			<div class="label">Occupation <span class="required">*</span> </div>
			<div class="input2">
			  <input type="text" value="<?php if(isset($_POST['occupation'])){ echo $_POST['occupation']; }?>" name="occupation" placeholder="Your Job" required/>
			  </div>

			<div class="label">Desired coverage </div>
			<div class="input2">
			  <input type="text" name="d_coverage" value="<?php if(isset($_SESSION['coverage'])){ 
					echo $_SESSION['coverage'];	
				} ?>" required/>
			  </div>

			<table width="70%">
			  <tr>
				<td width="110"><div class="label2">Current coverage</div></td>

				</tr>
			  <tr>
				<td width="110"><input type="checkbox" name="c_coverage[]" value="fire_perils" id="current_coverage_0">
				Fire and special perils</td>
				<td width="124"><input type="checkbox" name="c_coverage[]" value="electronic_equipment" id="current_coverage_8">
				Electronic equipment </td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="buglary" id="current_coverage_1">
				Burglary</td>
				<td><input type="checkbox" name="c_coverage[]" value="domestic" id="current_coverage_9">
				Domestic package</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="marine" id="current_coverage_2">
				Marine</td>
				<td><input type="checkbox" name="c_coverage[]" value="fidelity" id="current_coverage_10">
				Fidelity guarantee</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="cash_in_transit" id="current_coverage_3">
				Money: cash in transit</td>
				<td><input type="checkbox" name="c_coverage[]" value="public_liability" id="current_coverage_11">
				Public liability</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="all" id="current_coverage_4">
				All risks</td>
				<td><input type="checkbox" name="c_coverage[]" value="machinery_breakdown" id="current_coverage_12">
				Machinery breakdown</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="motor" id="current_coverage_5">
				Motor Comprehensive</td>
				<td><input type="checkbox" name="c_coverage[]" value="professional_indemnity" id="current_coverage_13">
				Professional indemnity</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="group_personal_accident" id="current_coverage_6">
				Group personal accident</td>
				<td><input type="checkbox" name="c_coverage[]" value="contractors_all_risk" id="current_coverage_14">
				Cotractors' all risk</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="employer_liability" id="current_coverage_7">
				Employer liability</td>
				<td><input type="checkbox" name="c_coverage[]" value="contractors_plant_machinery" id="current_coverage_15">
				Contractors' plant & machinery</td>
				</tr>
			  <tr>
				<td><input type="checkbox" name="c_coverage[]" value="plate_glass" id="current_coverage_16">
				Plate glass insurance</td>
				<td><input type="checkbox" name="c_coverage[]" value="bonds" id="current_coverage_17">
				Bonds</td>
				</tr>
			  </table>  
			<br>
			<div class="label">Expiry Date of current plan</div>
			<div class="input2">
			  <input id="Datepicker1" value="<?php if(isset($_POST['expiry_date'])){ echo $_POST['expiry_date']; }?>" type="date" name="expiry_date" placeholder="mm/dd/yyyy"/>

			  </div>
			<br><br>
			<div class="label">How  much are you willing to pay</div>
			<div class="input2">
			  <input name="amount" value="<?php if(isset($_POST['amount'])){ echo $_POST['amount']; }?>" type="number" placeholder="Your budget" min="10000"/>
			  </div>
			<br><br>
			<div class="label">Fill in what you see</div><br><br>

			<?php if(isset($s_fback)){?>
			<div class="required2"><?php echo $s_fback; ?></div>
			<?php } ?>

			<div class="input2"><img src="captcha_image.php" alt="captcha"/></div><br><br>

			<div class="input3">
			  <input name="secure" type="text" required placeholder="Fill in what you see"/>
			  </div>
			<br><br>
			<div class="input2">
			  <p>
				<input type="submit" name="Submit" value="Get your quote"/>
				</p>
			  </div>

		  </form>
  	<?php } ?>
</div>
<script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker(); 
});
$(function() {
	$( "#Datepicker2" ).datepicker(); 
});
</script>
