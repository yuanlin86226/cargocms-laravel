@extends('layouts.master')

@section('title','後台人員管理')
@section('page_title','後台選單管理')

@section('content')

@php ($REST_API = '/api/admin/user/')
        <div class="content" id="panel-list">
            <div class="container-fluid">

            <ol id="breadcrumb" class="breadcrumb" v-cloak>
                <!-- <li v-if="">頂層</li> -->
                <li v-if=""><a href="/admin/SystemMenu">頂層</a></li>
                <!-- <li v-if=""><a href="/admin/SystemMenu">頂層</a></li>
                <li v-if="" class="active"></li> -->
            </ol>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">

                                <div class="toolbar">
                                    <button id="btn-create" class="btn btn-default" type="button" title="新增一篇文章">
                                        <i class="glyphicon fa fa-plus"></i>
                                        新增
                                    </button>
                                    &nbsp;
                                    <button id="btn-remove" class="btn btn-default" type="button" title="批次刪除文章">
                                        <i class="glyphicon fa fa-remove"></i>
                                        刪除
                                    </button>
                                    &nbsp;
                                </div>
                                
                                <table id="bootstrap-table" class="table" data-toggle="table" data-url="{{$REST_API}}" data-click-to-select="ture">
                                    <thead>
                                        <th data-field="state" data-width="50" data-checkbox="true"></th>
                                        <th data-field="id" data-width="50" data-visible="false" class="text-center">ID</th>
                                        <th data-field="" data-sortable="true">圖示</th>
                                        <th data-field="" data-visible="true">標題</th>
                                        <th data-field="" data-sortable="true">位址</th>
                                        <th data-field="" data-visible="false">建立日期</th>
                                        <th data-field="" data-visible="false">建立日期</th>
                                        <th data-field="actions" data-width="200" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">操作</th>
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
                                <h4 class="title">檢視</h4>
                            </div>
                            <div class="content">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">名稱</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"></p>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">位址</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"></p>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">建立日期</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"></p>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">更新日期</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"></p>
                                        </div>
                                    </div>
                                </fieldset>

                                <button type="button" class="btn btn-fill btn-info"  v-on:click="done">返回</button>
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
                                <legend v-if="type==='update'">修改 選單</legend>
                                <legend v-if="type==='create'">新增 選單</legend>
                            </div>
                            <div class="content">
                                
                                <form method="POST" name="user_form">
                                    {{ csrf_field() }}
                                
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>預覽</label>
                                                 <button type="button" class="btn btn-wd btn-default">
                                                    <span class="btn-label">
                                                        <i :class="row.icon" style="font-size:28px"></i>
                                                    </span>
                                                   
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>圖示</label>
                                                <select v-model="row.icon" class="form-control">
                                                    <option disabled value="">請選擇圖示</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>名稱</label>
                                                <input type="text" class="form-control" v-model="row.title">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>位址</label>
                                                <input type="text" class="form-control" v-model="row.href">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>上層選單</label>
                                                <input type="text" class="form-control" v-model="row.parent">
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
        'click .open': function (e, value, row, index) {
            location.href='/admin/SystemMenu?parent='+row.id;
        },
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
            '<a rel="tooltip" title="開啟" class="btn btn-simple btn-info btn-icon table-action open" href="javascript:void(0)">',
                '<i class="fa fa-folder-open-o"></i>',
            '</a>',
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



