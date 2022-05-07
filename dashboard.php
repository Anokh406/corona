<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="row">
        <div class="row justify-content-center">
          <h1 style="text-decoration: underline;margin-left: 225px; margin-bottom: 65px;display :expandable-table" class="text-danger">COVID-19 LIVE UPDATES OF THE INDIA </h1>
        </div>
        <!-- <div class="my-3">
          <h3 class="text-center ml-5 fw-bold text-danger">COVID-19 LIVE UPDATES OF THE INDIA</h3>

        </div> -->
        <!-- districts -->
        <!-- </section> -->
        <!-- <div class="table-responsive"> -->
        <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th class="text-capitalize">Conutry</th>
            <th class="text-capitalize">State </th>
            <th class="text-capitalize">Confirmed </th>
            <th class="text-capitalize">Active </th>
            <th class="text-capitalize">Recovered </th>
            <th class="text-capitalize">Deaths </th>
          </tr>

          <?php
          // $data=file_get_contents('https://api.covid19india.org/state_district_wise.json');
          $data = file_get_contents('https://api.covid19india.org/data.json');
          $coronaLive = json_decode($data, true);
          echo "<pre >";
          // print_r($coronaLive);
          // $statescount = count($coronaLive);
          $i = 1;
          while ($i < 38) {
          ?>
            <tr>
              <td><?php echo $coronaLive['statewise'][$i]['lastupdatedtime'] ?></td>
              <td><?php echo $coronaLive['statewise'][$i]['state'] ?></td>
              <td><?php echo $coronaLive['statewise'][$i]['confirmed'] ?></td>
              <td><?php echo $coronaLive['statewise'][$i]['active'] ?></td>
              <td><?php echo $coronaLive['statewise'][$i]['recovered'] ?></td>
              <td><?php echo $coronaLive['statewise'][$i]['deaths'] ?></td>
            </tr>
            <!-- echo $coronaLive['statewise'][$i]['lastupdatedtime']."<br>";
            echo $coronaLive['statewise'][$i]['state']."<br>";
            echo $coronaLive['statewise'][$i]['confirmed']."<br>";
            echo $coronaLive['statewise'][$i]['active']."<br>";
            echo $coronaLive['statewise'][$i]['recovered']."<br>";
            echo $coronaLive['statewise'][$i]['deaths']."<br>"; -->

          <?php
            $i++;
          }


          ?>
        </table>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
      </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>