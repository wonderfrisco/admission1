<table>
	<thead>
        <tr>
            <td colspan="20" style="text-align:center"><u>Labone Senior High School</u></td>

        </tr>
        <tr>

            <td colspan="20" style="text-align:center"><u>Protocol Enrolment List</u></td>
        </tr>
		<tr>
			<th>S/N</th>
			<th>Index Number</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Programme</th>
			<th>Status</th>
			<th>House</th>
			<th>Date of Birth</th>
			<th>Place of Birth</th>
			<th>Raw Score</th>
			<th>Nationality</th>
			<th>Region</th>
			<th>District</th>
			<th>Basic School</th>
			<th>Home Town</th>
			<th>Enrolment Code</th>
			<th>Residential Address</th>
			<th>Religion</th>
			<th>Disability</th>
			<th>Medications</th>
			<th>Allergies</th>
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
			<td>{{ $placement->status->name }}</td>
			<td>{{ $placement->student->house->name }}</td>
			<td>{{ $placement->student->dob }}</td>
			<td>{{ $placement->student->pob }}</td>
			<td>{{ $placement->student->raw }}</td>
			<td>{{ $placement->student->nationality }}</td>
			<td>{{ $placement->student->region->name }}</td>
			<td>{{ $placement->student->district->name }}</td>
			<td>{{ $placement->student->bschool }}</td>
			<td>{{ $placement->student->town }}</td>
			<td>{{ $placement->student->code }}</td>
			<td>{{ $placement->student->raddress }}</td>
			<td>{{ $placement->student->religion->name }}</td>
			<td>{{ $placement->student->disability->name }}</td>
			<td>{{ $placement->student->medication }}</td>
			<td>{{ $placement->student->allergy }}</td>
		</tr>
		@endforeach

	</tbody>
</table>
