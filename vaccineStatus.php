<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Vaccination Availibility Checker (Powered By CoWIN API)</title>	

		<meta name="keywords" content="Covid Vaccine Status" />
		<meta name="description" content="Developed By- Vinay Kumar Bissa">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body coming-soon">
			<!-- Header Section Start -->

	<?php
	 include ('header.php');
	 ?>
	<!-- Header Section End -->
			<div role="main" class="main">
				<div class="container">
					<div class="row">
					<div class="col-lg-6">
					<label class="mb-1 text-2">Enter Pin Code</label>
					<input type="text" id="zipCode" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
					</div>
					<div class="col-lg-6">
						<label class="mb-1 text-2">Date (DD-MM-YYYY)</label>
						<div class="input-group">
							
							<div class="input-group">
                                <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-calendar-alt"></i>
                                </span>
                                </span>
                                <input type="text" name="dischargedate" data-plugin-datepicker id="datepicker2" class="form-control picker">
                            </div>
							<!--<input id="date" data-plugin-masked-input="" data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">-->
						</div>
					</div>
					<br>
					</div>
					<br>
					<div><button type="button" class="btn btn-rounded btn-primary mb-2" style="margin:auto;display:block;" onclick="getDataFromCowin()">Get Data</button></div>
					<div class="row mt-5">
						<div class="col text-center">
							<div id="examples" class="container py-2" style="overflow-x:auto;">

									<h4>Vaccination Availibility Checker (Powered By CoWIN API)</h4>

									<table class="table" id="vaccinationTable">
										<thead>
											<tr>
												<th>
													#
												</th>
												<th>
													Center Name
												</th>
												<th>
													Address
												</th>
												<th>
													District
												</th>
												<th>
													Block
												</th>
												<th>
													Available
												</th>
												<th>
													Minimum Age
												</th>
												<th>
													Vaccine
												</th>
												<th>
													Slots
												</th>
											</tr>
										</thead>
										<tbody id="sessionContent">
											
										</tbody>
									</table>

								</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<footer id="footer" class="bg-color-dark-scale-2 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
				<div class="copyright bg-dark py-4">
					<div class="container text-center py-2">
						<p class="mb-0 text-2">Developed By - Vinay Kumar Bissa</p>
					</div>
				</div>
			</footer>
		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/lazysizes/lazysizes.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
        <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
<script>
$('#datepicker2').datepicker();
$("#examples").hide();
function isValidDate(s) {
  var bits = s.split('-');
  var d = new Date(bits[2] + '-' + bits[1] + '-' + bits[0]);
  return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]));
}

function getDataFromCowin()
{
		var zipCodeOfArea=$("#zipCode").val();
		var date=$("#datepicker2").val();
		if($("#datepicker2").val()=="")
		{
		    alert("Please fill Date");
		}
		else
		{
		    var dateArray=date.split("/");
		    date=dateArray[1]+"-"+dateArray[0]+"-"+dateArray[2];
		}
		if(zipCodeOfArea.length==6 && isValidDate(date))
		{
			processAjax(zipCodeOfArea,date);
		}
		else
		{
			alert("Enter Correct Values");
		}
}
		//var myData={at:"12345678",cid:"501"};
function processAjax(zipCodeOfArea,date)
{
		var vaccinationCenterObj="";
		$.ajax({
			url: 'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode='+zipCodeOfArea+'&date='+date+'',
			type: 'GET',
			async: false,
			success: function (returndata) 
			{
			 vaccinationCenterObj=returndata;
			 if(vaccinationCenterObj.sessions.length==0)
			 {
				$("#examples").hide();
				alert("No Vaccination Centers Available Right Now");
			 }
			 else
			 {
				setTableUi(vaccinationCenterObj);
			 }
			}
		  });
  }
  function setTableUi(vaccinationCenterObj)
  {
		$("#examples").show();
		var count=0;
		$("#sessionContent").html("");
		//alert(vaccinationCenterObj.sessions.length);
		for(var i=0; i<vaccinationCenterObj.sessions.length; i++)
		{
				count++;
				var tableHtmlText='<tr class="success"> <th scope="row"> '+count+' </th> <td> '+vaccinationCenterObj.sessions[i].name+'</td> <td> '+vaccinationCenterObj.sessions[i].address+' </td> <td> '+vaccinationCenterObj.sessions[i].district_name+' </td> <td> '+vaccinationCenterObj.sessions[i].block_name+' </td> <td>  '+vaccinationCenterObj.sessions[i].available_capacity+'</td> <td>  '+vaccinationCenterObj.sessions[i].min_age_limit+'</td> <td>  '+vaccinationCenterObj.sessions[i].vaccine+' </td> <td>  '+vaccinationCenterObj.sessions[i].slots[0]+','+vaccinationCenterObj.sessions[i].slots[1]+','+vaccinationCenterObj.sessions[i].slots[2]+'</td></tr>';
				//alert(tableHtmlText);
				$("#sessionContent").append(tableHtmlText);
		}
		
  }
		  
  </script>
	</body>
</html>
