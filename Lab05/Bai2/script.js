const form = document.getElementById('form');
const fname = document.getElementById('first_name');
const lname = document.getElementById('last_name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const country = document.getElementById('country');
// const gender = document.getElementById('gender');
const about = document.getElementById('about');

const date = document.getElementById("date")
const month = document.getElementById("month")
const year = document.getElementById("year")

const createDate = () => {
    for (let i = 1; i <= 31; i++) {
        let node = document.createElement("option")
        let textNode = document.createTextNode(i)
        node.appendChild(textNode)
        node.value = i
        date.appendChild(node)
    }

    for (let i = 1; i <= 12; i++) {
        let node = document.createElement("option")
        let textNode = document.createTextNode(i)
        node.appendChild(textNode)
        node.value = i
        month.appendChild(node)
    }

    for (let i = 1900; i <= 2100; i++) {
        let node = document.createElement("option")
        let textNode = document.createTextNode(i)
        node.appendChild(textNode)
        node.value = i
        year.appendChild(node)
    }
}
createDate()


form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    // get the values of the inputs
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value;
    const dateValue = date.value;
    const monthValue = month.value;
    const yearValue = year.value;
    const countryValue = country.value;
    const gender = document.querySelector("input[name='gender']:checked");


    // alert(genderValue);return;

    // checking
    if (fnameValue == '') {
        alert("First name cannot be empty");
        return;
    } else if (fnameValue.length < 2 || fnameValue.length > 30) {
        alert("First name must contains from 2 to 30 characters");
        return;
    }

    if (lnameValue == '') {
        alert("Last name cannot be empty")
    } else if (lnameValue.length < 2 || lnameValue.length > 30) {
        alert("Last name must contains from 2 to 30 characters");
        return;
    }

    if (emailValue == '') {
        alert("Email cannot be empty");
        return;
    } else if (!ValidateEmail(emailValue)) {
        alert("Email address is not valid");
        return;
    }

    if (passwordValue == '') {
        alert("Password be empty");
        return;
    } else if (passwordValue.length < 2 || passwordValue.length > 30) {
        alert("Password must contains from 2 to 30 characters");
        return;
    }

    if (dateValue == "Choose...") {
        alert("Choose date")
        return;
    } else if (monthValue == "Choose...") {
        alert("Choose month")
        return;
    } else if (yearValue == "Choose...") {
        alert("Choose year")
        return;
    }

    if (countryValue == "Choose...") {
        alert("Choose country");
        return;
    }

    if (!gender) {
        alert("Choose gender")
        return;
    }

    if (aboutValue == "".length > 10000) {
        alert("Max character of About is 10000");
        return;
    }

    alert("Complete!");
}

function ValidateEmail(mail) {
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (reg.test(email)) {
        return (true)
    }
    return (false)
}
