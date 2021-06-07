
{{$successed ?? ''}}
{{$csv_errors ?? ''}}
<h1>ESG CODE UPDATE</h1>
<form method='post' action='{{ route('esg.currency.post') }}' enctype='multipart/form-data' >
<div class="row float-left">

{{ csrf_field() }}
<div class="col">

<input type="file" name="import_file" placeholder="File">
</div>
<div class="col">
<button type="submit" id="download_excell" class="download-btn">Submit</button>
</div>
<div class="col">
</div>

</div>
</form>
