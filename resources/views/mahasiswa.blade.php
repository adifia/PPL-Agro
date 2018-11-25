<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<div class="container">
		<div class="row">
			@include('hh.header')
			<div class="col-md-12">
				<div class="card mt-2">
					<div class="card-header">
						<h3 class="card-title">
							Data Mahasiswa
						</h3>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NIM</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $i): ?>
								<tr>
									<td><?php echo $i['nim']?></td>
									<td><?php echo $i['nama']?></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>