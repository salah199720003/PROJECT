<!-- resources/views/admin/view-reservations.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View Reservations - GYMSTER</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h1 class="mb-4">View Reservations</h1>

        <!-- Export Button -->
        <form method="post" action="{{ route('admin.export-reservations') }}" class="mb-3">
            @csrf
            <button type="submit" class="btn btn-success">Export Reservations</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->id_user }}</td>

                        <!-- Fetch user details from users table -->
                        @php
                            $user = \App\Models\User::find($reservation->id_user);
                        @endphp

                        <td>{{ $user->name ?? 'N/A' }}</td>
                        <td>{{ $user->email ?? 'N/A' }}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional, if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

