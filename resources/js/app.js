import Alpine from 'alpinejs';
import axios from 'axios'; // Import Axios
import Chart from 'chart.js/auto';
import './bootstrap';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', async function () {
    const ctx = document.getElementById('myChart');

    if (ctx) {
        try {
            // Fetch data from the API
            const response = await axios.get('http://localhost:8000/api/chartaverage');
            if (response.status === 200 && response.data?.data) {
                const { humidity, temperature, amonia } = response.data.data;

                // Create the chart
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Suhu', 'Kelembapan', 'Amonia'],
                        datasets: [{
                            label: 'Rata-Rata Data 1 Jam Terakhir',
                            data: [temperature, humidity, amonia],
                            backgroundColor: [
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)'
                            ],
                            hoverBackgroundColor: [
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)'
                            ],
                            borderColor: [
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)',
                                'rgba(217, 217, 217, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    display: false
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            } else {
                console.error('Failed to fetch data or invalid response format.');
            }
        } catch (error) {
            console.error('Error fetching data from API:', error);
        }
    }
});
