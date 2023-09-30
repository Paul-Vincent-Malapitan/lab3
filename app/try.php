<div class="products">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Products</h2>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="our_products">
            <div class="row">
                <?php foreach ($items as $i): ?>
                            <div class="product_box">
                                <a class="product-item" href="cart.html">
                                    <img src="<?= base_url(); ?>ecommerce/images/product-1.png" class="img-fluid product-thumbnail">
                                    <h3 class="product-title"><?= $i['name']; ?></h3>
                                    <strong class="product-price"><?= $i['price']; ?></strong>

                                    <span class="icon-cross">
                                        <img src="<?= base_url(); ?>ecommerce/images/cross.svg" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>