const DATA_SET_VERTICAL_BAR_CHART_1 = [5, 1, 14, 15, 24, 34, 35, 30, 48, 60, 63, 69, 61, 57, 55, 53, 49, 38, 42, 47, 14];

const labels_vertical_bar_chart = ['2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'];

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