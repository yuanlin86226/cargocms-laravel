<template>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Insert Profile</h4>
                            </div>
                            <div class="content">
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
                                    <button type="button" v-on:click="createUser()" class="btn btn-info btn-fill pull-right">Update Profile</button>
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

        },
        data () {
            return {
                user: {
                }
            }
        },
        methods: {
            createUser() {
                var _this = this;
                $.ajax({
                    type: 'POST',
                    url: `/api/user`,
                    data: this.user,
                    success: (response) => {

                        swal({ 
                            title: "created",
                            text: "使用者已新增",
                            type: "info" 
                        }, function(){
                            window.location.href = '/member';
                        });
                    }
                });
            }
        }
    }
</script>
