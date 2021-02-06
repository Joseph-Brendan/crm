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
                        <h6>A VEHICLE</h6>
                        <a href="vehicledisplay.php"><button class="mt-4" style="height: 6vh; background-color:#575757; width: 100%; color: white; border: none;">STERY APC</button></a>
                        <P class="mt-2">DETAILS </P>
                        <p style="font-size: 12px; line-height: 1px;">Make Type:</p>
                        <p style="font-size: 12px; line-height: 1px;">Model:</p>
                        <p style="font-size: 12px; line-height: 1px;">Variant:</p>
                        <p style="font-size: 12px; line-height: 1px;">Reg ID/No:</p>
                        <p style="font-size: 12px; line-height: 1px;">Chasis No:</p>
                        <p style="font-size: 12px; line-height: 1px;">OEM:</p>
                        <p style="font-size: 12px; line-height: 1px;">YOM:</p>
                        <p style="font-size: 12px; line-height: 1px;">COP:</p>
                        <p style="font-size: 12px; line-height: 1px;">YOP:</p>
                        <p style="font-size: 12px; line-height: 1px;">Owner Unit:</p>
                        <p style="font-size: 12px; line-height: 1px;">Vehicle/Eqpt LOC:</p>



                    </div>



                    <div class="card p-4" style="width: 68rem;">

                        <h6 class="text-center mb-2">Enter Repair Update</h6>
                        <p class="text-center mb-4">NAEME UNIT</p>

                        <h6>Select Name:</h6>
                        <select name="name" id="name" class="p-3 mt-2">
                            <option value="Sgt John Umoh">Sgt John Umoh</option>
                            <option value="Cpt Rose Kanu">Cpt Rose Umoh</option>
                            <option value="Col Kingsley Pam">Col Kingsley Pam</option>
                            <option value="Sgt Tony Tony">Sgt Tony Tony</option>
                            <option value="Col Grace Win">Col Grace Win</option>
                            <option value="Capt Tom Seyi">Capt Tom Seyi</option>
                        </select>
                        <h6 class="mt-5">Date In:</h6>
                        <input class="p-3 mt-2" type="date" placeholder="Date In" style="width: 100%; outline: none;"><br>
                        <h6 class="mt-4">Date Out:</h6>
                        <input class="p-3 mt-2" type="date" placeholder="Date In" style="width: 100%; outline: none;"><br>
                        <input class="p-3 mt-5" type="text" placeholder="Nature Of Repair" style="width: 100%; outline: none;"><br>
                        <input class="p-3 mt-5" type="text" placeholder="Spare Part/Material Used" style="width: 100%; outline: none;"><br>
                        <input class="p-3 mt-5" type="text" placeholder="Enter Hardware ID" style="width: 100%; outline: none;"><br>
                        <input class="p-3 mt-5" type="number" placeholder="Duration Of Repair(hrs)" style="width: 100%; outline: none;"><br>
                        <input class="p-3 mt-5" type="number" placeholder="Number Of Technicians Used" style="width: 100%; outline: none;"><br>

                        <textarea class="p-3 mt-5" type="text" style="width: 100%; outline: none;"> Report Summary</textarea><br>

                        <button class="mt-5" style="width: 100%; border: none; height: 6vh; border-radius: 40px; background-color: #575757; color: white;">Update Report</button>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
