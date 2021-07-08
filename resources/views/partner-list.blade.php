@extends('layouts.public')

@section('content')

<div class="container">
    <div class="row">

        <div class="mx-auto">
            <h1 class="companiespage-header text-center">Λίστα Συνεργατών</h1>
            @if (count($companies) > 0)
                <div class="row">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Κατηγορία</th>
                                <th>Τίτλος</th>
                                <th>Υπεύθυνος</th>
                                <th>Λογότυπο</th>
                            </tr>
                        </thead>
                        @foreach ($companies as $company)
                            <tbody>
                                <tr>
                                    <td>
                                        @if (!empty($company->category))
                                            {{ $company->category->title }}
                                        @else None
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($company->title, 10) }}</td>
                                    <td>{{ $company->manager }}</td>
                                    <td><img width="150px" height="150px"
                                            src="{{ $company->image/*asset('images/companies/' . $company->image)*/ }}"
                                            alt="{{ $company->title }}">
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>Κατηγορία</th>
                                <th>Τίτλος</th>
                                <th>Υπεύθυνος</th>
                                <th>Λογότυπο</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $companies->links() }}
                    </div>
                </div>
                <br>
            @else
                <div class="d-flex justify-content-center noresults">
                    <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
