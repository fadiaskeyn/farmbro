import './bootstrap';
import Alpine from 'alpinejs';
import Chart from 'chart.js/auto';

window.Alpine = Alpine;
Alpine.start();

// Inisialisasi Chart.js
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('myChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green'],
                datasets: [{
                    label: 'Total Ayam',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(201, 203, 207, 0.5)',
                        'rgba(201, 203, 207, 0.5)'
                    ],
                    hoverBackgroundColor: true,
                    hoverBorderRadius: 10,
                    borderColor: [
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
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
    }
});
