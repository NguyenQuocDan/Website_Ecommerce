<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product_grid">
                    <?php foreach($products as $product): ?>
                    <div class="product">
                        <div class="product_image"><img src="<?php echo $product->getImage();?>" alt=""></div>
                        <div class="product_extra product_new"><a href="categories.html">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="product.html"><?php echo $product->getName();?></a></div>
                            <div class="product_price"><?php echo $product->getPrice();?></div>
                        </div>
                    </div>
                    <?php  endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>