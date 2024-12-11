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

            // Check if the response status is OK
            if (response.status === 200 && response.data?.data) {
                const { humidity, temperature, amonia } = response.data.data;

                // Create the chart
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Suhu', 'Kelembapan', 'Amonia'],
                        datasets: [{
                            label: 'Rata-Rata Data 1 Jam Terakhir',
                            data: [temperature, humidity, amonia], // Use fetched data
                            backgroundColor: [
                                'rgba(75, 192, 192, 0.5)',
                                'rgba(153, 102, 255, 0.5)',
                                'rgba(255, 159, 64, 0.5)'
                            ],
                            hoverBackgroundColor: [
                                'rgba(75, 192, 192, 0.7)',
                                'rgba(153, 102, 255, 0.7)',
                                'rgba(255, 159, 64, 0.7)'
                            ],
                            borderColor: [
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
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
