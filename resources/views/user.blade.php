@extends('layouts.master')

@section('title','後台人員管理')

@section('content')
        <div class="content" id="panel-list">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">user Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div class="content">
                                    <button type="button" class="btn btn-wd btn-info" id="btn-create">
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
                                        <tr v-for="(user, index) in users">
                                            <td class="text-center">@{{ index+1 }}</td>
                                            <td>@{{ user.name }}</td>
                                            <td>@{{ user.email }}</td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs" v-on:click="show(user.id)">
                                                    <i class="fa fa-user"></i>
                                                </a>
                                                <a rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs" v-on:click="update(user.id)">
                                                    <i class="fa fa-edit"></i>
                                                </a>      
                                                <a rel="tooltip" title="Delete Profile" class="btn btn-danger btn-simple btn-xs" v-on:click="del(user.id)">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>   
                                    </tbody> 
                                </table>

                                <div class="fixed-table-pagination">
                                    <div style="margin: 0px 20px;">
                                        {{ $users->render() }}
                                    </div>
                                </div>

                                <div class="fixed-table-pagination">
                                    <div style="margin: 0px 20px;">
                                        <ul class="pagination">

                                            <li class="page-first">
                                                <a id="first_page">«</a>
                                            </li>
                                            <li class="page-pre">
                                                <a>‹</a>
                                            </li>


                                            <!-- <li class="page-number active">
                                                <a href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-number">
                                                <a href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-number">
                                                <a href="javascript:void(0)">3</a>
                                            </li> -->

                                            <li class="page-next">
                                                <a v-bind:href="pages.next_page_url">›</a>
                                            </li>
                                            <li class="page-last">
                                                <a id="last_page">»</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="content" id="panel-view" style="display:none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Show Profile</h4>
                            </div>
                            <div class="content">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <h5>@{{row.name}}</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <h5>@{{row.email}}</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-wd btn-default"  v-on:click="done">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Back
                                    </button>
                                    <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>

        <div class="content" id="panel-form" style="display:none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                 <h4 id="panel_form_title" class="title"></h4> 
                            </div>
                            <div class="content">
                                
                                <form method="POST" name="user_form">
                                    {{ csrf_field() }}
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" v-model="row.name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Email" v-model="row.email">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    <button type="button" class="btn btn-wd btn-default" v-on:click="cancel">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Back
                                    </button>
                                    
                                    <button id="form_submit" type="submit" class="btn btn-info btn-fill pull-right" v-on:click="createUser">Insert Profile</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>


@stop

@section('script')

<script type="text/javascript">
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    var apiUrl="http://127.0.0.1:8000/api/user";

    var panelList = new Vue({
        el: '#panel-list',
        data:{
            users:{}
        },
        mounted:function(){
            this.load();
        },
        methods: {
            load: function(e){
                _this = this;
                $.getJSON(apiUrl, function(data) {
                    _this.users = data.data;
                    _this.pages = data;
                });

                str="<li class='page-first disabled'><a id='first_page'>«</a></li>";
            },
            show: function(id){
                $('#panel-list').hide();
                $('#panel-view').show();
                $('#panel-form').hide();
                    
                panelView.load(id);
            },
            update: function(id){
                $('#panel-list').hide();
                $('#panel-view').hide();
                $('#panel-form').show();
                    
                _this = this;
                document.getElementById("panel_form_title").innerText = 'Edit Profile';
                document.getElementById("form_submit").innerText = 'Edit Profile';
                panelForm.load(id);
            },
            del: function(id){
                // console.log('我其實有點到');
                swal({
                    title: "確認刪除",
                    text: "是否確定要刪除此筆資料？",
                    type: "warning",
                    showCancelButton: true
                }, function(isConfirm) {
                    if (isConfirm) {
                        // Vue.http.delete(apiUrl + '/' + id);
                        $.ajax({
                            type: 'delete',
                            url: "api/user/"+id,
                            success: function() {
                                swal({
                                    title: "Deleted",
                                    text: '成功刪除一筆資料',
                                    type: "success"
                                }, function () {
                                    location.reload();
                                });
                            }
                        });
                    }
                });
            }
        }
    });
    
    var panelView = new Vue({
        el: '#panel-view',
        data: {
            row: {}
        },
        methods: {
            done: function(e) {
                if (e) e.preventDefault();
                $('#panel-list').show();
                $('#panel-view').hide();
                $('#panel-form').hide();
            },
            load: function(id) {
                _this = this;
                $.getJSON(apiUrl + '/' + id, function(data) {
                    _this.row = data;
                });
            },
        }
    });

    var panelForm = new Vue({
        el: '#panel-form',
        data: {
            row: {
                _token: csrf_token,
            }
        },
        methods: {
            close: function(e) {
                $('#panel-form').hide();
                $('#panel-list').show();
            },
            cancel: function(e) {
                if (e) e.preventDefault();
                this.close();
            },
            createUser: function createUser() {
                var _this = this;

                if(this._data.row.id){
                    this.updateUser(this._data.row.id);
                }else{
                    $.ajax({
                        type: 'POST',
                        url: "api/user",
                        data: this._data.row,
                        dataType: "json",
                        success: function(data) {
                            // console.log(data);
                            if(data.result){
                                swal({
                                    title: "created",
                                    text: data.message,
                                    type: "success"
                                }, function () {
                                    window.location.href = '/user';
                                });
                            }
                            else{
                                swal({
                                    title: "failed",
                                    text: data.message,
                                    type: "info"
                                });
                            }
                        }
                    });
                }
                
            },
            load: function(id){
                $.getJSON(apiUrl + '/' + id, function(data) {
                    panelForm._data.row = data;
                });
            },
            updateUser: function(id) {
                var _this = this;
                $.ajax({
                    type: 'put',
                    url: "api/user/"+id,
                    data: this._data.row,
                    dataType: "json",
                    success: function(data) {
                        if(data.result){
                            swal({
                                title: "updated",
                                text: data.message,
                                type: "success"
                            }, function () {
                                window.location.href = '/user';
                            });
                        }
                        else{
                            swal({
                                title: "failed",
                                text: data.message,
                                type: "info"
                            });
                        }
                    }
                });
            }
        }
    });

    $('#btn-create').click(function(e) {
        $('#panel-list').hide();
        $('#panel-form').show();
        document.user_form.reset();
        document.getElementById("panel_form_title").innerText = 'Insert Profile';
    });
</script>
@stop



