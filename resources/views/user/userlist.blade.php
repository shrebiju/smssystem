@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class=""> Registration List</h4>
   </div>
   <div class="card-body">
    <div class="box-body px-4">
            <div class="dataTables_wrapper dt-bootstrap4">
                <table id="example1" class="table table-bordered table-hover role-table">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody id="tablebody">
                    @foreach($user as $index=>$userlist)
                                <tr class="gradeX" id="">
                                    <td class="index">
                                        {{ ++$index }}
                                    </td>
                                    <td class="title">
                                        {{ $userlist->name }}
                                    </td>
                                    <td class="attachment">
                                        {{ $userlist->email }}
                                    </td>
                                </a>
                                </td> 
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </div>
    </div>
</div>
@endsection