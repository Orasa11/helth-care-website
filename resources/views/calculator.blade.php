@extends('layouts.main')
@section('content')
    <div class="calCulator">
        <form action=""  class="calCulatorForm">
            <div class="genderContainer">
                <div class="genderSelector">
                    <label for="">Male</label>
                    <input type="radio">
                </div>
                <div class="genderSelector">
                    <label for="">Female</label>
                    <input type="radio">
                </div>
            </div>
            <label for="weight">Weight</label>
            <input type="number" name="weight" id="" placeholder="กิโลกรัม">
            <label for="height">Height</label>
            <input type="number" name="height" id="" placeholder="เซ็นติเมตร">
            <label for="age">Age</label>
            <input type="number" name="age" id="" placeholder="ปี" max="100" min="0">
            <label for="output">Output</label>
            <input type="number" name="output" id="" placeholder="Output">
            <input type="button" value="Calculate">
        </form>
    </div>
@endsection
