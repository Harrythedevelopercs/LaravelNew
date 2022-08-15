<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/Home/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Home/stylesheet/style.css') }}">
</head>

<body>
    <header id="header">
        <!-- Header Render Here -->
    </header>
    <main>
        <section>
            <div class="kitchen-signup pt-5 pb-5">
                <div class="container">
                    <form action="none.html" autocomplete="off">
                        <div class="row">
                            <div class="d-none d-lg-block d-xl-block d-xxl-block col-lg-2 col-xl-2 col-xxl-2">
                                <a href="javascript:;" class="f-16 f-500 f-primary-color" onclick="window.history.go(-1);"><i class="fa-solid fa-arrow-left"></i>&nbsp; Go Back</a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                                <h2 class="mb-1">List Your Kitchen on The Kitchen Door</h2>
                                <p class="mb-1">Find food businesses interested in renting out your space! Submit detailed information about your kitchen, and then we'll review it before posting it on The Kitchen Door.</p>
                                <span class="hr-line"></span>
                                <h2 class="mb-1">Your Kitchen</h2>
                                <p class="mb-1">Add as much information as you can to make your listing stand out.</p>
                                <label for="">Kitchen Name</label>
                                <span>This is the title of your listing.</span>
                                <input type="text" class="mb-2 mt-2" name='kitchen_name' required />
                                <label for="">Website <span>(Optional)</span></label>
                                <input type="url" class="mb-2 mt-2" />
                                <label for="">Describe Your Kitchen</label>
                                <span>Tell them what makes your kitchen great! Include items like your unique offering, kitchen rates and fees, and any special policies or procedures.</span>
                                <textarea class="mb-2 mt-2" required></textarea>
                                <span>Kitchens with longer descriptions get more interested food businesses!</span>
                                <div class="row">
                                    <fieldset id="" class="mt-3 mb-3 col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <label for="kitchenType">Kitchen Type</label>
                                        <select class="form-control mt-2" name="kitchenType" id="kitchentype">
                                            <option value="Commissary or Shared Kitchen">Commissary or Shared Kitchen</option>
                                            <option value="Incubator Kitchen">Incubator Kitchen</option>
                                            <option value="Community Kitchen (church, school, etc.)">Community Kitchen (church, school, etc.)</option>
                                            <option value="Underutilized Kitchen (restaurant, bakery, etc.)">Underutilized Kitchen (restaurant, bakery, etc.)</option>
                                            <option value="Ghost / Cloud Kitchen (delivery only)">Ghost / Cloud Kitchen (delivery only)</option>
                                        </select>
                                    </fieldset>
                                    <fieldset id="" class="mt-2 mb-2 col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <label for="">What is the max number of renters your kitchen can support?</label>
                                        <select class="form-control" name="Renters">
                                            <option value="1-10">1 - 10</option>
                                            <option value="10-40">10 - 40</option>
                                            <option value="40-80">40 - 80</option>
                                            <option value="80-200">80-200</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-6">
                                        <label for="">Street Address</label>
                                        <input type="text" required />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label for="">Zip or Postal Code</label>
                                        <input type="text" required />
                                    </div>
                                </div>
                                <span>The Kitchen Door currently only supports kitchen locations within the United States and Canada.</span>
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.0225815703106!2d-118.36940748529734!3d34.17134031889286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c295928d56e5f5%3A0xc4d1fa466c83f44e!2s5536%20Satsuma%20Ave%2C%20North%20Hollywood%2C%20CA%2091601%2C%20USA!5e0!3m2!1sen!2s!4v1658921891767!5m2!1sen!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-2 mt-2"></iframe> -->
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                        <label for="">Longitude</label>
                                        <input type="text" required />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                                        <label for="">Latitude</label>
                                        <input type="text" required />
                                    </div>
                                </div>
                                <span class="hr-line"></span>
                                <h2>Features & Equipment</h2>
                                <p>Select which features, services, and equipment you have.</p>
                                <label for="">Kitchen Features</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">24/7 Access
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Temperature Controlled
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Truck Friendly
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Parking
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Allergen-Free Facility
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Event Space
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Retail Outlet
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Demo Kitchen
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Vegan Friendly
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Teaching Kitchen
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">USDA Certified Room
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Wifi
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Gluten-Free Facility
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <label for="">Additional Services</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Co-Packing
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Business Consulting
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Incubation
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Distribution Support
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Warehouse Storage
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Dry Storage
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Cold Storage
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Freezer Storage
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <label for="">Equipment</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Range
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Commercial Oven
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Rack Oven
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Steam Kettle
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Fryer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Mixer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Dough Sheeter
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Proofer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Mixer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Vacuum Sealer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Dehydrator
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Water Chiller
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Canning Line
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Industrial Coffee Maker
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Prep Tables
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Induction Cooktop
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Convection Oven
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Commercial Grinder
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Tilt Skillet
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Deck Oven
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Griddle
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Vertical Cutter/Mix
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Processor
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Slicer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Packaging Heat Seal
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Charbroiler
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Blast Freezer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Bottling Line
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Ice Cream Maker
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Ice Cream Maker
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Members must provide own equipment
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <h2>Requirements</h2>
                                <p>Select which bussiness you accept and your contract offerings and terms.</p>
                                <label for="">Accepted Bussiness Stages</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Pre-venture (idea phase, limited sales)
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Part-time
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">New (1st year)
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Existing (3-5 years)
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Other
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <label for="">Accepted Bussiness Types</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Baker
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Body Care
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Chef
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Delivery-only
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Food Truck / Mobile Vendor
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Instructor / Educator
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Pet Food
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Vegan
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Other
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Beverage
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Caterer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Packaged Goods (CPG)
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Farmer
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Gluten-free
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Meal Prep
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Restaurateur
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Wellness
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <label for="">Lease Types Provided</label>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">One Time Use
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Month to Month
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">Annual
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">More than 2-year
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <fieldset id="">
                                            <label class="checkWrapper">Pay As You Go
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">6-month
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                            <label class="checkWrapper">2-yea
                                                <input type="checkbox" />
                                                <span class="checkButton"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <label for="">Application Fee Amount <span>(Optional)</span></label>
                                <input type="text" class="mb-2 mt-2" required />
                                <label for="">Deposit Amount <span>(Optional)</span></label>
                                <input type="text" class="mb-2 mt-2" required />
                                <h2>Photos</h2>
                                <p>We recommend at least 5 photos.</p>
                                <h2>Kitchen Logo</h2>
                                <p>Please upload a square logo. 240 X 240</p>
                                <label for="kitchenLogo"><input type='file' id="kitchenLogo"></label>
                                <img id="kitchenLogoUploadedImage" src="#" alt="domain" accept="image/png, image/jpeg" style="display:none;">
                                <h2 class="mt-2">Photos of Your Kitchen</h2>
                                <p>Please upload of your kitchen and equipment to show off to potential food bussiness. We recommend at least 5 photos - including the inside and outside of your kitchen as well as any equipment and /or unique space.</p>
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile mb-3">
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>
                                <span>At least 2 photos are equired.</span>
                                <h2>Contact Information</h2>
                                <p>This is how you would like to be notified about business interested in your kitchen. This information will NOT be displayed publicly.</p>
                                <div class="row mt-2 mb-2">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="">Your First Name</label>
                                        <input type="text" class="mt-2" required />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="">Your Last Name</label>
                                        <input type="text" class="mt-2" required />
                                    </div>
                                </div>
                                <label for="">Email Address</label>
                                <input type="email" class="mb-2 mt-2" required />
                                <label for="">Phone Number</label>
                                <input type="text" class="mb-4 mt-2" required />
                                <button type="submit">Submit For Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <!-- Footer Render Here -->
    </footer>
    <script src="{{ asset('assets/Home/javascript/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('assets/Home/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/header-render.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/footer-render.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/script.js')}}"></script>
    <script>
        document.getElementById('kitchenLogo').addEventListener('change', function() {
            if (this.files[0]) {
                var kitchenLogoImage = new FileReader();
                kitchenLogoImage.readAsDataURL(this.files[0]);
                kitchenLogoImage.addEventListener('load', function(event) {
                    document.getElementById('kitchenLogoUploadedImage').setAttribute('src', event.target.result);
                    document.getElementById('kitchenLogoUploadedImage').style.display = 'block';
                });
            }
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
</body>

</html>