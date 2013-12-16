<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<style>
   .table tr.success2, .table tr.success2 td{
     background-color: #FFAA00 !important; 
   }
   
   #table-wrapper{
   		transition: width .5s;
   		-webkit-transition: width .5s;
   }
   
 </style>

<div class="container">

	<h2>Cathegories</h2>
	
	 <? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
                <div class="alert alert-success">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <b>Success!</b> The User has been saved.
                </div>
        <? endif; ?>
        
	<a href="?action=new">Add Category</a>
	
	<div id="table-wrapper" class="col-md-12">
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Category ID</th>
			<th>Edit</th>
			
			
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<?include 'item.php';?>
		<? endforeach ?>
		</tbody>
	</table>
</div>

<div id="details" class="col-md-6"></div>
</div>

<div id="myModal" class="modal fade"></div>

</div>
</div>

  <? function Scripts(){ ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript">
        $(function(){
                $(".table").dataTable();
                $(".alert .close").click(function(){
                        $(this).closest(".alert").slideUp();
                });
                
                /*
                $(".table tr").click(function(){
                });
                */
                $(".table a").click(function(){
                        
                        
                        if($(this).closest("tr").hasClass("success2")){
                                $(".success2").removeClass("success2");
                                $("#table-wrapper").removeClass("col-md-6").addClass("col-md-12");
                                $("#details").html('');                        
                        }else{
                                $(".success2").removeClass("success2");
                                $(this).closest("tr").addClass("success2");
                                $("#table-wrapper").removeClass("col-md-12").addClass("col-md-6");
                                
                                $("#details").load(this.href, {format: "plain"}, function(){
                                        $("#details form").submit(HandleSubmit);                                        
                                });                                
                        }
                        
                        return false;
                });
                
                var HandleSubmit = function (){
                    var data = $(this).serializeArray();
                        data.push({name:'format', value:'plain'});
                        $.post(this.action, data, function(results){
                                if($(results).find("form").length){
                                        $("#details").html(results);                                        
                                }else{
                                        $(".success2").html($(results).html())
                                }
                        });
                        
                        return false;
                }
	    		
        })
        </script>
<? } ?>

