
function collect_firstname()
{
    let fname = document.getElementById("firstName").value;
    console.log("First Name:", fname);
    return false;
}

function collect_lastname()
{
    let lname = document.getElementById("lastName").value;
    console.log("Last Name:", lname);
    return false;
}

function collect_email()
{
    let email = document.getElementById("email").value;
    console.log("Email:", email);
    return false;
}

function collect_phone()
{
    let phone = document.getElementById("phone").value;
    console.log("Phone Number:", phone);
    return false;
}

function collect_message()
{
    let message = document.getElementById("message").value;
    console.log("Message:", message);
    return false;
}

function submit_data()
{
    // sob field alada alada console e print
    collect_firstname();
    collect_lastname();
    collect_email();
    collect_phone();
    collect_message();

    // validation
    let fname   = document.getElementById("firstName").value.trim();
    let lname   = document.getElementById("lastName").value.trim();
    let email   = document.getElementById("email").value.trim();
    let phone   = document.getElementById("phone").value.trim();
    let message = document.getElementById("message").value.trim();

    if (fname === "" || lname === "" || email === "" || phone === "" || message === "") 
    {
        alert("Field Value need to be filled up");
        return false;
    }

    console.log("=== Form Submitted Successfully ===");
    alert("Form Submitted Successfully");
    return false;
}