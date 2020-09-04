<?php
require 'config.php';

$sql= 'SELECT hospital, count(hospital) as Patients, sum(if(status="Admitted",1,0)) as Admitted,sum(if(status="Expired",1,0)) as Expired, sum(if(status="Negative",1,0)) as Lab_Negative FROM patient group by hospital order by hospital';
$con = config::connect();
$query= $con->prepare($sql);
$query->execute();
$patient= $query->fetchAll(PDO::FETCH_OBJ);
$a=0;
$b=0;
$c=0;
$d=0;

?>


<?php require 'header.php'?>
<main>
		<table class="registration-table">
			<tr>
				<th> Hospital</th>
	            <th> Patients </th>
	            <th> Admitted </th>
	            <th> Expired </th>
	            <th> Lab Negative</th>
               
            </tr>
	        <?php foreach ($patient as $pat): ?>
	        <tr>
	            <td><?php echo $pat->hospital; ?></td>
	            <td><?php echo $pat->Patients; ?></td>
                <td><?php echo $pat->Admitted; ?></td>
                <td><?php echo $pat->Expired;?></td>
	            <td><?php echo $pat->Lab_Negative; ?></td>
            </tr>
            <?php $a+=$pat->Patients;
            $b+=$pat->Admitted; $c+= $pat->Expired; $d+=$pat->Lab_Negative?>
	        <?php endforeach ?>
	        <tr>
	        	<td>Total:</td>
	        	<td><?php echo $a?></td>
	        	<td><?php echo $b?></td>
	        	<td><?php echo $c?></td>
	        	<td><?php echo $d?></td>
	        </tr>
		</table>
		<div class="generate">
			<p>Date Generated: <? echo date("m/d/Y")?>
		</div>
</main>
<?php require 'footer.php'?>