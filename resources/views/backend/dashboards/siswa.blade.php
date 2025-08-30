@extends('backend.layouts.app')
@section('title', 'Siswa Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Siswa Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">Learning & Academic Progress</p>
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
                                                <i class="bi bi-journal-text"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Subjects</h6>
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
                                            <div class="stats-icon blue mb-2">
                                                <i class="bi bi-building-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">My Class</h6>
                                            <h6 class="font-extrabold mb-0">{{ $siswa->jenjang ?? 'SMA' }}</h6>
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
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Today's Classes</h6>
                                            <h6 class="font-extrabold mb-0">5</h6>
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
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Average Score</h6>
                                            <h6 class="font-extrabold mb-0">85.5</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today's Schedule -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Today's Class Schedule</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Subject</th>
                                                    <th>Teacher</th>
                                                    <th>Room</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>07:00 - 08:30</td>
                                                    <td>Matematika</td>
                                                    <td>Ahmad Suryadi, S.Pd</td>
                                                    <td>Lab 1</td>
                                                    <td><span class="badge bg-success">Completed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>08:45 - 10:15</td>
                                                    <td>Bahasa Indonesia</td>
                                                    <td>Siti Nurhaliza, S.Pd</td>
                                                    <td>Room 2</td>
                                                    <td><span class="badge bg-warning">In Progress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 - 12:00</td>
                                                    <td>Bahasa Inggris</td>
                                                    <td>Budi Santoso, S.Pd</td>
                                                    <td>Room 3</td>
                                                    <td><span class="badge bg-secondary">Upcoming</span></td>
                                                </tr>
                                                <tr>
                                                    <td>13:00 - 14:30</td>
                                                    <td>IPA</td>
                                                    <td>Dewi Sartika, S.Pd</td>
                                                    <td>Lab 2</td>
                                                    <td><span class="badge bg-secondary">Upcoming</span></td>
                                                </tr>
                                                <tr>
                                                    <td>14:45 - 16:15</td>
                                                    <td>IPS</td>
                                                    <td>Rizki Pratama, S.Pd</td>
                                                    <td>Room 4</td>
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
                    <!-- Student Profile -->
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
                                <p class="text-muted">Student</p>
                                <span class="badge bg-info">{{ $siswa->jenjang ?? 'SMA' }}</span>
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
                                <a href="{{route('e_learning.index')}}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-book"></i> View Materials
                                </a>
                                <a href="{{route('soal.index')}}" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-question-circle"></i> Take Quiz
                                </a>
                                <a href="{{route('home')}}" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-calendar"></i> Check Schedule
                                </a>
                                <a href="{{route('nilai.index')}}" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-star"></i> View Grades
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
                                <small class="text-muted">1 hour ago</small>
                                <p class="mb-1">Completed Math Quiz</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">3 hours ago</small>
                                <p class="mb-1">Downloaded Biology Material</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">Yesterday</small>
                                <p class="mb-1">Submitted English Assignment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Academic Progress -->
            <section class="row mt-4">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Subject Performance</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Matematika</span>
                                    <span>88%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 88%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Bahasa Indonesia</span>
                                    <span>92%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 92%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Bahasa Inggris</span>
                                    <span>85%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>IPA</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>IPS</span>
                                    <span>87%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 87%"></div>
                                </div>
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
                                            <th>Teacher</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recent_data['mapel'] as $mapel_item)
                                        <tr>
                                            <td>{{ $mapel_item->nama }}</td>
                                            <td>Teacher Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Learning Resources -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Learning Resources</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Study Materials</h6>
                                        <p class="text-muted">25 files</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-question-circle text-info" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Practice Quizzes</h6>
                                        <p class="text-muted">18 quizzes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-youtube text-danger" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Video Lessons</h6>
                                        <p class="text-muted">12 videos</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-file-earmark-word text-primary" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Assignments</h6>
                                        <p class="text-muted">8 pending</p>
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
