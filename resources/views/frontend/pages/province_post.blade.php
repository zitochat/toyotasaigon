<option value="0">Chọn Tỉnh/Thành</option>
@foreach($provinces as $row)
<option value="{{ $row->provinceid }}">{{ $row->name }}</option>
@endforeach