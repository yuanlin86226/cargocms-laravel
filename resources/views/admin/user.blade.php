@extends('layouts.master')

@section('title','後台人員管理')

@section('content')

@php ($REST_API = '/api/admin/user/')
        <div class="content" id="panel-list">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <div class="toolbar">
                                    <button type="button" class="btn btn-wd btn-info" id="btn-create">
                                        <span class="btn-label">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                        新增會員
                                    </button>
                                </div>
                                
                                <table id="bootstrap-table" class="table" data-toggle="table" data-url="{{$REST_API}}" data-click-to-select="ture">
                                    <thead>
                                        <th data-field="state" data-width="50" data-checkbox="true"></th>
                                        <th data-field="id" data-width="50" data-visible="false" class="text-center">ID</th>
                                        <th data-field="name" data-sortable="true">Name</th>
                                        <th data-field="email" data-visible="true">email</th>
                                        <th data-field="actions" data-width="150" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">操作</th>
                                    </thead>
                                    <tbody id="table-body"></tbody>
                                </table>

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
                                <legend v-if="type==='update'">修改 使用者</legend>
                                <legend v-if="type==='create'">新增 使用者</legend>

                            </div>
                            <div class="content">
                                
                                <form method="POST" name="user_form">
                                    {{ csrf_field() }}
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>帳號名稱</label>
                                                <input type="text" class="form-control" placeholder="帳號名稱" v-model="row.username">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>密碼</label>
                                                <input type="text" class="form-control" placeholder="密碼" v-model="row.password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>確認密碼</label>
                                                <input type="text" class="form-control" placeholder="確認密碼" v-model="row.password2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>姓名</label>
                                                <input type="text" class="form-control" placeholder="姓名" v-model="row.name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>EMAIL</label>
                                                <input type="text" class="form-control" placeholder="user@example.com" v-model="row.email">
                                                <div class="checkbox">
                                                    <label>
                                                        <input data-toggle="checkbox" v-model="row.emailConfirmed">
                                                        已確認
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>手機號碼</label>
                                                <input type="text" class="form-control" placeholder="行動電話門號" v-model="row.cellphone">
                                                <div class="checkbox">
                                                    <label>
                                                        <input data-toggle="checkbox" v-model="row.phoneNumberConfirmed">
                                                        已確認
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>系統備註</label>
                                                <textarea class="form-control" v-model="row.remark" rows="3" placeholder="網站管理員註記用"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>權限角色</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input data-toggle="checkbox" v-model="row.roles">
                                                        系統管理（Admin）
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                    
                                <button id="form_submit" type="submit" class="btn btn-info btn-fill pull-right" v-on:click="save">更新</button>
                                <button type="submit" class="btn btn-default" v-on:click="cancel">取消</button>
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

    var __REST_API_URL__ = '{{$REST_API}}';
    
    var panelView = new Vue({
        el: '#panel-view',
        data: {
            row: {
                title: "Undefined"
            }
        },
        methods: {
            done: function(e) {
                if (e) e.preventDefault();
                $('#panel-view').hide();
                $('#panel-list').show();
            },
            load: function(id) {
                _this = this;
                Vue.http.get(__REST_API_URL__ + id).then(function(response) {
                    _this.row = response.body;
                    Vue.http.get(__REST_API_URL__ + id + '/roles').then(function(response) {
                        _this.row.roles = response.body;
                    });
                });
            }
        }
    });

    var panelForm = new Vue({
        el: '#panel-form',
        data: {
            type: 'create',
            row: {
                _token: csrf_token,
            }
        },
        methods: {
            close: function(e) {
                $('#panel-form').hide();
                $('#panel-list').show();

                $table.bootstrapTable('refresh');
            },
            save: function(e) {
                if (e) e.preventDefault();

                _this = this;
                
                this.$validator.validateAll().then(function() {

                    var cb_success = function(response) {
                        notifyAfterHttpSuccess(response.body);
                        if (response.body.result) {
                            _this.close();
                        }
                    };

                    if (_this.type == 'update') {
                        Vue.http.put(__REST_API_URL__ + _this.row.id, _this.row).then(cb_success, notifyAfterHttpError);
                    }
                    else {
                        Vue.http.post(__REST_API_URL__, _this.row).then(cb_success, notifyAfterHttpError);
                    }

                }).catch(function() {
                    $('.form-control.error').first().focus();
                });
            },
            cancel: function(e) {
                if (e) e.preventDefault();
                this.close();
            },
            load: function(id) {
                _this = this;
                _this.type = id?'update':'create';

                _this.row = {};
                _this.errors.clear();

                Vue.http.get(__REST_API_URL__ + (id || 'new')).then(function(response) {
                    _this.row = response.body;

                    if (id) {
                        Vue.http.get(__REST_API_URL__ + id + '/roles').then(function(response) {
                            _this.row.roles = response.body;
                        });
                    }
                    else {
                        _this.row.roles = []
                    }
                });
            }
        }
    });

    $('#btn-create').click(function(e) {
        $('#panel-list').hide();
        $('#panel-form').show();
        panelForm.load();
    });



    window.operateEvents = {
        'click .view': function (e, value, row, index) {
            $('#panel-list').hide();
            $('#panel-view').show();
            panelView.load(row.id);
        },
        'click .edit': function (e, value, row, index) {
            $('#panel-list').hide();
            $('#panel-form').show();
            panelForm.load(row.id);
        },
        'click .remove': function (e, value, row, index) {
            swal({title: "確認刪除",
                text: "是否確定要刪除此筆資料？",
                type: "warning",
                showCancelButton: true
            }, function(isConfirm) {
                if (isConfirm) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
                    Vue.http.delete(__REST_API_URL__ + row.id).then(function(response) {
                        notifyAfterHttpSuccess(response.body);
                    }, function() {
                        notifyAfterHttpError();
                    });
                }
            });
        }
    };
    var initDataTable = function($table) {
        $table.bootstrapTable({
            toolbar: ".toolbar",
            striped: true,
            sortOrder: 'desc',
            sortName: 'updatedAt',
            clickToSelect: true,
            showRefresh: true,
            search: true,
            showToggle: false,
            showColumns: true,
            pagination: true,
            searchAlign: 'right',
            pageSize: 8,
            clickToSelect: false,
            pageList: [8, 10, 25, 50, 100],
            formatShowingRows: function(pageFrom, pageTo, totalRows){
                return "共 " + totalRows + " 筆 ";
            },
            formatRecordsPerPage: function(pageNumber){
                return "每頁顯示 " + pageNumber + " 筆資料";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });
        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });
    };

    var $table = $('#bootstrap-table');
    
    initDataTable($table);

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="檢視" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                '<i class="fa fa-file-text-o"></i>',
            '</a>',
            '<a rel="tooltip" title="修改" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="移除" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                '<i class="fa fa-remove"></i>',
            '</a>'
        ].join('');
    }


</script>
@stop



