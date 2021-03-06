@extends('admin.layout')
@section('main-content')
    @if(!empty($batches))
    <table class="striped centered">
        <thead>
        <tr>
            <th>Commence date</th>
            <th>Batch strength</th>
            <th>Days</th>
            <th>Timings</th>
        </tr>
        </thead>
            @foreach($batches as $batch)
                <tbody>
                    <tr>
                        <td>{{$batch->commence_date}}</td>
                        <td>{{$batch->no_of_seats}}</td>
                        <td>{{$batch->days}}</td>
                        <td>{{$batch->timings}}</td>
                        <td>
                            <a href="{{route('batch.update', ['batch' => $batch->id])}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="material-icons green-text text-lighten-2">mode_edit</i></a>
                        </td>
                        <td>
                            <form action="{{route('batch.delete', ['batch'=> $batch->id])}}" method="post">{{csrf_field()}}</form>
                            <a href="#" class="tooltipped delete-batch-button" data-position="bottom" data-delay="50" data-tooltip="Remove"><i class="material-icons red-text text-lighten-2">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
    </table>
    @else
        <div class="card-panel"><span class="red-text text-lighten-1">You have not added any courses added yet.</span></div>
    @endif
    <div id="confirm-delete-modal" class="modal">
        <div class="modal-content">
            <h5>Warning!</h5>
            <p>Delete this batch? This cannot be undone!</p>
        </div>
        <div class="modal-footer">
            <a href="#!" id="confirm-delete-button" class="modal-action modal-close waves-effect white-text red lighten-2 btn-flat">Delete</a>
            &nbsp;&nbsp;
            <a href="#!" id="cancel-button" class="modal-action modal-close waves-effect btn-flat">Cancel</a>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function(){
            $('.modal').modal({dismissible: false});
            $('.delete-batch-button').click(function() {
                var btn = $(this);
                $('#confirm-delete-modal').modal('open');
                $('#confirm-delete-button').click(function(){
                    btn.siblings('form').submit();
                });
                $('#cancel-button').click(function(){
                    $('#confirm-delete-modal').modal('close');
                });
            });
        });
    </script>
@endsection