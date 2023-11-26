<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 id="category" class="text-center m-4">Product category</h2>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($category as $value) : ?>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">16 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <a href="index.php?act=category&iddm=<?= $value['id'] ?>"><img class="img-fluid" src="<?= $value['image'] ?>" alt=""></a>
                    </a>
                    <h5 style="text-align: center; padding-top: 15px;" class="font-weight-semi-bold m-0"><?= $value['name'] ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2 ">Product Best Seller</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($bestSeller as $value1) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <form action="index.php?act=addcart" method="post">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="index.php?act=detail&idsp=<?= $value1['id'] ?>"><img class="img-fluid w-100" src="./view/img/<?= $value1['image'] ?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?= $value1['name'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><strong>Price:</strong>$<?= $value1['price'] ?></h6>
                                <h6 class="text-muted ml-2"><del>$<?= $value1['price'] ?></del></h6>
                            </div>
                        </div>
                        <div style="cursor: pointer;" class="card-footer d-flex justify-content-between bg-light border">
                            <a href="index.php?act=detail&idsp=<?= $value1['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <div>
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <input class=" btn text-dark p-0" style="background-color: #fff; border: none; font-size: 0.9rem; padding: 0; cursor: pointer;" type="submit" value="Add To Cart" name="addtocart">
                            </div>
                        </div>
                        <input type="hidden" value="<?= $value1['id'] ?>" name="id">
                        <input type="hidden" value="<?= $value1['name'] ?>" name="tensp">
                        <input type="hidden" value="<?= $value1['image'] ?>" name="image">
                        <input type="hidden" value="<?= $value1['price'] ?>" name="gia">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Products End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($products as $value2) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <form action="index.php?act=addcart" method="post">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="index.php?act=detail&idsp=<?= $value2['id'] ?>"><img class="img-fluid w-100" src="./view/img/<?= $value2['image'] ?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?= $value2['name'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><strong>Price:</strong> $<?= $value2['price'] ?></h6>
                                <h6 class="text-muted ml-2">$<del>123.000</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="index.php?act=detail&idsp=<?= $value2['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <div>
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <input class=" btn text-dark p-0" style="background-color: #fff; border: none; font-size: 0.9rem; padding: 0; cursor: pointer;" type="submit" value="Add To Cart" name="addtocart">
                            </div>
                        </div>
                        <input type="hidden" value="<?= $value2['id'] ?>" name="id">
                        <input type="hidden" value="<?= $value2['name'] ?>" name="tensp">
                        <input type="hidden" value="<?= $value2['image'] ?>" name="image">
                        <input type="hidden" value="<?= $value2['price'] ?>" name="gia">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-12 pb-1">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-3">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- Products End -->