<section style="height:180vh;">
	<div class="container-fluid">
		<div class="row">
			<?php include_once('sidebar.php') ?>

			<div class="col-10 " style="height: 100vh;">
				<div class="mt-5 mb-5">
					<span class="mt-5 mb-4">DASHBOARD</span>
					<div class="btn-group dropright">
						<a href="./entryForm.php">
							<button aria-expanded="false" aria-haspopup="false" class="btn btn-secondary dropdown-toggle ml-5"
							        data-toggle="" type="button">
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

                        <a href="./update.php"><button class="mt-4" style="border:none; height: 6vh; background-color:#FB7A72; color: white; width: 100%;">UPDATE REPAIR</button></a>

                    </div>



                    <div class="card p-4" style="width: 68rem;">

                        <img src="./images/Group 73.svg"  height="" alt="">

                    </div>



                </div>
			</div>
		</div>
	</div>
</section>
