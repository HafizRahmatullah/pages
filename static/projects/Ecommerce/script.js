// Countdown Timer Example
const countdown = () => {
    console.log("Countdown initialized.");
};
document.addEventListener("DOMContentLoaded", () => {
    const checkoutForm = document.getElementById("checkoutForm");
    const thankYouMessage = document.getElementById("thankYouMessage");

    checkoutForm.addEventListener("submit", (event) => {
        event.preventDefault(); // Prevent form from refreshing the page

        // Simulate payment processing (You can add real payment APIs later)
        setTimeout(() => {
            // Hide the form
            checkoutForm.style.display = "none";

            // Show the thank-you message
            thankYouMessage.style.display = "block";
        }, 1000);
    });
});
