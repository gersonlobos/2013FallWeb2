<div class="container">
        <? $errors = isset($errors) ? $errors : array(); ?>
        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        
        <form action="?action=save" method="post"  class="form-horizontal row">
                <input type="hidden" name="id" value="<?=$model['id']?>" />
                
                <div class="form-group <?=isset($errors['Name']) ? 'has-error' : ''?>">
                        <label for="Name" class="col-sm-2 control-label">Product</label>
                        <div class="col-sm-10">
                                <input type="text" name="Name" id="Name" placeholder="Name" class="form-control " value="<?=$model['Name']?>"  />
                        </div>
                        <span><?=@$errors['Name']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['Price']) ? 'has-error' : ''?>">
                        <label for="Price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                                <input type="text" name="Price" id="Price" placeholder="Price" class="form-control " value="<?=$model['Price']?>"  />
                        </div>
                        <span><?=@$errors['Price']?></span>
                </div>
                
                 <div class="form-group <?=isset($errors['Description']) ? 'has-error' : ''?>">
                        <label for="Description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                                <input type="text" name="Description" id="Description" placeholder="Description" class="form-control "  value="<?=$model['Description']?>" />
                        </div>
                        <span><?=@$errors['Description']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['product_stock']) ? 'has-error' : ''?>">
                        <label for="product_stock" class="col-sm-2 control-label">In Stock</label>
                        <div class="col-sm-10">
                                <input type="text" name="product_stock" id="product_stock" placeholder="In Stock" class="form-control "  value="<?=$model['product_stock']?>" />
                        </div>
                        <span><?=@$errors['product_stock']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['Product_Category_id']) ? 'has-error' : ''?>">
                        <label for="Product_Category_id" class="col-sm-2 control-label">Category Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Product_Category_id" id="Product_Category_id" placeholder="Category Id" class="form-control "  value="<?=$model['Product_Category_id']?>" />
                        </div>
                        <span><?=@$errors['Product_Category_id']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['Supliers_id']) ? 'has-error' : ''?>">
                        <label for="Supliers_id" class="col-sm-2 control-label">Supliers Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Supliers_id" id="Supliers_id" placeholder="Supliers Id" class="form-control "  value="<?=$model['Supliers_id']?>" />
                        </div>
                        <span><?=@$errors['Supliers_id']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['Picture_Url']) ? 'has-error' : ''?>">
                        <label for="Picture_Url" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                                <input type="url" name="Picture_Url" id="Picture_Url" placeholder="image" class="form-control "  value="<?=$model['Picture_Url']?>" />
                        </div>
                        <span><?=@$errors['Picture_Url']?></span>
                </div>
             
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
                
                
                
        </form>
</div>