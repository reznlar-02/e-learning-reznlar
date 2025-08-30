@extends('backend.layouts.app')
@section('title', 'Guru Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Guru Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">Teaching & Learning Management</p>
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
                                            <div class="stats-icon blue mb-2">
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
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Today's Classes</h6>
                                            <h6 class="font-extrabold mb-0">3</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Teaching Schedule -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Today's Teaching Schedule</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Class</th>
                                                    <th>Subject</th>
                                                    <th>Room</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>07:00 - 08:30</td>
                                                    <td>Kelas 10 IPA 1</td>
                                                    <td>{{ $guru->mata_pelajaran ?? 'Matematika' }}</td>
                                                    <td>Lab 1</td>
                                                    <td><span class="badge bg-success">Completed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>08:45 - 10:15</td>
                                                    <td>Kelas 10 IPS 1</td>
                                                    <td>{{ $guru->mata_pelajaran ?? 'Matematika' }}</td>
                                                    <td>Room 2</td>
                                                    <td><span class="badge bg-warning">In Progress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 - 12:00</td>
                                                    <td>Kelas 11 IPA 1</td>
                                                    <td>{{ $guru->mata_pelajaran ?? 'Matematika' }}</td>
                                                    <td>Lab 2</td>
                                                    <td><span class="badge bg-secondary">Upcoming</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-12 col-lg-3">
                    <!-- Guru Profile -->
                    <div class="card">
                        <div class="card-header">
                            <h4>My Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="avatar avatar-xl mb-3">
                                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                                </div>
                                <h5>{{ $user->name }}</h5>
                                <p class="text-muted">{{ $guru->mata_pelajaran ?? 'Mata Pelajaran' }}</p>
                                <span class="badge bg-info">{{ $guru->jenjang ?? 'Jenjang' }}</span>
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
                                <a href="{{route('e_learning.create')}}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-plus-circle"></i> Create Lesson
                                </a>
                                <a href="{{route('e_learning.create')}}" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-file-earmark-text"></i> Upload Material
                                </a>
                                <a href="{{route('soal.create')}}" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-question-circle"></i> Create Quiz
                                </a>
                                <a href="{{route('nilai.create')}}" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-star"></i> Grade Assignment
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <small class="text-muted">2 hours ago</small>
                                <p class="mb-1">Uploaded Math Quiz for Class 10</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">4 hours ago</small>
                                <p class="mb-1">Graded Assignment Class 11</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">Yesterday</small>
                                <p class="mb-1">Created Lesson Plan</p>
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
                            <h4>My Students</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Performance</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['siswa'] as $siswa_item)
                                        <tr>
                                            <td>{{ $siswa_item->nama }}</td>
                                            <td>{{ $siswa_item->jenjang }}</td>
                                            <td>
                                                <div class="progress" style="height: 6px;">
                                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                                </div>
                                                <small>85%</small>
                                            </td>
                                            <td><span class="badge bg-success">Active</span></td>
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
                            <h4>Available Subjects</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['mapel'] as $mapel_item)
                                        <tr>
                                            <td>{{ $mapel_item->nama }}</td>
                                            <td><span class="badge bg-info">{{ $guru->jenjang ?? 'SMP/SMA' }}</span></td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Teaching Resources -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Teaching Resources</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Lesson Plans</h6>
                                        <p class="text-muted">12 files</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-file-earmark-ppt text-warning" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Presentations</h6>
                                        <p class="text-muted">8 files</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-question-circle text-info" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Quizzes</h6>
                                        <p class="text-muted">15 files</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-youtube text-danger" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Videos</h6>
                                        <p class="text-muted">6 links</p>
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
