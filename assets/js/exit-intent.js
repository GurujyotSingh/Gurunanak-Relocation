document.addEventListener("DOMContentLoaded", () => {
    const overlay = document.getElementById("exitIntentOverlay");
    const closeBtn = document.getElementById("exitCloseBtn");
    const noThanksBtn = document.getElementById("exitNoThanks");
    const form = document.getElementById("exitIntentForm");
    const statusDiv = document.getElementById("exitFormStatus");
    const submitBtn = document.getElementById("exitSubmitBtn");

    if (!overlay) return;

    // Check if user has already seen the popup
    const hasSeenPopup = localStorage.getItem("exitPopupSeen");

    if (!hasSeenPopup) {
        // Mouse tracking for desktop exit intent
        const mouseOutListener = (e) => {
            // Trigger if mouse goes above the viewport
            if (e.clientY < 5) {
                showPopup();
                document.removeEventListener("mouseout", mouseOutListener);
            }
        };
        document.addEventListener("mouseout", mouseOutListener);

        // Fallback for mobile: show after 45 seconds
        setTimeout(() => {
            if (!localStorage.getItem("exitPopupSeen")) {
                showPopup();
            }
        }, 45000);
    }

    function showPopup() {
        if (localStorage.getItem("exitPopupSeen")) return; // double check
        overlay.style.display = "flex";
        localStorage.setItem("exitPopupSeen", "true"); // mark as seen so it doesn't keep firing
    }

    function closePopup() {
        overlay.style.display = "none";
    }

    if (closeBtn) closeBtn.addEventListener("click", closePopup);
    if (noThanksBtn) noThanksBtn.addEventListener("click", closePopup);

    // Form Submission
    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            
            const email = document.getElementById("exitEmail").value;
            if (!email) return;

            submitBtn.innerText = "Claiming...";
            submitBtn.disabled = true;

            const formData = new FormData();
            formData.append("email", email);
            formData.append("message", "Exit Intent Discount Claim");
            formData.append("name", "Discount Lead");
            
            // Add a bypass flag for the modified Apps Script
            formData.append("form_type", "exit_intent");
            formData.append("subject", "Exit Intent Discount Claim");
            formData.append("g-recaptcha-response", "bypass");

            // Assuming the script URL is the same as the contact form one in Contactus.html
            // If the user hasn't replaced the URL globally, they will need to ensure this is correct.
            const googleScriptURL = 'https://script.google.com/macros/s/AKfycbyxN81mAbErYVr-2lTm8QdjidI-TIWBxnXL0sDm2E6EqHp9BXSurJdDwgWT8R4pWtnCWg/exec';

            fetch(googleScriptURL, {
                method: "POST",
                mode: "no-cors",
                body: formData
            })
            .then(() => {
                form.style.display = "none";
                statusDiv.style.display = "block";
                statusDiv.style.color = "#25d366";
                statusDiv.innerHTML = "<strong>Success!</strong> Use promo code <strong>GN10OFF</strong> when speaking with our team. We'll be in touch soon!";
                setTimeout(closePopup, 8000); // Give them more time to read the code
            })
            .catch(err => {
                submitBtn.innerText = "Claim 10% Discount";
                submitBtn.disabled = false;
                statusDiv.style.display = "block";
                statusDiv.style.color = "#f56565";
                statusDiv.innerHTML = "Oops, something went wrong. Please try again.";
            });
        });
    }
});
