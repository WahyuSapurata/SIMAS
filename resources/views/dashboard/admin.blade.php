@extends('layouts.layout')
@section('button')
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0 gap-5">
            <!--begin::Title-->
            <div class="d-flex gap-5">
                <select name="filter_month" class="form-select" data-control="select2" id="filter_month_select"
                    data-placeholder="Silahkan pilih bulan">
                </select>

                <select name="filter_year" class="form-select" data-control="select2" id="filter_year_select"
                    data-placeholder="Silahkan pilih tahun">
                </select>
            </div>

            <div>
                <button id="filter" class="btn btn-info">Filter Data</button>
            </div>
            <!--end::Title-->
        </div>
    </div>
@endsection
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <style>
                                        svg {
                                            fill: #2b3674
                                        }
                                    </style>
                                    <path
                                        d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z" />
                                </svg>
                                <div>
                                    <div class="fs-6">Pemasukan</div>
                                    <div class="fs-5" id="total-pemasukan">Rp 0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" height="25" width="23"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                                </svg>
                                <div>
                                    <div class="fs-6">Pengeluaran</div>
                                    <div class="fs-5" id="total-pengeluaran">Rp 0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="25"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M384 32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H398.4c-5.2 25.8-22.9 47.1-46.4 57.3V448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 128c-17.7 0-32-14.3-32-32s14.3-32 32-32H288V153.3c-23.5-10.3-41.2-31.6-46.4-57.3H128c-17.7 0-32-14.3-32-32s14.3-32 32-32H256c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288H584.4L512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C627.2 382 574.9 416 512 416zM126.8 195.8L54.4 320H199.3L126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C242 382 189.7 416 126.8 416S11.7 382 .9 337.1z" />
                                </svg>
                                <div>
                                    <div class="fs-6">Kas</div>
                                    <div class="fs-5">{{ 'Rp ' . number_format($kas, 0, ',', '.') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-dark">Total Pendapatan dan Pengeluaran</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <div id="noData" class="d-grid justify-content-center gap-5"
                                    style="justify-items: center">
                                    <svg id="no-grafik" xmlns="http://www.w3.org/2000/svg" height="10em"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <style>
                                            #no-grafik {
                                                fill: #6363636b
                                            }
                                        </style>
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.7 328.7c22-22 53.9-40.7 91.3-40.7s69.3 18.7 91.3 40.7c11.1 11.1 20.1 23.4 26.4 35.4c6.2 11.7 10.3 24.4 10.3 35.9c0 5.2-2.6 10.2-6.9 13.2s-9.8 3.7-14.7 1.8l-20.5-7.7c-26.9-10.1-55.5-15.3-84.3-15.3h-3.2c-28.8 0-57.3 5.2-84.3 15.3L149.6 415c-4.9 1.8-10.4 1.2-14.7-1.8s-6.9-7.9-6.9-13.2c0-11.6 4.2-24.2 10.3-35.9c6.3-12 15.3-24.3 26.4-35.4zm-31.2-182l89.9 47.9c10.7 5.7 10.7 21.1 0 26.8l-89.9 47.9c-7.9 4.2-17.5-1.5-17.5-10.5c0-2.8 1-5.5 2.8-7.6l36-43.2-36-43.2c-1.8-2.1-2.8-4.8-2.8-7.6c0-9 9.6-14.7 17.5-10.5zM396 157.1c0 2.8-1 5.5-2.8 7.6l-36 43.2 36 43.2c1.8 2.1 2.8 4.8 2.8 7.6c0 9-9.6 14.7-17.5 10.5l-89.9-47.9c-10.7-5.7-10.7-21.1 0-26.8l89.9-47.9c7.9-4.2 17.5 1.5 17.5 10.5z" />
                                    </svg>
                                    <div class="text-muted fs-sm-2">Grafik Masih Kosong Pilih Filter Bulan atau Tahun
                                        Terlebih Dahulu
                                    </div>
                                </div>

                                <div id="onData" class="card justify-content-center align-items-center shadow-lg d-none">
                                    <div id="loading" class="spinner-border loading text-danger"
                                        style="width: 20px; height: 20px; position: absolute;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <canvas id="myAreaChart" style="max-height: 400px"></canvas>
                                </div>

                                <div id="noGrafik" class="d-grid justify-content-center gap-5 d-none"
                                    style="justify-items: center">
                                    <svg id="no-nilai" xmlns="http://www.w3.org/2000/svg" height="10em"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <style>
                                            #no-nilai {
                                                fill: #6363636b
                                            }
                                        </style>
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.7 328.7c22-22 53.9-40.7 91.3-40.7s69.3 18.7 91.3 40.7c11.1 11.1 20.1 23.4 26.4 35.4c6.2 11.7 10.3 24.4 10.3 35.9c0 5.2-2.6 10.2-6.9 13.2s-9.8 3.7-14.7 1.8l-20.5-7.7c-26.9-10.1-55.5-15.3-84.3-15.3h-3.2c-28.8 0-57.3 5.2-84.3 15.3L149.6 415c-4.9 1.8-10.4 1.2-14.7-1.8s-6.9-7.9-6.9-13.2c0-11.6 4.2-24.2 10.3-35.9c6.3-12 15.3-24.3 26.4-35.4zm-31.2-182l89.9 47.9c10.7 5.7 10.7 21.1 0 26.8l-89.9 47.9c-7.9 4.2-17.5-1.5-17.5-10.5c0-2.8 1-5.5 2.8-7.6l36-43.2-36-43.2c-1.8-2.1-2.8-4.8-2.8-7.6c0-9 9.6-14.7 17.5-10.5zM396 157.1c0 2.8-1 5.5-2.8 7.6l-36 43.2 36 43.2c1.8 2.1 2.8 4.8 2.8 7.6c0 9-9.6 14.7-17.5 10.5l-89.9-47.9c-10.7-5.7-10.7-21.1 0-26.8l89.9-47.9c7.9-4.2 17.5 1.5 17.5 10.5z" />
                                    </svg>
                                    <div class="text-muted fs-sm-2">Belum ada data</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
