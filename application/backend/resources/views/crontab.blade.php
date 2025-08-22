SHELL=/bin/sh
PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin

@if (isset($entries))
@foreach($entries as $entry)
{{$entry}}
@endforeach
@endif
