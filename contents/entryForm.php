<section style="height:180vh;" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-2" style="background-color: #575757; height: 180vh;">
				<img src="./images/1200px-Emblem_of_the_Nigerian_Army 1.svg" height="60" class="rounded-circle mt-5 mx-auto d-block" alt="Nigerian Army">
				<P class=" text-center text-muted" style="font-weight:900;font-size: 14px; margin-top: 10px;color: #858484;">NIGERIAN ARMY</P>
				<div style="height: 1px; background-color: #858484;"></div>

				<ul class="mt-4 justify-content-center">
					<li class="p-3"><a href="./dashboard.php" style="color: white; text-decoration: none;"><img src="./images/Vector (5).svg " height="20" class="mr-3">Dashboard</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/tasks-solid 1.svg " height="21" class="mr-3">Kanban Board</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/Vector (6).svg " height="22" class="mr-3">Calendar</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/Vector (7).svg" height="22" class="mr-3">Notifications</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/Vector (8).svg " height="18" class="mr-3">Mail</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/Vector (9).svg " height="20" class="mr-3">API/Integrations</a></li>
					<li class="p-3"><a href="#" style="color: white; text-decoration: none;"><img src="./images/Vector (10).svg" height="20" class="mr-3">Settings</a></li>
					<li class="p-3">
						<a href="logout.php" style="color: white; text-decoration: none;"><img src="./images/logout-svgrepo-com.svg" height="20" class="mr-3">Logout</a>
					</li>
				</ul>
			</div>



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

				<div class="d-flex justify-content-between myCards">
					<a href="#" style="text-decoration: none; color: #858484;" class="anchor-hover">
						<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem; height: 30vh; border-radius: 12px;">
							<div class="card-body">
								<img src="./images/Vector (11).svg" height="20" class="mb-3" alt="">
								<h6 class="card-subtitle mb-2 text-muted">Inventory</h6>
								<p class="card-text mt-5">Overview Management Directory For Vehicle & Equipment Inventory</p>

							</div>
						</div>
					</a>


					<a href="#" style="text-decoration: none; color: #858484;" class="anchor-hover">
						<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem; height: 30vh; border-radius: 12px;">
							<div class="card-body">
								<img src="./images/Group.svg" height="20" class="mb-3" alt="">
								<h6 class="card-subtitle mb-2 text-muted">Vehicle/Equipment</h6>
								<p class="card-text mt-5">Management Directory For Vehicle & Equipment Inventory</p>

							</div>
						</div>
					</a>

					<a href="#" style="text-decoration: none; color: #858484;" class="anchor-hover">
						<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem; height: 30vh; border-radius: 12px;">
							<div class="card-body">
								<img src="./images/Group (1).svg" height="20" class="mb-3" alt="">
								<h6 class="card-subtitle mb-2 text-muted">Technicians</h6>
								<p class="card-text mt-5">Management Directory For All Technicians</p>

							</div>
						</div>
					</a>

					<a href="#" style="text-decoration: none; color: #858484;" class="anchor-hover">
						<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 16rem; height: 30vh; border-radius: 12px;">
							<div class="card-body">
								<img src="./images/Slice 2.svg" alt="" class=" mx-auto ">

							</div>
						</div>
					</a>
				</div>


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
					</div>

				</div>




			</div>
		</div>
	</div>
</section>
