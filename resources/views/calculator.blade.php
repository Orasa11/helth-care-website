@extends('layouts.main')
@section('content')
    <div class="calCulator">
        <div class="calCulatorForm">
            <div class="genderContainer">
                {{-- <div class="genderSelector">
                    <label for="">Male</label>
                    <input type="radio">
                </div>
                <div class="genderSelector">
                    <label for="">Female</label>
                    <input type="radio">
                </div> --}}
                <select name="" id="genderSelect">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <label for="weight">Weight</label>
            <input type="number" name="weight" id="weight" placeholder="กิโลกรัม">
            <label for="height">Height</label>
            <input type="number" name="height" id="height" placeholder="เซ็นติเมตร">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="ปี" max="100" min="0">
            <label for="output">Output</label>
            <input type="number" id="result" value="0">
            <button class="calculateButton" id="calculateButton">Calculate</button>
        </div>
    </div>
    <script src="{{ asset('js/calculator.js') }}"></script>
@endsection
