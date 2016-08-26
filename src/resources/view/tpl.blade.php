<?php
$cdn = config('tinymce.cdn');
$baseUrl = config('tinymce.baseUrl');
?>

<script type="text/javascript" src="{{ $cdn() }}"></script>
<script type="text/javascript">

	@if($baseUrl != null)
		tinymce.baseUrl = "{{ $baseUrl() }}";
	@endif

	@if(isset($els))
		@foreach($els as $el)
			tinymce.init(
				{!! json_encode(config('tinymce.'.$el)) !!}
			);
		@endforeach
	@else
		tinymce.init(
			{!! json_encode(config('tinymce.default')) !!}
		);
	@endif
	
 </script>
