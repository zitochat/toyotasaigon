<option value="0">Chọn Quận/Huyện</option>
@foreach($districts as $row)
<option value="{{ $row->districtid }}">{{ $row->name }}</option>
@endforeach