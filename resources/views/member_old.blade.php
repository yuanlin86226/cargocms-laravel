@extends('layouts.master')

@section('title','套版-後台管理系統')

@section('content')
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Member Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div class="content">
                                    <button type="button" class="btn btn-wd btn-info" onclick="location.href='InsertMember'">
                                        <span class="btn-label">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                        新增會員
                                    </button>
                                </div>
                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if( count($members)==0 )
                                            <tr colspan="3"><td>目前尚無資料</td></tr>
                                        @else
                                            @foreach( $members as $index => $member)
                                            <tr>
                                                <td class="text-center">{{ $index+1 }}</td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->email }}</td>
                                                <td class="td-actions text-right">

                                                    <a href="ShowMember?id={{ $member->id }}" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-user"></i>
                                                    </a>
                                                    <a href="UpdateMember?id={{ $member->id }}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </a>      
                                                    <a class="btn btn-danger btn-simple btn-xs" onclick="del({{$member->id}})">
                                                        <i class="fa fa-times"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table>

                                <div class="fixed-table-pagination">
                                    <div style="margin: 0px 20px;">
                                        {{ $members->render() }}
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    

@stop

<script>
    function del($id){
        swal({  title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },function(isConfirm){
                if (isConfirm){
                    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    location.href='DeleteMember?id='+$id;
                    
                }else{
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>
