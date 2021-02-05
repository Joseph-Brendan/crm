<section style="height:180vh;" >
	<div class="container-fluid">
		<div class="row">
			<?php include_once('sidebar.php') ?>

			<div class="col-10 " style="height: 100vh;">
				<div class="mt-5 mb-5">
					<span class="mt-5 mb-4">DASHBOARD</span> <div class="btn-group dropright">

						<a href="./technicians.php">
							<button type="button" class="btn btn-secondary dropdown-toggle ml-5" data-toggle="" aria-haspopup="false" aria-expanded="false">
								GO BACK
							</button>
						</a>
					</div>
				</div>

				<?php include_once('dashboard-cards.php') ?>


				<div class="d-flex justify-content-between">


					<div class="card p-4 bg-secondary" style="width: 100%;">

						<div class="card shadow p-3 bg-white rounded" style="width: 100%; height: 55vh; border-radius: 12px;">
							<div class="card-body">
								<img src="../images/Group%20(8).svg" height="40" class="mb-3 rounded-circle" alt="">
								<h6 class="card-subtitle mb-2 text-muted">92NA/50/1234</h6>
								<p class="card-subtitle mb-2 text-muted">Sgt</p>
								<p class="card-subtitle mb-2 text-muted">Chima Kunle</p>

								<p class="mt-5">DEPARTMENT: NAE </p>
								<p style="line-height: 1.5px;">LOCATION: LAGOS, NIGERIA </p>
								<p style="line-height: 1.5px;">UNIT: IKJ/00/12 </p>
								<p style="line-height: 1.5px;">SPECIALIZATION: ROTOR ENGINEER </p>
								<p style="line-height: 1.5px;">CURRENT STATUS: ACTIVE </p>
							</div>


						</div>



					</div>




				</div>






			</div>
		</div>
	</div>
</section>
