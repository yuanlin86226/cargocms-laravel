<template>
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

                                    <tr colspan="3" v-if="users.length == 0" ><td>目前尚無資料</td></tr>
                                    
                                    <tr v-for="(user, index) in users" :key="user.id">
                                        <td class="text-center">{{ index+1 }}</td>
                                        <td>{{ user.name }}</td>
                                        <td>{{ user.email }}</td>
                                        <td class="td-actions text-right">

                                            <a  rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <a  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>      
                                            <a class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </a>

                                        </td>
                                    </tr>                                    
                                </tbody>
                            </table>
                            <vue-pagination  v-bind:pagination="pagination"
                                            v-on:click.native="getUsers(pagination.current_page)"
                                            :offset="4">
                            </vue-pagination>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</template>

<script>


    export default {
        mounted() {
            this.getUsers(this.pagination.current_page);
        },
        data () {
            return {
                users: [],
                counter: 0,
                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4,
            }
        },
        methods: {
            getUsers(page) {
                var _this = this;
                $.ajax({
                    url: '/api/user?page='+page,
                    success: (response) => {
                        _this.users = response.data;
                        _this.pagination = response;
                    }
                });
            }
        }
    }
</script>
