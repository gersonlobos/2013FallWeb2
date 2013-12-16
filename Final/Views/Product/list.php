<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">

	<h2>Products</h2>
	 <? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
                <div class="alert alert-success">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <b>Success!</b> The User has been saved.
                </div>
        <? endif; ?>
	
	<a href="?action=new">Add Product</a>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Product Name</th>
			<th>Price</th>
			<th>description </th>
			<th>In Stock</th>
			<th>Supplier ID</th>
			<th>Category ID</th>
			<th>Image</th>
			<th>Edit</th>
			
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Name']?></td>
				<td><?=$rs['Price']?></td>
				<td><?=$rs['Description']?></td>
				<td><?=$rs['product_stock']?></td>
				<td><?=$rs['Supliers_id']?></td>
				<td><?=$rs['Product_Category_id']?></td>
				<!--<td><img src="<?=$rs['product_image']?>" /></td>-->
				<td><img src="<?=$rs['Picture_Url']?>" alt="picture"  width="50" height="50"></td>
				<!--<td><?=$rs['UserType']?></td> -->
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
         		 	<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>
				
			</tr>
		<? endforeach ?>
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade"></div>

</div>

<? 
	//print_r($rs['Picture_Url']);
	
	function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>