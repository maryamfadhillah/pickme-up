@extends('layout')
@section('content')
<section class="wrapper image-wrapper bg-auto no-overlay bg-image py-14 py-md-16">
    <div class="container py-0">
        <div class="row">
            <div class="col-lg-6 col-xl-5 mx-auto">
                <h2 class="display-4 mb-3 text-center">Pick Me Up</h2>
                <p class="text-center">Calculate your application price</p>
            </div>
            <!-- /column -->
        </div>

        <form class="form-control" action="" id="mobileform" onsubmit="return false;">
            <fieldset>
                <div class="form-group">
                    <label class="py-1"><strong>Choose your platform</strong></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selectedmobile" value="android"
                            id="selectedMobile" onclick="calculateTotal()">
                        <label class="form-check-label" for="selectedMobile"> Andoroid </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="selectedmobile" value="ios"
                            id="selectedMobile" onclick="calculateTotal()">
                        <label class="form-check-label" for="selectedMobile"> iOS </label>
                    </div>
                </div>

                <div class="form-select-wrapper">
                    <label class="py-1"><strong>Design</strong></label>
                    <select class="form-select" id="design" name="design" onchange="calculateTotal()">
                        <option selected>Choose your design</option>
                        <option value="none">None</option>
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
            </fieldset>
        </form>

        <div class="card text-center">
            <label class="py-1"><strong>Price</strong></label>
            <div id="totalPrice"></div>
        </div>
    </div>
</section>