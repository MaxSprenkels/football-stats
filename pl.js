const API_KEY = "89d1ce957a224e70aa9a0128101bf8ef";
const API_URL = "https://api.football-data.org/v2/";
const LEAGUE_ID = "2021";
const endpoint = `${API_URL}competitions/${LEAGUE_ID}/scorers`;

fetch(endpoint, {
  headers: {
    "X-Auth-Token": API_KEY,
  },
})
  .then((response) => response.json())
  .then((data) => {
    const topScorers = data.scorers.slice(0, 10); // Toon alleen de top 10

    const labels = topScorers.map((scorer) => scorer.player.name);
    const goals = topScorers.map((scorer) => scorer.numberOfGoals);

    const dataVerticalBarChart = {
      labels: labels,
      datasets: [
        {
          label: "Goals",
          data: goals,
          borderColor: "rgb(54, 162, 235)",
          backgroundColor: "rgba(250, 204, 21, 0.7)",
        },
      ],
    };

    const configVerticalBarChart = {
      type: "bar",
      data: dataVerticalBarChart,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            text: "Top Scorers in Premier League",
          },
        },
      },
    };

    const verticalBarChart = new Chart(
      document.getElementById("verticalBarChart"),
      configVerticalBarChart
    );
  })
  .catch((error) => {
    console.error("Error fetching top scorers:", error);
  });