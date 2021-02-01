<?php echo json_encode($errors) ?>

<section id="home-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-5">
				<img src="./images/1200px-Emblem_of_the_Nigerian_Army 1.svg" height="60"
				     class="rounded-circle mt-5 mx-auto d-block" alt="Nigerian Army">
				<P class=" text-center text-muted" style="font-weight:900;font-size: 14px; margin-top: 10px;">NIGERIAN
					ARMY</P>
				<p class="text-center" style="font-size: 11px;;">Electrical & Mechanical Engineers</p>

				<div class="card mt-5 mx-auto d-block" style="width: 32rem;">
					<div class="card-body">
						<h6 class="card-title text-center" style="font-size: 12px;">LOGIN FORM</h6>

						<div class="wrapper">
                            <?php
                                if (isset($tpl) && array_key_exists('unknown', $tpl->ContentData['errors'])) {
                                    echo "<p style='color: red;'>" . $tpl->ContentData['errors']['unknown'] . "</p>";
                                }
							?>

                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="input-data">
                                    <input type="text" name="email" value="<?php echo $_POST['email'] ?>" required>
                                    <div class="underline"></div>
                                    <label for="name">Enter Username</label>
                                </div>
                                <?php
                                    if (isset($tpl) && array_key_exists('email', $tpl->ContentData['errors'])) {
                                        echo "<p style='color: red;'>" . $tpl->ContentData['errors']['email'] . "</p>";
                                    }
                                ?>

                                <div class="input-data mt-5">
                                    <input type="password" name="password" value="<?php echo $_POST['password'] ?>" required>
                                    <div class="underline"></div>
                                    <label for="name">Enter Password</label>
                                </div>
	                            <?php
                                    if (isset($tpl) && array_key_exists('password', $tpl->ContentData['errors'])) {
                                        echo "<p style='color: red;'>" . $tpl->ContentData['errors']['password'] . "</p>";
                                    }
	                            ?>

                                <button class="login-button mt-4" style="width: 100%;">LOGIN</button>
                            </form>

							<a href="#" class="text-center anchor mt-4" style="font-size: 12px;"><p class="mt-4">Forgot
									Password</p></a>

							<div class="other-login mt-5 mx-auto d-block  d-flex justify-content-center">
								<a href="coas.php">
									<button class="mr-3 coas">COAS LOGIN</button>
								</a> <a href="admin.php">
									<button class="admin">ADMIN LOGIN</button>
								</a>
							</div>

						</div>


					</div>
				</div>

			</div>


			<div class="col-7 right-side" style="height: 100vh;">

			</div>
		</div>
	</div>
</section>
