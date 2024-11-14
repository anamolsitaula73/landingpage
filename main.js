const endDate = "29 November 2024 20:20:00 GMT+1100"; // Australian Eastern Daylight Time (AEDT)

document.getElementById("end-date").innerText = endDate;
const inputs = document.querySelectorAll("#countdown-timer input");

function clock() {
    const end = new Date(endDate);
    const now = new Date();
    
    const diff = (end - now) / 1000;
    if (diff < 0) return;

    inputs[0].value = Math.floor(diff / 3600 / 24);
    inputs[1].value = Math.floor(diff / 3600) % 24;
    inputs[2].value = Math.floor(diff / 60) % 60;
    inputs[3].value = Math.floor(diff) % 60;
}

// Initial call
clock();

// Update every second
setInterval(clock, 1000);
