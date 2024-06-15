@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Maanar')
<img src="https://maanar-shop.xyz/build/assets/logo-ed49ad7b.png" class="logo" alt="Maanar Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
