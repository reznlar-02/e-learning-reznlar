@extends('backend.layouts.app')
@section('title', 'Orang Tua Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Orang Tua Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">Parent Monitoring & Support</p>
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
                                            <h6 class="text-muted font-semibold">My Children</h6>
                                            <h6 class="font-extrabold mb-0">2</h6>
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
                                            <h6 class="text-muted font-semibold">Total Classes</h6>
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
                                            <div class="stats-icon green mb-2">
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Attendance Rate</h6>
                                            <h6 class="font-extrabold mb-0">95%</h6>
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
                                            <h6 class="font-extrabold mb-0">87.5</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Children Progress -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Children Academic Progress</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Child 1: Ahmad Rizki</h6>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Matematika</span>
                                                    <span>90%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Bahasa Indonesia</span>
                                                    <span>88%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 88%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>IPA</span>
                                                    <span>92%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 92%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Child 2: Siti Nurhaliza</h6>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Matematika</span>
                                                    <span>85%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-warning" style="width: 85%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Bahasa Inggris</span>
                                                    <span>95%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 95%"></div>
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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-12 col-lg-3">
                    <!-- Parent Profile -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Parent Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="avatar avatar-xl mb-3">
                                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                                </div>
                                <h5>{{ $user->name }}</h5>
                                <p class="text-muted">Parent</p>
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
                                    <i class="bi bi-eye"></i> View Progress
                                </a>
                                <a href="#" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-calendar"></i> Check Schedule
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-chat"></i> Contact Teacher
                                </a>
                                <a href="#" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-bell"></i> Notifications
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Updates -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Recent Updates</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <small class="text-muted">2 hours ago</small>
                                <p class="mb-1">New grade posted for Math</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">1 day ago</small>
                                <p class="mb-1">Attendance report updated</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted">3 days ago</small>
                                <p class="mb-1">New assignment uploaded</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Academic Calendar -->
            <section class="row mt-4">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Upcoming Academic Events</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Parent-Teacher Meeting</h6>
                                        <small class="text-muted">Discuss academic progress</small>
                                    </div>
                                    <span class="badge bg-info">Next Week</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Mid-Semester Exam</h6>
                                        <small class="text-muted">All subjects</small>
                                    </div>
                                    <span class="badge bg-warning">2 Weeks</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">School Holiday</h6>
                                        <small class="text-muted">Semester break</small>
                                    </div>
                                    <span class="badge bg-success">1 Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Attendance Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Child</th>
                                            <th>Month</th>
                                            <th>Present</th>
                                            <th>Absent</th>
                                            <th>Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ahmad Rizki</td>
                                            <td>{{ now()->format('M Y') }}</td>
                                            <td>22</td>
                                            <td>1</td>
                                            <td><span class="badge bg-success">96%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Siti Nurhaliza</td>
                                            <td>{{ now()->format('M Y') }}</td>
                                            <td>21</td>
                                            <td>2</td>
                                            <td><span class="badge bg-success">91%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Communication Center -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Communication Center</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-chat-dots text-primary" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Messages</h6>
                                        <p class="text-muted">3 unread</p>
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-calendar-event text-success" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Appointments</h6>
                                        <p class="text-muted">2 scheduled</p>
                                        <a href="#" class="btn btn-sm btn-outline-success">Schedule</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-file-earmark-text text-info" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Reports</h6>
                                        <p class="text-muted">Monthly updates</p>
                                        <a href="#" class="btn btn-sm btn-outline-info">Download</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-bell text-warning" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Notifications</h6>
                                        <p class="text-muted">5 new</p>
                                        <a href="#" class="btn btn-sm btn-outline-warning">View All</a>
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
