<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update Profile</h4>
                        </div>
                        <div class="content">
                            <div v-if="message != ''" class="row">
                                <div class="col-md-4 col-md-offset-4 text-center text-danger">
                                    {{message}}
                                </div>
                            </div>

                            <form method="POST" action="">
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name" v-model="user.name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email" v-model="user.email">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-wd btn-default" onclick="history.back()">
                                    <span class="btn-label">
                                        <i class="fa fa-arrow-left"></i>
                                    </span>
                                    Back
                                </button>
                                <button type="button" v-on:click="updateUser(user.id)" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
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
            var url = new URL(window.location.href);
            var id = url.searchParams.get("id");
            this.getUser(id);
        },
        data () {
            return {
                user: {},
                message: ""
            }
        },
        methods: {
            getUser(id) {
                var _this = this;
                $.ajax({
                    url: `/api/user/${id}`,
                    success: (response) => {
                        _this.user = response;
                    }
                });
            },
            updateUser(id) {
                var _this = this;
                $.ajax({
                    type: 'POST',
                    url: `/api/user/${id}`,
                    data: this.user,
                    success: (response) => {
                        _this.user = response;
                        _this.message = "更新成功";
                    }
                });
            }
        }
    }
</script>
