<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <section class="corona_update container-fluid">
        <div class="my-3">
            <h3 class="text-center fw-bold text-danger">COVID-19 LIVE UPDATES OF THE INDIA</h3>

        </div>
        <!-- districts -->
    </section>
    <div class="table-responsive">
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
        //$data=file_get_contents('https://api.covid19india.org/state_district_wise.json');
        $data=file_get_contents('https://api.covid19india.org/data.json');
        $coronaLive=json_decode($data,true);
        echo "<pre >";
        // print_r($coronaLive);
        $statescount= count($coronaLive);
        $i=1;
        while($i < 38){
            ?>
<tr>
    <td><?php echo $coronaLive['statewise'][$i]['lastupdatedtime']?></td>
    <td ><?php echo $coronaLive['statewise'][$i]['state']?></td>
    <td><?php echo $coronaLive['statewise'][$i]['confirmed']?></td>
    <td><?php echo $coronaLive['statewise'][$i]['active']?></td>
    <td><?php echo $coronaLive['statewise'][$i]['recovered']?></td>
    <td><?php echo $coronaLive['statewise'][$i]['deaths']?></td>
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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>