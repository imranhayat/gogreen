
<?php 
include('include/header.php');
?>
<div class="container-fluid banner">
</div>
<div class="bg-light about_us text-center py-5" id="about">
	<div class="container">
		<h2>About Us</h2>
		<p>“Go Green Pakistan” is a website to facilitate the citizens to search and get the authentic information about the massive reforestation project of Pakistan. It will provide sufficient information about current running project. The aim of this website is to get a transparent current status report and the total area covered in this project. This system will also reduce the manual effort and cost required for verification through Govt. departments. So, it will benefit public as well as government agencies. The proposed system will be a great step to globally introduce the current project in much efficient way.</p>
	</div>
</div>
<div class="status container text-center py-5">
	<h2>Current Status Report</h2>
	<div class="row mt-4">
		<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
			<div class="card px-2 py-4 bg-success text-white">
				<h4>Purchased Trees Record</h4>
				<h2>413,009,850</h2>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card px-2 py-4 bg-success text-white">
				<h4>Planted Trees Record</h4>
				<h2>390,444,690</h2>
			</div>
		</div>
		<div class="col-lg-4 mt-3 mt-lg-0">
			<div class="card px-2 py-4 bg-success text-white">
				<h4>Area Covered</h4>
				<h2>550,659 Acres</h2>
			</div>
		</div>
	</div>
</div>
<div class="faqs bg-light py-5">
	<div class="container">
		<h2 class="text-center mb-4">
			Frequently Asked Questions
		</h2>
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header bg-light p-0" id="headingOne">
					<h5 class="mb-0 p-3 cursor-pointer" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						1. How can I search how many trees are planted and which areas are covered in this project?
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						You can search province and district wise projects by typing required City/District/Province in Search Menu.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header bg-light p-0" id="headingTwo">
					<h5 class="mb-0 p-3 cursor-pointer" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						2. Is the information on this website authentic?
					</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						This website provides authentic information about Pakistan's massive reforestation project verified by the government.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header bg-light p-0" id="headingThree">
					<h5 class="mb-0 p-3 cursor-pointer" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						3. How can I registed any suspicious activity related to any project?
					</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						You can register complaint about any activity related to project on our Contact Page.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('include/footer.php');?>