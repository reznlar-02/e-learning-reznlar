@extends('backend.layouts.app')
@section('title', 'Rektor Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Rektor Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">University Leadership & Academic Overview</p>
        </div>

        <div class="page-content">
            <!-- Main Statistics Cards -->
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon purple mb-2">
                                                <i class="bi bi-person-workspace"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Dosen</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_guru']) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon blue mb-2">
                                                <i class="bi bi-mortarboard-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Mahasiswa</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_siswa']) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon green mb-2">
                                                <i class="bi bi-building-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Kelas</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_kelas']) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon red mb-2">
                                                <i class="bi bi-journal-text"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Mata Kuliah</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_mapel']) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Performance Overview -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Academic Performance Overview</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Student GPA Distribution</h6>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Excellent (3.50-4.00)</span>
                                                    <span>25%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 25%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Very Good (3.00-3.49)</span>
                                                    <span>45%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-info" style="width: 45%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Good (2.50-2.99)</span>
                                                    <span>20%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-warning" style="width: 20%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Below Average (<2.50)</span>
                                                    <span>10%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-danger" style="width: 10%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Attendance Statistics</h6>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Dosen Attendance</span>
                                                    <span>{{ $attendance_stats['guru_attendance_percentage'] }}%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: {{ $attendance_stats['guru_attendance_percentage'] }}%"></div>
                                                </div>
                                                <small class="text-muted">{{ $attendance_stats['guru_attendance'] }}/{{ $attendance_stats['total_guru_attendance'] }} present</small>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Mahasiswa Attendance</span>
                                                    <span>{{ $attendance_stats['siswa_attendance_percentage'] }}%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-info" style="width: {{ $attendance_stats['siswa_attendance_percentage'] }}%"></div>
                                                </div>
                                                <small class="text-muted">{{ $attendance_stats['siswa_attendance'] }}/{{ $attendance_stats['total_siswa_attendance'] }} present</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-12 col-lg-3">
                    <!-- Rector Profile -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Rector Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="avatar avatar-xl mb-3">
                                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                                </div>
                                <h5>{{ $user->name }}</h5>
                                <p class="text-muted">Rektor</p>
                                <span class="badge bg-success">Active</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Quick Actions</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-file-earmark-text"></i> View Reports
                                </a>
                                <a href="#" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-people"></i> Manage Personnel
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-calendar"></i> Academic Calendar
                                </a>
                                <a href="#" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-graph-up"></i> Performance Review
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- University Status -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>University Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Academic Year</span>
                                    <span class="badge bg-primary">2024/2025</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Semester</span>
                                    <span class="badge bg-info">Ganjil</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>University Status</span>
                                    <span class="badge bg-success">Operational</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Last Updated</span>
                                    <small class="text-muted">{{ now()->format('d/m/Y') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Student Data Tables -->
            <section class="row mt-4">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Students</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['siswa'] as $siswa)
                                        <tr>
                                            <td>{{ $siswa->name }}</td>
                                            <td>{{ $siswa->username ?? 'N/A' }}</td>
                                            <td><span class="badge bg-{{ $siswa->status == 'Aktif' ? 'success' : 'danger' }}">{{ $siswa->status }}</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Lecturers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['guru'] as $guru)
                                        <tr>
                                            <td>{{ $guru->name }}</td>
                                            <td>{{ $guru->username ?? 'N/A' }}</td>
                                            <td><span class="badge bg-{{ $guru->status == 'Aktif' ? 'success' : 'danger' }}">{{ $guru->status }}</span></td>
                                            <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- University Statistics -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>University Statistics Overview</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-people-fill text-primary" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Total Personnel</h6>
                                        <p class="text-muted">{{ $stats['total_guru'] + 5 }} people</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-mortarboard-fill text-success" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Total Students</h6>
                                        <p class="text-muted">{{ number_format($stats['total_siswa']) }} students</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-building-fill text-info" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Total Classes</h6>
                                        <p class="text-muted">{{ number_format($stats['total_kelas']) }} classes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-graph-up text-warning" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Success Rate</h6>
                                        <p class="text-muted">92.5%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
