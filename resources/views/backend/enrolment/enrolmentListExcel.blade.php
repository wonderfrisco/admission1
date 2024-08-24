<table>
	<thead>
        <tr>
            <td colspan="20" style="text-align:center"><u>Labone Senior High School</u></td>

        </tr>
        <tr>

            <td colspan="20" style="text-align:center"><u>Enrolment List</u></td>
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
		@foreach($data as $key => $student)
			<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $student->index }}</td>
			<td>{{ $student->placement->name }}</td>
			<td>{{ $student->placement->gender->name }}</td>
			<td>{{ $student->placement->programme->name }}</td>
			<td>{{ $student->placement->status->name }}</td>
			<td>{{ $student->house->name }}</td>
			<td>{{ $student->dob }}</td>
			<td>{{ $student->pob }}</td>
			<td>{{ $student->raw }}</td>
			<td>{{ $student->nationality }}</td>
			<td>{{ $student->region->name }}</td>
			<td>{{ $student->district->name }}</td>
			<td>{{ $student->bschool }}</td>
			<td>{{ $student->town }}</td>
			<td>{{ $student->code }}</td>
			<td>{{ $student->raddress }}</td>
			<td>{{ $student->religion->name }}</td>
			<td>{{ $student->disability->name }}</td>
			<td>{{ $student->medication }}</td>
			<td>{{ $student->allergy }}</td>
		</tr>
		@endforeach

	</tbody>
</table>
