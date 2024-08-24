@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://i.ibb.co/GpJZ3WJ/email-logo.png" class="logo" alt="Labone Admission">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
