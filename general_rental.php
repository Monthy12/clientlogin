<!DOCTYPE html>
<html lang="en">


<!-- HEADER -->
<?php require_once 'header.php';?>


<body>
<!-- 
    <div class="box box-red"></div>
    <div class="box box-blue"></div> -->
    <section class="login">
            <div class="blue-overlay">
                <div class="home-inner container-fluid">
                    
                    <?php  require_once 'navbar_links.php'; ?>

                    <div class="row ">
                        <div class="col-md-10 offset-md-1 d-none d-md-block sign-up__vh_index_17 u-center-big">
                            <div class="card">
                                
                                <div class="card-body neg-margin-sidebar">

                                    <div class="row">
                                        
                                            <div class="col-md-3 d-none d-md-block sidebar-background">
    
                                                <div class="text-left">
    
                                                    <div class="margin-small-top"></div>
                                                    <p class="margin-left-large light-grey">38% complete</p>
                                            
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 38%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                            <!--Navbar  -->
                                            <?php  require_once 'navbar.php'; ?>

                                            <div class="col-md-9">


                                                <div class="row mt-4">
                                                    <div class="col-md-11 ml-5">
                                                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item mr-2 pb-4"><a href="general_rental.php"> Property Information</a></li>
                                                            <li class="breadcrumb-item mr-2"><a href="rental_expenses.php">Income and Expenses</a></li>
                                                        </ol>
                                                    </nav>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Do you have any rental properties? *</label><br/>
                                                                
                                                                <input type="radio" class="btn-check" id="btn-check-1-outlined" autocomplete="off" name="Year" value="yes">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-1-outlined">Yes</label>

                                                                <input type="radio" class="btn-check" id="btn-check-2-outlined" autocomplete="off" name="Year" value="2020">
                                                                <label class="btn btn-outline-info mr-3" for="btn-check-2-outlined">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of purchase:</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Purchase price:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date you began to rent out the property:</label><br/>
                                                                <input type="date" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Land included in price (if known):</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Owners of the property:</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Taxpayer</option>
                                                                    <option value="daughter">Spouse</option>
                                                                    <option value="other">Both</option>
                                                                    <option value="other">Both with Others</option>
                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Full address of the rental property:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Property type (ex. Single family residence, short-term/vacation, etc.):</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Your relationship, if any, to the tenants:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Number of days during the tax year that the property was rented out:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-12 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Number of days during the tax year that the property was used for personal use:</label><br/>
                                                                <input type="text" class="form-control col-md-2" id="exampleFormControlInput1">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class=" col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Who manages your property?</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Myself</option>
                                                                    <option value="daughter">Hire someone to manage it</option>

                                                                </select>
                                                                                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                        
                                                    <div class="col-md-2 offset-md-6">
                                                        <div class="row mr-auro">
                                                            <div class="d-flex ">

                                                                <div class="">
                                                                    <a href="business_income.php" class="btn btn-outline-warning  color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                        <span class="pl-0 button_font_small">Cost of Goods</span>
                                                                    </a>
                                                                </div>

                                                                <div class="mr-5">
                                                                    <a href="rental_expenses.php" class="btn btn-outline-warning color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-0 button_font_small">Income & Expenses <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>


                                            </div>

                                        </div>
                                        
                                    </div>
                                    
                            </div>
                        </div>
                    </div>


                </div>
            </div>

    </section>

    <!-- FOOTER -->
    <?php require_once 'footer.php';?>

</body>
