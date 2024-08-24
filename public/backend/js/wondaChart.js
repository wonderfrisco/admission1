const ctx = document.getElementById("wondaChart").getContext("2d");

const chart = new Chart(ctx, {
    type: "bar", // or 'line', 'pie', 'scatter', etc.
    data: {
        labels: [
            "HOUSE 1(M)",
            "HOUSE 1(F)",
            "HOUSE 2(M)",
            "HOUSE 3(F)",
            "May",
            "KLJL",
            "Jun",
            "Jul",
            "August",
            "September",
        ],
        datasets: [
            {
                data: [70, 90, 70, 80, 85, 55, 70, 70, 70, 70, 70, 70],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
const ctx1 = document.getElementById("wondaChart1").getContext("2d");

const chart1 = new Chart(ctx1, {
    type: "pie", // or 'line', 'pie', 'scatter', etc.
    data: {
        labels: ["Enrolled", "Not Enrolled"],
        datasets: [
            {
                label: "My Dataset",
                data: [70, 30],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
const ctx2 = document.getElementById("wondaChart2").getContext("2d");

const chart2 = new Chart(ctx2, {
    type: "pie", // or 'line', 'pie', 'scatter', etc.
    data: {
        labels: ["Male", "Female"],
        datasets: [
            {
                label: "My Dataset",
                data: [70, 40],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
const ctx3 = document.getElementById("wondaChart3").getContext("2d");

const chart3 = new Chart(ctx3, {
    type: "pie", // or 'line', 'pie', 'scatter', etc.
    data: {
        labels: ["January", "February", "March", "April", "May", "May"],
        datasets: [
            {
                label: "My Dataset",
                data: [70, 20, 30, 40, 50, 80],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
