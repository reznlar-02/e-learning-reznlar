@extends('backend.layouts.app')
@section('title', 'Admin Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Admin Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">System Overview & Management</p>
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
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Users</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_users']) }}</h6>
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
                                                <i class="bi bi-person-workspace"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Guru</h6>
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
                                            <div class="stats-icon green mb-2">
                                                <i class="bi bi-mortarboard-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Siswa</h6>
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
                                            <div class="stats-icon red mb-2">
                                                <i class="bi bi-layers-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Jenjang</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_jenjang']) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Statistics Row -->
                    <div class="row mt-3">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon orange mb-2">
                                                <i class="bi bi-diagram-3-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Jurusan</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_jurusan']) }}</h6>
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
                                            <div class="stats-icon indigo mb-2">
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
                                            <div class="stats-icon teal mb-2">
                                                <i class="bi bi-journal-text"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Mapel</h6>
                                            <h6 class="font-extrabold mb-0">{{ number_format($stats['total_mapel']) }}</h6>
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
                                            <div class="stats-icon pink mb-2">
                                                <i class="bi bi-shield-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">System Status</h6>
                                            <h6 class="font-extrabold mb-0 text-success">Active</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar - User Roles & Attendance -->
                <div class="col-12 col-lg-3">
                    <!-- User Roles Statistics -->
                    <div class="card">
                        <div class="card-header">
                            <h4>User Roles Distribution</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Admin</span>
                                    <span class="badge bg-primary">{{ $role_stats['admin_count'] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Super Admin</span>
                                    <span class="badge bg-success">{{ $role_stats['super_admin_count'] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Guru</span>
                                    <span class="badge bg-info">{{ $role_stats['guru_count'] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Siswa</span>
                                    <span class="badge bg-warning">{{ $role_stats['siswa_count'] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Kepala Sekolah</span>
                                <span class="badge bg-dark">{{ $role_stats['kepala_sekolah_count'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Attendance Statistics -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Attendance Overview</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6>Guru Attendance</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" style="width: {{ $attendance_stats['guru_attendance_percentage'] }}%">
                                        {{ $attendance_stats['guru_attendance_percentage'] }}%
                                    </div>
                                </div>
                                <small class="text-muted">{{ $attendance_stats['guru_attendance'] }} / {{ $attendance_stats['total_guru_attendance'] }} present</small>
                            </div>
                            <div class="mb-3">
                                <h6>Siswa Attendance</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-info" style="width: {{ $attendance_stats['siswa_attendance_percentage'] }}%">
                                        {{ $attendance_stats['siswa_attendance_percentage'] }}%
                                    </div>
                                </div>
                                <small class="text-muted">{{ $attendance_stats['siswa_attendance'] }} / {{ $attendance_stats['total_siswa_attendance'] }} present</small>
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
                                <a href="{{ route('guru.index') }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-person-plus"></i> Manage Guru
                                </a>
                                <a href="{{ route('siswa.index') }}" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-mortarboard"></i> Manage Siswa
                                </a>
                                <a href="{{ route('kelas_admin.index') }}" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-building"></i> Manage Kelas
                                </a>
                                <a href="{{ route('mapel.index') }}" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-journal-text"></i> Manage Mapel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Data Tables -->
            <section class="row mt-4">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['users'] as $user_item)
                                        <tr>
                                            <td>{{ $user_item->name }}</td>
                                            <td>{{ $user_item->username ?? 'N/A' }}</td>
                                            <td><span class="badge bg-primary">{{ $user_item->role }}</span></td>
                                            <td><span class="badge bg-{{ $user_item->status == 'Aktif' ? 'success' : 'danger' }}">{{ $user_item->status }}</span></td>
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
                            <h4>Recent Guru</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Jenjang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['guru'] as $guru_item)
                                        <tr>
                                            <td>{{ $guru_item->nama }}</td>
                                            <td>{{ $guru_item->mata_pelajaran }}</td>
                                            <td><span class="badge bg-info">{{ $guru_item->jenjang }}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- System Information -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>System Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><strong>Laravel Version:</strong> {{ app()->version() }}</p>
                                    <p><strong>PHP Version:</strong> {{ phpversion() }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Database:</strong> {{ config('database.default') }}</p>
                                    <p><strong>Environment:</strong> {{ config('app.env') }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Debug Mode:</strong> {{ config('app.debug') ? 'ON' : 'OFF' }}</p>
                                    <p><strong>Timezone:</strong> {{ config('app.timezone') }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Last Updated:</strong> {{ now()->format('d/m/Y H:i') }}</p>
                                    <p><strong>System Status:</strong> <span class="badge bg-success">Operational</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
