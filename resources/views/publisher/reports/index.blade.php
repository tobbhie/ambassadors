@extends('layouts.users')

@section('body')

<div class="row">
        <div class="col-md-12">
            <h2 class="text-primary">Reports</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <a href="#"
                                    class="btn btn-default btn-fill">
                                    New Report
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @if (count($reports) < 1)
                        <h3 class="text-info text-center">No report for this publication yet.</h3>
                    @else
                        <table class="table table-hover">
                            <thead id="tableHeading">
                                <th>ID</th>
                                <th>Screenshot</th>
                                <th>Date Added</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
    $('#tasks').addClass('active');
</script>
@endsection
