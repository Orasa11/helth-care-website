const calculateButton = document.getElementById("calculateButton");
calculateButton.addEventListener("click", () => {
    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value;
    const age = document.getElementById("age").value;
    const result = document.getElementById("result");
    const genderSelect = document.getElementById("genderSelect");
    let bmrWeight;
    let bmrHeight;
    let bmrAge;
    let gender;
    if (weight === "") {
        return (result.innerHTML = "Please Enter Weight");
    }
    if (height === "") {
        return (result.innerHTML = "Please Enter Height");
    }
    if (age === "") {
        return (result.innerHTML = "Please Enter Age");
    }
    if (genderSelect.value === "female") {
        bmrWeight = 9.6 * weight;
        bmrHeight = 1.8 * height;
        bmrAge = 4.7 * age;
        gender = 665;
    }
    if (genderSelect.value === "male") {
        bmrWeight = 13.7 * weight;
        bmrHeight = 5 * height;
        bmrAge = 6.8 * age;
        gender = 66;
    }
    const BMR = gender + bmrWeight + bmrHeight - bmrAge;
    result.value = BMR.toFixed();
});
