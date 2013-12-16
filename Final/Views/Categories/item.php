<tr class=" <?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?> ">
				<td><?=$rs['id']?></td>
				<td><?=$rs['Name']?></td>
				
				<!--<td><?=$rs['UserType']?></td> -->
				
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
         		 	<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>
				
			</tr>