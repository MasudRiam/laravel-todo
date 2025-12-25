<div>
    <h1>Database Settings</h1>

    <h2>All customers</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totalCustomer as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->Name }}</td>
                    <td>{{ $customer->Age }}</td>
                    <td>{{ $customer->Marks}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
