<?php

function component($productname, $productprice, $productimg, $productid ){
    $element = "
    
    <div class=\"col-md-4 col-sm-6 my-3 my-md-4\">
                <form action=\"product.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            
                            
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">RM$productprice</span>
                            </h5>
							<button type=\"submit\" class=\"btn btn-outline-dark\" name=\"view\" >View Details </button>
							
                            <button type=\"submit\" class=\"btn btn-outline-dark\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function component2($productname2, $productprice2, $productimg2, $productid2 ){
    $element = "
    
    <div class=\"col-md-4 col-sm-6 my-3 my-md-4\">
                <form action=\"product2.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg2\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname2</h5>
                            
                            
                            <h5>
                                <span class=\"price\">RM$productprice2</span>
                            </h5>
							
							<button type=\"submit\" class=\"btn btn-outline-dark\" name=\"view\">View Details </button>
                             <input type='hidden' name='product2_id' value='$productid2'>
							 
							
							
               
            			
                            <button type=\"submit\" class=\"btn btn-outline-dark\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product2_id' value='$productid2'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid ){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
							<button type=\"submit\" style=\"margin-left:20px\" class=\"btn btn-outline-dark\" name=\"remove\">Remove</button>
                                <img src=$productimg alt=\"Image1\" style=\"height:150px\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-3\">
                                <small class=\"pt-2\">$productname</small>
                            </div>
							<div class=\"col-md-4 py-5\">
                                <div>
									<form>
										<input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\">
									</form>
                                </div>
                            </div>
                            <div class=\"col-md-2\">
								<h5 class=\"pt-2\">$productprice</h5>
							</div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

function cartElement2($productimg2, $productname2, $productprice2, $productid2){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid2\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg2 alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname2</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
								
                                <h5 class=\"pt-2\">$$productprice2</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}


function detailsElement($productimg, $productname, $productprice, $productid, $productdescription){
    $element = "
    
    <form action=\"details.php?action=remove&id=$productid\" method=\"post\" class=\"details-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
						<button type=\"submit\" class=\"btn btn-info mx-2\" name=\"remove\">Close Here</button>
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
							<br>
                                <h2 class=\"pt-2\">$productname</h2>
                                
								<h5 class=\"pt-2\">$productdescription</h5>
                             <br><br>   
                                <h3 class=\"pt-2\">RM$productprice</h3>
                              <br> 
                            </div>

                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
	
	function detailsElement2($productimg2, $productname2, $productprice2, $productid2, $productdescription2){
    $element = "
    
    <form action=\"details.php?action=remove&id=$productid2\" method=\"post\" class=\"details-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
						<button type=\"submit\" class=\"btn btn-info mx-2\" name=\"remove\">Close Here</button>
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg2 alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
							<br>
                                <h2 class=\"pt-2\">$productname2</h2>
                                
								<h5 class=\"pt-2\">$productdescription2</h5>
                             <br><br>   
                                <h3 class=\"pt-2\">RM$productprice2</h3>
                              <br> 
                            </div>

                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
















