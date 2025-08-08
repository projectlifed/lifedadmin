<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LIFED HEALTH - Super Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
        }
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background-color: #2563eb;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .sidebar a {
            display: block;
            padding: 12px 24px;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border-left: 4px solid transparent;
            transition: all 0.2s;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #1e40af;
            border-left: 4px solid #fff;
        }
        .main {
            margin-left: 250px;
            padding: 30px;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-icon {
            font-size: 24px;
        }
        .logout-form {
            margin-top: 30px;
            text-align: center;
        }
        .logout-form button {
            background: #dc2626;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }
        .logout-form button:hover {
            background: #b91c1c;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Super Admin</h2>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Manage HealthMates</a>
        <a href="#">Program Extensions</a>
        <a href="#">Manage Filters</a>
        <a href="#">Manage Users</a>
        <a href="#">Audit Logs</a>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <div class="main">
        <div class="topbar">
            <h1>LIFED HEALTH - Super Admin Dashboard</h1>
            <div>Welcome: <strong>{{ Auth::user()->name ?? 'superadmin' }}</strong></div>
        </div>

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
</body>
</html>
