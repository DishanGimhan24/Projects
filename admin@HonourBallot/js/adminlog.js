const iconClose = document.querySelector(icon - close);

iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
})

function deleteVote(id) {
    $.ajax({
        url: window.location.href,
        type: "POST",
        data: { deletevote: true, id: id },
        success: function (response) {
            response = response.trim();
            if (response === "success") {
                alert("Vote deleted successfully");
                setTimeout("location.href = '../php/votinghistory.php';", 400);
            } else {
                alert("SQL Error");
            }
        },
        error: function () {
            alert("Javascript Error");
        }
    });
}

function openConfirmationDialog() {
document.getElementById("confirmationDialog").style.display = "block";
}

function closeConfirmationDialog() {
document.getElementById("confirmationDialog").style.display = "none";
}

function deleteNominator() {
    $.ajax({
        url: window.location.href,
        type: "POST",
        data: { deleteNominator: true },
        success: function(response) {
            if (response === "success") {
                closeConfirmationDialog();
                window.location.href = "../php/nominators.php";
            } else {
                alert("Error deleting nominator");
            }
        },
        error: function() {
            alert("Error deleting nominator");
        }
    });
}