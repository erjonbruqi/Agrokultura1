document.addEventListener('DOMContentLoaded', function () {
    // Get all buttons with class 'btn-success'
    var buttons = document.querySelectorAll('.btn-success');

    // Loop through each button and add a click event listener
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Get the target hidden div based on the data-target attribute
            var targetDivId = button.getAttribute('data-target');
            var targetDiv = document.getElementById(targetDivId);

            // Remove all buttons in the same parent div
            removeButtonsInSameDiv(targetDiv);

            // Show the clicked hidden div
            targetDiv.classList.remove('hidden');
        });
    });

    // Function to remove all buttons in the same parent div
    function removeButtonsInSameDiv(parentDiv) {
        var buttonsInSameDiv = parentDiv.querySelectorAll('.btn-success');
        buttonsInSameDiv.forEach(function (btn) {
            btn.remove();
        });
    }
});