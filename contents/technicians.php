<section style="height:180vh;" >
	<div class="container-fluid">
		<div class="row">
			<?php include_once('sidebar.php') ?>

			<div class="col-10 " style="height: 100vh;">
				<div class="mt-5 mb-5">
					<span class="mt-5 mb-4">DASHBOARD</span> <div class="btn-group dropright">
					</div>
				</div>

				<?php include_once('dashboard-cards.php') ?>

                <div class="d-flex justify-content-between">
                    <div class="card p-4" style="width: 100%;">
                        <a href="./profile.php">
                            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 12rem; height: 25vh; border-radius: 12px;">
                                <div class="card-body">
                                    <img src="./images/Group (8).svg" height="40" class="mb-3 rounded-circle" alt="">
                                    <h6 class="card-subtitle mb-2 text-muted">92NA/50/1234</h6>
                                    <p class="card-subtitle mb-2 text-muted">Sgt</p>
                                    <p class="card-subtitle mb-2 text-muted">Chima Kunle</p>
                                </div>
                            </div>
                        </a>

                    </div>




                </div>
			</div>
		</div>
	</div>
</section>
