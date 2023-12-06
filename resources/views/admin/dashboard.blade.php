<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard - GYMSTER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">
    </header>

    <main class="container mt-4">
        <h1 class="mb-4">Admin Tools</h1>

        <div>
            <table class="table" border="1">
                <tr>
                    <th>Registered Users Count</th>
                    <td>{{ $registeredUsersCount }}</td>
                </tr>
                <tr>
                    <th>Reservations Count</th>
                    <td>{{ $reservationsCount }}</td>
                </tr>
            </table>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">Click below to manage users.</p>
                        <a href="{{ route('admin.manage-users') }}" class="btn btn-primary">Go to Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Reservations</h5>
                        <p class="card-text">Click below to view reservations.</p>
                        <a href="{{ route('admin.view-reservations') }}" class="btn btn-primary">View Reservations</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
