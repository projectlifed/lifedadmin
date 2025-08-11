<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LIFED HEALTH - Super Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="dashboard-wrapper">
        @include('layouts.sidebar')
        <div class="main">
            <div class="cards">
                <div class="card" style="background: #e0f2fe;">
                    <div>
                        <strong>Total Users</strong>
                        <p>{{ $totalUsers ?? 0 }}</p>
                    </div>
                    <div class="card-icon">👥</div>
                </div>
                <div class="card" style="background: #f5e1ff;">
                    <div>
                        <strong>Total Healthmates</strong>
                        <p>{{ $totalHealthmates ?? 0 }}</p>
                    </div>
                    <div class="card-icon">🏅</div>
                </div>
                <div class="card" style="background: #e0e7ff;">
                    <div>
                        <strong>Total Programs</strong>
                        <p>{{ $totalPrograms ?? 0 }}</p>
                    </div>
                    <div class="card-icon">👥</div>
                </div>
                <div class="card" style="background: #ecfdf5;">
                    <div>
                        <strong>Pending Approval</strong>
                        <p>{{ $pendingApprovals ?? 0 }}</p>
                    </div>
                    <div class="card-icon">💳</div>
                </div>
                <div class="card" style="background: #fef2f2;">
                    <div>
                        <strong>Programs Paid</strong>
                        <p>{{ $programsPaid ?? 0 }}</p>
                    </div>
                    <div class="card-icon">💰</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
