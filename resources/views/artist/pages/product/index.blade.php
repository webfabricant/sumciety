@extends('artist.index')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Physical Product</h4>
                        <p class="text-muted m-b-30 font-14">Fill all information below</p>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productname" >Product Name *</label>
                                        <input id="productname" required name="productname" type="text" class="form-control" placeholder="Enter Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="manufacturername">Product Sku</label>
                                        <input id="manufacturername" required name="manufacturername" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productdesc">Product Description</label>
                                        <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="manufacturerbrand">Category</label>
                                        <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input id="price" name="price" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control select2">
                                            <option>Select</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Features</label>

                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Product Image</label> <br/>
                                        <img src="assets/images/products/1.jpg" alt="product img" class="img-fluid" style="max-width: 200px;" />
                                        <br/>
                                        <button type="button" class="btn btn-purple m-t-10 waves-effect waves-light">Change Image</button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Meta Data</h4>
                        <p class="text-muted m-b-30 font-14">Fill all information below</p>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="metatitle">Meta title</label>
                                        <input id="metatitle" name="productname" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="metakeywords">Meta Keywords</label>
                                        <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="metadescription">Meta Description</label>
                                        <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- container -->

    </div>
@endsection
