function validatepass() {
    var newpassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (newpassword !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}
function openConfirmationDialog() {
document.getElementById("confirmationDialog").style.display = "block";
}

function closeConfirmationDialog() {
document.getElementById("confirmationDialog").style.display = "none";
}

function deleteVoter() {
$.ajax({
    url: window.location.href,
    type: "POST",
    data: { deleteVoter: true },
    success: function(response) {
        if (response === "success") {
            closeConfirmationDialog();
            window.location.href = "../html/home.html";
        } else {
            alert("Error deleting account");
        }
    },
    error: function() {
        alert("Error deleting account");
    }
});
}