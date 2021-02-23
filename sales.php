<?php include('header.php'); ?>
<body>
<?php include('user_nav.php'); ?>
<div class="container">
	<h1 class="page-header text-center">List of Orders</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Name</th>
			<th>Total bill</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
			$customer=$_SESSION['name'];
				$sql="select * from purchase order by purchaseid desc ";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					if( $row['customer'] == $customer ) {
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td class="text-right"> <?php echo "Rs "; echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>