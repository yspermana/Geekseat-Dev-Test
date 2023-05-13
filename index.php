<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Geekseet Developer Technical Test</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
</head>
<body>

	<!-- Content -->
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="text-center">Geekseet Developer Technical Test</h2>
				<form class="row mt-5" action="index.php" method="GET">
					<div class="col-md-12">
						<h5>Person A</h5>
					</div>
					<div class="col-md-6">
						<label class="form-label">Age</label>
						<input type="number" class="form-control" name="person_a_age" value="<?php if(isset($_GET['person_a_age'])) echo $_GET['person_a_age']; ?>" required>
					</div>
					<div class="col-md-6">
						<label class="form-label">Death</label>
						<input type="number" class="form-control" name="person_a_death" value="<?php if(isset($_GET['person_a_death'])) echo $_GET['person_a_death']; ?>" required>
					</div>
					<div class="col-md-12 mt-4">
						<h5>Person B</h5>
					</div>
					<div class="col-md-6">
						<label class="form-label">Age</label>
						<input type="number" class="form-control" name="person_b_age" value="<?php if(isset($_GET['person_b_age'])) echo $_GET['person_b_age']; ?>" required>
					</div>
					<div class="col-md-6">
						<label class="form-label">Death</label>
						<input type="number" class="form-control" name="person_b_death" value="<?php if(isset($_GET['person_b_death'])) echo $_GET['person_b_death']; ?>" required>
					</div>
					<div class="col-md-12 mt-4">
						<input type="hidden" name="process" value="1">
						<button type="submit" class="btn btn-primary w-100">Check Result</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Process -->
	<?php if(isset($_GET['process'])) : ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h5>Result</h5>
				<?php

					include 'Kills.php';
					include 'Person.php';

					// Defined person A
					$personA = new Person($_GET['person_a_age'], $_GET['person_a_death']);
					$bithPersonA = $personA->getYear();

					// echo $bithPersonA; // dump result

					// Defined person B
					$personB = new Person($_GET['person_b_age'], $_GET['person_b_death']);
					$bithPersonB = $personB->getYear();

					// echo $bithPersonB; // dump result

					// Birth of year validation
					if ($bithPersonA < 1 || $bithPersonB < 1) {
						echo -1; exit;
					}

					// Defined killed villagers by years
					$kills = new Kills;

					$killA =  $kills->getVillagers($bithPersonA);
					$killB =  $kills->getVillagers($bithPersonB);

					// echo $killA; // dump result
					// echo $killB; // dump result

					// Get average
					$avg = ($killA + $killB) / 2;

					echo $avg; // dump result

				?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- End Process -->

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
