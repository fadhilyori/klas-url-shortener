@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card z-depth-0">
            <div class="card-content">
                <div class="card-title">Tautan Pendek</div>
                <div class="divider"></div>
                <div class="row">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th>{{ __('No') }}</th>
                            {{--<th>ID</th>--}}
                            <th>{{ __('URL') }}</th>
                            <th>{{ __('Short URL') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Option') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->no }}</td>
                            {{--<td>{{ $item->id }}</td>--}}
                            <td>{{ $item->url }}</td>
                            <td>{{ $item->shorturl }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <div id="delete-modal{{ $item->no }}" class="modal">
                                    <div class="modal-content">
                                        <h4>{{ __('Are you sure?') }}</h4>
                                        <p>{{ __('This data cannot be returned after being deleted. By deleting short link data, you will also <strong> delete custom links that have the same link </strong>.') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form class="right"
                                              action="{{ route('admin.shorturl.delete', ['id' =>$item->id]) }}"
                                              method="GET">
                                            <button class="modal-close waves-effect waves-green btn-flat"
                                                    type="submit">{{ __('Sure, I understand') }}</button>
                                        </form>
                                        <a href="{{ route('admin.shorturl') }}"
                                           class="modal-close waves-effect waves-green btn-flat">{{ __('No, cancel') }}</a>
                                    </div>
                                </div>
                                <a class="waves-effect waves-light btn red modal-trigger" href="#delete-modal{{ $item->no }}"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsscript')
<script>
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>
@endsection