<section id="home-section">
    <div class="container">
        <div class="col-12">
            <img src="./images/1200px-Emblem_of_the_Nigerian_Army 1.svg" height="60"
                 class="rounded-circle mt-5 mx-auto d-block" alt="Nigerian Army">
            <P class=" text-center text-muted" style="font-weight:900;font-size: 14px; margin-top: 10px;">NIGERIAN
                ARMY</P>
            <p class="text-center" style="font-size: 11px;;">Electrical & Mechanical Engineers</p>


            <div class="card mt-5 mx-auto d-block" style="width: 32rem;">
                <div class="card-body">
                    <h6 class="card-title text-center" style="font-size: 12px;">
                        <strong>COAS LOGIN</strong>
                    </h6>

                    <div class="wrapper mt-4">
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

                            <button class="login-button mt-5" style="width: 100%;">LOGIN</button>
                        </form>

                        <a href="login.php" class="text-center anchor mt-4" style="font-size: 12px;"><p class="mt-4">
                                GO BACK</p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
