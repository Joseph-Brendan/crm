<section style="height:180vh;" >
	<div class="container-fluid">
		<div class="row">
			<?php include_once('sidebar.php') ?>

			<div class="col-10 " style="height: 100vh;">
				<div class="mt-5 mb-5">
					<span class="mt-5 mb-4">DASHBOARD</span> <div class="btn-group dropright">
						<a href="./entryForm.php">
							<button type="button" class="btn btn-secondary dropdown-toggle ml-5" data-toggle="" aria-haspopup="false" aria-expanded="false">
								+ ADD ENTRY
							</button>
						</a>


					</div>

				</div>

				<?php include_once('dashboard-cards.php') ?>

                <div class="d-flex justify-content-between">
                    <div class="card p-4" style="width: 18rem;">
                        <h6>VEHICLES</h6>
                        <a href="./vehicle.php"><button class="mt-4" style="height: 6vh; background-color: #FB7A72; width: 100%; color: white; border: none;">A Vehicles</button></a>
                        <button class="mt-4" style="height: 6vh; background-color: #FB7A72; color: white; border: none;">B Vehicles</button>
                        <button class="mt-4" style="height: 6vh; background-color: #FB7A72; color: white; border: none;">C Vehicles</button>
                        <button class="mt-4" style="height: 6vh; background-color: #FB7A72; color: white; border: none;">D Vehicles</button>
                        <button class="mt-4" style="height: 6vh; background-color: #FB7A72; color: white; border: none;">E Vehicles</button>

                    </div>

                    <div class="card p-4" style="width: 18rem;">
                        <h6>EQUIPMENTS</h6>
                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;"> Engineer Equipments</button>

                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;">Medical Equipments</button>
                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;">Misc Equipments</button>

                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;"> Signal Equipments </button>
                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;"> Tech Equipments</button>
                    </div>

                    <div class="card p-4" style="width: 18rem;">
                        <h6>WEAPONS</h6>
                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;">Artillery Weapons</button>
                        <button class="mt-4" style="height: 6vh; background-color: #858484; color: white; border: none;">Infantry Weapons</button>


                    </div>


                    <div class="card p-4" style="width: 18rem;">
                        <h6>TECHNICIANS</h6>
                        <button class="mt-4" style="height: 6vh; background-color: #19BC81; color: white; border: none;">Junior Technicians</button>
                        <button class="mt-4" style="height: 6vh; background-color: #19BC81; color: white; border: none;">Senior Technicians</button>
                        <button class="mt-4" style="height: 6vh; background-color: #19BC81; color: white; border: none;">Lead Technicians</button>
                        <button class="mt-4" style="height: 6vh; background-color: #19BC81; color: white; border: none;">Supervisors</button>

                    </div>

                    <div class="card" style="width: 12rem;">
                        <a href="#" style="margin-top: 200px; margin-left: 48px;" class="mx-auto"><button>+ ADD NEW INVENTORY</button></a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
