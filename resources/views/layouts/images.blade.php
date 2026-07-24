<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Alt</th>
            <th>Active</th>
            <th>Date</th>
            <th class="text-end">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data->images as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>
                    <a href="#"><img src="{{asset('storage/products/small/'.$cat->url)}}" class="img-fluid border" width="25%"></a>
                </td>
                <td class="input-group-sm">
                    <input type="text" id="alt{{$cat->id}}" name="alt" value="{{$cat->alt}}" class="form-control" readonly>
                </td>
                <td>
                    @if($cat->active)
                        <span id="activebadge{{$cat->id}}" class="badge bg-success">YES</span>
                    @else
                        <span id="activebadge{{$cat->id}}" class="badge bg-danger">NO</span>
                    @endif
                    <select name="active" class="form-control" style="display: none;" id="{{'active'.$cat->id}}">
                        <option value="1" @if($cat->active == '1') selected @endif >Yes</option>
                        <option value="0" @if($cat->active == '0') selected @endif>No</option>
                    </select>
                </td>
                <td>
                    <input type="date" name="publish_at" class="form-control" value="{{\Carbon\Carbon::parse($cat->publish_at)->toDateString()}}" id="order_at{{$cat->id}}" readonly>
                </td>
                <td class="text-end">
                    <div class="d-inline-flex">
                        <a id="liedit{{$cat->id}}" class="pull-right btn btn-flat-primary btn-icon" href="#" onclick="event.preventDefault();  $('#alt{{$cat->id}}').removeAttr('readonly');$('#order_at{{$cat->id}}').removeAttr('readonly'); $('#active{{$cat->id}}').show(); $('#activebadge{{$cat->id}}').hide(); $('#licancel{{$cat->id}}').show(); $('#lisave{{$cat->id}}').show(); $('#liedit{{$cat->id}}').hide(); " title="Edit" >
                                <i class="ph ph-pencil"></i>
                        </a>
                        <a id="licancel{{$cat->id}}" style="display: none;" class="pull-right btn btn-flat-primary btn-icon" href="#" onclick="event.preventDefault();  $('#alt{{$cat->id}}').prop('readonly', true); $('#alt{{$cat->id}}').val('{{$cat->alt}}');$('#order_at{{$cat->id}}').prop('readonly', true); $('#order_at{{$cat->id}}').val('{{\Carbon\Carbon::parse($cat->publish_at)->toDateString()}}');  $('#active{{$cat->id}}').hide(); $('#activebadge{{$cat->id}}').show(); $('#licancel{{$cat->id}}').hide(); $('#lisave{{$cat->id}}').hide(); $('#liedit{{$cat->id}}').show(); " title="Cancel Edit" >
                                <i class="ph ph-x-square"></i>
                        </a>
                        <a id="lisave{{$cat->id}}" class="btn btn-flat-primary btn-icon" style="display: none;" href="#" title="Save" onclick="event.preventDefault(); updateImage({{$cat->id}});" >
                                <i class="ph ph-floppy-disk"></i>
                        </a>
                        <a class="pull-right btn btn-flat-primary btn-icon" href="#" onclick="event.preventDefault(); deleteImage('{{ route('deleteProductImage',$cat->id) }}',{{$cat->id}});" title="Delete" >
                                <i class="ph ph-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>