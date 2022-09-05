<x-dashboard>
    <div class="tableMs tableMt">
        <table class="table border-2 border-dark border">
            <thead class="">
              <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Locality</th>
                <th scope="col">Age</th>
                <th scope="col">Nationality</th>
                <th scope="col">Birthday</th>
                <th scope="col">Languages</th>
                <th scope="col">Rule</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($developers as $developer)
                    <tr>
                        <td>{{ $developer->name }} {{ $developer->surname }}</td>
                        <td>{{ $developer->basic->locality }}</td>
                        <td>{{ $developer->basic->age }}</td>
                        <td>{{ $developer->basic->nationality }}</td>
                        <td>{{ $developer->basic->birthday }}</td>
                        <td>{{ $developer->basic->languages }}</td>
                        <td>{{ $developer->basic->rule }}</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</x-dashboard>
