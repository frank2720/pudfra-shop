@props([ 'url'])
<table border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
        <a href="{{ $url }}" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">{{ $slot }}</a>
    </td>
    </tr>
</table>
