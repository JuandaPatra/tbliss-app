@foreach ( $datas as $categori )
<tr>
  <!-- <td><strong>{{ $categori->title }}</strong></td> -->
  <td><strong>{{ str_repeat('-', $count).' '.$categori->title }}</strong></td>
  <td>{{ $categori->status }}</td>
  <td>
    <div class="dropdown">
      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('continent.edit',['continent'=>$categori]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

        <form action="{{ route('continent.destroy',['continent'=>$categori]) }}" method="P0ST">
          @csrf
          @method('DELETE')
          <a class="dropdown-item" href="{{ route('continent.destroy',['continent'=>$categori]) }}" , role="alert" alert-text="{{ $categori->title }}" onclick="this.closest('form').submit();return false;">
            <i class="bx bx-trash me-1"></i>Delete
          </a>
        </form> 
        {{--<form action="{{ route('continent.destroy',['continent'=>$categori]) }}" method="P0ST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">
          <i class="bx bx-trash me-1"></i>
        </button>
      </form>--}}
      </div>
    </div>
  </td>
  @if ($categori->descendants)
  @include('admin.continent._category-list',[
  'datas' => $categori->descendants,
  'count' => $count + 2
  ])
  @endif
</tr>
@endforeach