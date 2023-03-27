const DATA_SET_VERTICAL_BAR_CHART_1 = [0, 3, 12, 31, 22, 41, 60, 59, 91, 45, 58, 52, 59, 54, 51, 50, 27, 43, 35];

const labels_vertical_bar_chart = ['2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'];

const dataVerticalBarChart = {
    labels: labels_vertical_bar_chart,
    datasets: [
        {
            label: 'Goals',
            data: DATA_SET_VERTICAL_BAR_CHART_1,
            borderColor: 'rgb(54, 162, 235)',
            backgroundColor: 'rgb(250, 204, 21)',
        }
    ]
};
const configVerticalBarChart = {
    type: 'bar',
    data: dataVerticalBarChart,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Goals per year'
            }
        }
    },
};

var verticalBarChart = new Chart(
    document.getElementById('verticalBarChart'),
    configVerticalBarChart
);