@extends('dashboard.tournament.master')

@section('dash.content.view')
    @include('dashboard.tournament.list-tournament')
@endsection

@section('js.view')
    <script type="text/javascript">
        $('.delete').on('click', function () {
            if (!confirm("Deseja mesmo apagar esse dado?")) {
                return false;
            }
        });
    </script>
@endsection
