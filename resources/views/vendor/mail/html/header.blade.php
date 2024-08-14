@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Maanar')
<img src="https://maanar-shop.xyz/build/assets/pudfra-0cc62e87.jpg" class="logo" alt="Maanar Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
