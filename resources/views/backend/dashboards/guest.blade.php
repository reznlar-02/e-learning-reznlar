@extends('backend.layouts.app')
@section('title', 'Guest Dashboard - E-Learning System')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Guest Dashboard - {{ $user->name }}</h3>
            <p class="text-muted">Limited Access Overview</p>
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
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon blue mb-2">
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

                    <!-- System Information -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>System Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>About Our E-Learning System</h6>
                                            <p class="text-muted">
                                                Our comprehensive e-learning platform provides a modern approach to education, 
                                                offering interactive learning experiences for students, teachers, and administrators. 
                                                The system supports multiple educational levels and subjects with advanced features 
                                                for content management and progress tracking.
                                            </p>
                                            <h6>Key Features</h6>
                                            <ul class="text-muted">
                                                <li>Multi-level education support (SMP/SMA)</li>
                                                <li>Comprehensive subject management</li>
                                                <li>Interactive learning materials</li>
                                                <li>Progress tracking and analytics</li>
                                                <li>Secure user authentication</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Technical Specifications</h6>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <span>Framework</span>
                                                    <span class="badge bg-primary">Laravel</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <span>Database</span>
                                                    <span class="badge bg-success">MySQL</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <span>Frontend</span>
                                                    <span class="badge bg-info">Bootstrap</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <span>Version</span>
                                                    <span class="badge bg-secondary">1.0.0</span>
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
                    <!-- Welcome Message -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Welcome Guest</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="avatar avatar-xl mb-3">
                                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                                </div>
                                <h5>Welcome!</h5>
                                <p class="text-muted">Explore our e-learning system</p>
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Quick Links</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </a>
                                <a href="#" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-info-circle"></i> About Us
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-question-circle"></i> Help
                                </a>
                                <a href="#" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-envelope"></i> Contact
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- System Status -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>System Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Platform</span>
                                    <span class="badge bg-success">Online</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Database</span>
                                    <span class="badge bg-success">Connected</span>
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

            <!-- Educational Programs -->
            <section class="row mt-4">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Available Educational Programs</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Level</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SMP (Junior High)</td>
                                            <td>Grades 7-9 comprehensive education</td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                        <tr>
                                            <td>SMA (Senior High)</td>
                                            <td>Grades 10-12 specialized tracks</td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Available Majors</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Major</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IPA (Science)</td>
                                            <td>SMA</td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                        <tr>
                                            <td>IPS (Social Studies)</td>
                                            <td>SMA</td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                        <tr>
                                            <td>Bahasa (Language)</td>
                                            <td>SMA</td>
                                            <td><span class="badge bg-success">Available</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Overview -->
            <section class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Platform Features</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-book text-primary" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Learning Materials</h6>
                                        <p class="text-muted">Comprehensive study resources</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-question-circle text-success" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Interactive Quizzes</h6>
                                        <p class="text-muted">Test your knowledge</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-graph-up text-info" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Progress Tracking</h6>
                                        <p class="text-muted">Monitor your learning</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <i class="bi bi-people text-warning" style="font-size: 2rem;"></i>
                                        <h6 class="mt-2">Collaboration</h6>
                                        <p class="text-muted">Learn together</p>
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
