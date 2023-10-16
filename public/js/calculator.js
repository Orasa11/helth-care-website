const calculateButton = document.getElementById("calculateButton");
calculateButton.addEventListener("click", () => {
    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value;
    const age = document.getElementById("age").value;
    const result = document.getElementById("result");
    const genderSelect = document.getElementById("genderSelect");
    let bmrWeight, bmrHeight, bmrAge, gender;
    if (weight === "") {
        const weightError = document.getElementById("weightError");
        return weightError.style.display = "block";
    }
    if (height === "") {
        const heightError = document.getElementById("heightError");
        return heightError.style.display = "block";
    }
    if (age === "") {
        const ageError = document.getElementById("ageError");
        return ageError.style.display = "block";
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