@section('script')
    <script>
        let control = new Control();

        const generateSchoolYears = (startYear) => {
            const currentYear = new Date().getFullYear();
            const years = [];

            for (let year = startYear; year <= currentYear; year++) {
                years.push({
                    text: year
                });
            }

            // Balik urutan tahun agar tahun sekarang berada di paling atas
            years.reverse();

            return years;
        };

        const generateMonths = () => {
            const months = [{
                    text: 'Januari'
                },
                {
                    text: 'Februari'
                },
                {
                    text: 'Maret'
                },
                {
                    text: 'April'
                },
                {
                    text: 'Mei'
                },
                {
                    text: 'Juni'
                },
                {
                    text: 'Juli'
                },
                {
                    text: 'Agustus'
                },
                {
                    text: 'September'
                },
                {
                    text: 'Oktober'
                },
                {
                    text: 'November'
                },
                {
                    text: 'Desember'
                }
            ];

            return months;
        };

        const dataYears = generateSchoolYears(2000);
        const dataMonths = generateMonths();

        $(document).ready(function() {
            // Initialize Select2
            $('#filter_year_select').select2();
            $('#filter_month_select').select2();

            // Populate Select2 options
            control.push_select_data(dataYears, '#filter_year_select');
            control.push_select_data(dataMonths, '#filter_month_select');

            var ctx = document.getElementById('myAreaChart').getContext('2d');
            var myChart;

            // Function to fetch and update chart data
            const fetchData = async (date) => {
                try {
                    const res = await $.ajax({
                        url: '/admin/chart',
                        method: 'GET',
                        data: {
                            date
                        }
                    });

                    if (res.success === true) {
                        $('.loading').show();
                        if (res.data.labels.length > 0) {
                            getGrafik(res.data);
                        } else {
                            clearGrafik();
                        }
                    } else {
                        console.error('Gagal mengambil data:', res.message);
                        clearGrafik();
                    }
                } catch (error) {
                    console.error('Gagal melakukan permintaan AJAX:', error);
                    clearGrafik();
                } finally {
                    $('.loading').hide();
                }
            };

            $('#filter').on('click', function() {
                $('#noData').addClass('d-none');

                const selectedYear = $('#filter_year_select').val();
                const selectedMonthIndex = $('#filter_month_select').prop('selectedIndex');

                if (selectedYear && selectedMonthIndex >= 0) {
                    // Karena bulan di JavaScript dimulai dari 0 (Januari), maka tambahkan 1
                    const month = (selectedMonthIndex).toString().padStart(2, '0');
                    const date = `${selectedYear}-${month}-01`; // Format: YYYY-MM-DD
                    fetchData(date); // Kirim dalam format tanggal lengkap
                } else {
                    alert('Silakan pilih tahun dan bulan terlebih dahulu.');
                }
            });

            function getGrafik(data) {

                $('#onData').removeClass('d-none');
                $('#noGrafik').addClass('d-none');

                var total_pendapatan = 0;
                var total_pengeluaran = 0;

                $.each(data.pemasukan, function(x, y) {
                    total_pendapatan += y;
                })
                $.each(data.pengeluaran, function(x, y) {
                    total_pengeluaran += y;
                })
                $('#total-pemasukan').html('Rp ' + numeral(total_pendapatan).format('0,0'));
                $('#total-pengeluaran').html('Rp ' + numeral(total_pengeluaran).format('0,0'));

                // Filter data untuk chart (jika keduanya 0, maka tidak ditampilkan)
                let filteredLabels = [];
                let filteredPemasukan = [];
                let filteredPengeluaran = [];

                for (let i = 0; i < data.labels.length; i++) {
                    const pemasukan = data.pemasukan[i];
                    const pengeluaran = data.pengeluaran[i];

                    if (pemasukan !== 0 || pengeluaran !== 0) {
                        filteredLabels.push(data.labels[i]);
                        filteredPemasukan.push(pemasukan);
                        filteredPengeluaran.push(pengeluaran);
                    }
                }

                // Update chart data
                if (myChart) {
                    myChart.destroy();
                }
                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.labels,
                        datasets: [{
                                label: 'Pemasukan',
                                data: data.pemasukan,
                                backgroundColor: 'rgb(0, 0, 255)', // Biru menyala
                                borderColor: 'rgb(0, 0, 255, 1)',
                                borderWidth: 1,
                                fill: false
                            },
                            {
                                label: 'Pengeluaran',
                                data: data.pengeluaran,
                                backgroundColor: 'rgb(255, 0, 0)', // Merah menyala
                                borderColor: 'rgb(255, 0, 0, 1)',
                                borderWidth: 1,
                                fill: false
                            },
                        ]
                    },
                    options: {
                        scales: {
                            x: {
                                stacked: false
                            },
                            y: {
                                stacked: false,
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return 'Rp ' + value.toLocaleString();
                                    }
                                }
                            }
                        },
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var label = context.dataset.label || '';
                                        var value = context.raw || 0;
                                        return label + ': Rp ' + value.toLocaleString();
                                    }
                                }
                            },
                            legend: {
                                position: 'top',
                            },
                        },
                        responsive: true,
                        interaction: {
                            mode: 'nearest',
                            axis: 'x',
                            intersect: false
                        }
                    }
                });
            }

            function clearGrafik() {
                $('#noGrafik').removeClass('d-none');
                $('#onData').addClass('d-none');

                $('#total-pemasukan').html('Rp 0');
                $('#total-pengeluaran').html('Rp 0');
                if (myChart) {
                    myChart.destroy();
                }
            }
        });
    </script>
@endsection
