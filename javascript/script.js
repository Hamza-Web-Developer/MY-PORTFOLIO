// NAVBAR SCRIPT CODE STARTS

const menuButton = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.getElementById('menu-icon');
const closeIcon = document.getElementById('close-icon');

menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
});

// NAVBAR SCRIPT CODE ENDS

// COPY BUTTON CONTACT DETAILS SCRIPT STARTS

    document.getElementById("copy-btn").addEventListener("click", function() {
        const contactDetails = document.getElementById("contact-details").innerText;
        navigator.clipboard.writeText(contactDetails).then(() => {
            // Toggle Icons
            document.getElementById("default-icon").classList.add("hidden");
            document.getElementById("success-icon").classList.remove("hidden");

            // Change Tooltip Text
            document.getElementById("tooltip-message").textContent = "Copied!";

            // Show Tooltip
            let tooltip = document.getElementById("tooltip");
            tooltip.classList.remove("invisible", "opacity-0");

            // Restore Original State After 2 Seconds
            setTimeout(() => {
                document.getElementById("default-icon").classList.remove("hidden");
                document.getElementById("success-icon").classList.add("hidden");
                document.getElementById("tooltip-message").textContent = "Copy to clipboard";
                tooltip.classList.add("invisible", "opacity-0");
            }, 2000);
        });
    });


// COPY BUTTON CONTACT DETAILS SCRIPT ENDS

// YOUR MESSAGE WAS SENT/YOUR MESSAGE WAS NOT SENT CODE STARTS

document.getElementById('close-toast').addEventListener('click', function() {
    document.getElementById('toast-default').style.display = 'none';
});

// YOUR MESSAGE WAS SENT/YOUR MESSAGE WAS NOT SENT CODE ENDS