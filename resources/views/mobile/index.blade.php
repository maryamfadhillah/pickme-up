@extends('layout')
@section('content')
<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16">
    <div class="container py-0 py-md-18">
        <div class="">
            <form class="form-control" action="" id="mobileform" onsubmit="return false;">
                <fieldset>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="selectedmobile" value="android" id="selectedMobile" onclick="calculateTotal()">
                    <label class="form-check-label" for="selectedMobile"> Andoroid </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="selectedmobile" value="ios" id="selectedMobile" onclick="calculateTotal()">
                    <label class="form-check-label" for="selectedMobile"> Ios </label>
                </div>

                <div class="form-control">
                    <label>Design</label>
                    <select id="design" name="design" onchange="calculateTotal()">
                        <option value="none" selected>None</option>
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
                </fieldset>
            </form>
        </div>
        <div class="card">
            <label>View Price</label>
            <div id="totalPrice"></div>
        </div>
    </div>
</section>

