@extends('layout')
@section('content')
<section class="wrapper image-wrapper bg-auto no-overlay bg-image py-14 py-md-16">
    <div class="container py-0">
        <div class="row">
            <div class="col-lg-6 col-xl-5 mx-auto">
                <h2 class="display-4 mb-3 text-center"><a class="text-grape">Cake</a> Me Up</h2>
                <p class="text-center">Calculate and preview your cake price</p>
            </div>
            <!-- /column -->
        </div>

        <form class="form-control" action="" id="cakeform" onsubmit="return false;">
            <fieldset>
                <div class="form-group">
                    <label class="py-1"><strong>Choose your Cake</strong></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selectedCake" value="redvelvet"
                            id="selectedCake" onclick="calculateCake()">
                        <label class="form-check-label" for="selectedCake"> Red Velved </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="selectedCake" value="blackforest"
                            id="selectedCake" onclick="calculateCake()">
                        <label class="form-check-label" for="selectedCake"> Black Forest </label>
                    </div>
                </div>

                <div class="form-select-wrapper">
                    <label class="py-1"><strong>Topping</strong></label>
                    <select class="form-select" id="topping" name="topping" onchange="calculateCake()">
                        <option value="none" selected>None</option>
                        <option value="cream">Cream</option>
                        <option value="strawberry">Strawberry</option>
                    </select>
                </div>
            </fieldset>
        </form>

        <div class="card text-center">
            <label class="py-1"><strong>Price</strong></label>
            <div id="totalPrice"></div>
            <div class="py-5">
            <img id="previewTopping" src="{{ asset('/img/topping/plain.png') }}" style="width:200; position:absolute">
            <img id="previewCake" src="{{ asset('/img/plain.png') }}" style="width:200px;">
            </div>
        </div>
    </div>
</section>