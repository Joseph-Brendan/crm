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

                <button class="mb-4" style="background-color: #FB7A72; color: white; border: none; width: 100px; height: 6vh;">SUMMARY</button>
                <div class="d-flex justify-content-between">
                    <div class="card" style="width: 18rem;">
                        <h6 class="text-center p-4 font-weight-bolder text-muted" style="background-color: #BCF9E3;">BATTLE WORTHINESS STATUS</h6>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">Total Count</th>
                                <th scope="col">11935</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" style="background-color: #BCF9E3;">2</th>
                                <td style="background-color: #BCF9E3;">On Hand</td>
                                <td style="background-color: #BCF9E3;">101</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>On Loan</td>
                                <td>6(0.8%)</td>

                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Untracked</td>
                                <td>2</td>

                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #FFC0BC;">5</th>
                                <td style="background-color: #FFC0BC;">Serviced</td>
                                <td style="background-color: #FFC0BC;">-8.6%</td>

                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>Off Loan</td>
                                <td>22</td>

                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #FBEFC5;">7</th>
                                <td style="background-color: #FBEFC5;">Counter Service</td>
                                <td style="background-color: #FBEFC5;">1</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <h6 class="text-center p-4 font-weight-bolder text-muted" style="background-color: #FCEBEA;">SERVICABLE STATUS</h6>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">Product Lines</th>
                                <th scope="col">1009</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" style="background-color: #FB7A72; color: white;">2</th>
                                <td style="background-color: #FB7A72; color: white;">No Stock</td>
                                <td style="background-color: #FB7A72; color: white;">0</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Low Stock</td>
                                <td>4(0.86)</td>

                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #575757; color: white;">4</th>
                                <td style="background-color: #575757; color: white;">Loan Stock</td>
                                <td style="background-color: #575757; color: white;">1093</td>

                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>Tech Reports</td>
                                <td>11</td>

                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #575757; color: white;">6</th>
                                <td style="background-color: #575757; color: white;">Wares & Sheets</td>
                                <td style="background-color: #575757; color: white;">4</td>

                            </tr>

                            <tr>
                                <th scope="row">7</th>
                                <td>On Hand</td>
                                <td>6</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="card" style="width: 42rem;">
                        <h6 class="text-center p-4 font-weight-bolder text-muted" style="background-color: #FCEBEA;">UNSERVICABLE DOWNTIME ALERT</h6>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Part Number</th>
                                <th scope="col">Manufacturer</th>
                                <th scope="col">In Stock</th>
                                <th scope="col">Reorder Point</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>480D</td>
                                <td>Inspired LED</td>
                                <td>11</td>
                                <td>09</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>84</td>
                                <td>Fluke</td>
                                <td>93</td>
                                <td>12</td>

                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>AD2005MB-7G-LF</td>
                                <td>ADDA</td>
                                <td>19</td>
                                <td>06</td>

                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>AL-GU-5</td>
                                <td>Kemet</td>
                                <td>42</td>
                                <td>17</td>

                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>COS5TUI00KXSRV</td>
                                <td>Wakefield</td>
                                <td>07</td>
                                <td>10</td>

                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>AD2005MB-7G-LF</td>
                                <td>Seaastrob</td>
                                <td>13</td>
                                <td>09</td>

                            </tr>

                            <tr>
                                <th scope="row">7</th>
                                <td>D5-HJ-TY-2269</td>
                                <td>Wakefield</td>
                                <td>18</td>
                                <td>23</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <div class="card p-3 mb-5" style="width: 32rem; height: 35vh;">

                        <img src="./images/Slice 2 (1).svg" alt="">
                    </div>

                    <div class="card p-3 mb-5" style="width: 32rem; height: 35vh;">

                        <img src="./images/Group 72.svg" alt="">
                    </div>

                    <div class="card p-3 mb-5" style="width: 18rem; height: 35vh;">

                        <img src="./images/Slice 3 (1).svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
