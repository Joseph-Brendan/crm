<section style="height:180vh;" >
	<div class="container-fluid">
		<div class="row">
			<?php include_once('sidebar.php') ?>

			<div class="col-10 " style="height: 100vh;">
				<div class="mt-5 mb-5">
					<span class="mt-5 mb-4">DASHBOARD</span> <div class="btn-group dropright">
						<a href="./dashboard.php">
							<button type="button" class="btn btn-secondary  ml-5" data-toggle="" aria-haspopup="false" aria-expanded="false">
								GO BACK
							</button>
						</a>
					</div>
				</div>

				<?php include_once('dashboard-cards.php') ?>

				<div class="">
					<div class="card mt-5 mx-auto d-block" style="width: 32rem;">
						<h6 class="text-center mb-4">Enter Report</h6>
						<input class="p-3" type="text" placeholder="Enter Full Name" style="width: 100%; outline: none;"><br>
						<h6 class="mt-5">Select Department</h6>
						<select name="department" id="department"  style="width: 100%; outline: none;" class="p-3">
							<option value="Mech. Engineering">Mechanical Engineering</option>
							<option value="Elect. Engineering">Electrical Engineering</option>
						</select>

						<input class="p-3 mt-5" type="text" placeholder="Enter Repair Title" style="width: 100%; outline: none;"><br>
						<input class="p-3 mt-5" type="text" placeholder="Enter Hardware ID" style="width: 100%; outline: none;"><br>
						<textarea class="p-3 mt-5" type="text" style="width: 100%; outline: none;"> Report Summary</textarea><br>

						<button class="mt-5" style="width: 100%; height: 6vh; border-radius: 40px; background-color: #575757; color: white;">Submit Report</button>
					</div>s
				</div>
			</div>
		</div>
	</div>
</section>
