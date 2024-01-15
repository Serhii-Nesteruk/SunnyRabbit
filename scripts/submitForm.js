function submitForm() {
    var formData = new FormData(document.getElementById("SignUpForm"));

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "SignUpButtonProcess.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(formData);
}