<table>
	<thead>
        <tr>
            <td colspan="7" style="text-align:center">Labone Senior High School Placement List</td>
        </tr>
		<tr>
			<th>S/N</th>
			<th>Index Number</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Programme</th>
			<th>Track</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key => $placement)
			<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $placement->index }}</td>
			<td>{{ $placement->name }}</td>
			<td>{{ $placement->gender->name }}</td>
			<td>{{ $placement->programme->name }}</td>
			<td>{{ $placement->track }}</td>
			<td>{{ $placement->status->name }}</td>
		</tr>
		@endforeach

	</tbody>
</table>
