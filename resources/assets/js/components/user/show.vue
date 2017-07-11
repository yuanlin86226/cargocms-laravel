<template>
    <div class="content">
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
                                            <h5>{{ user.name }}</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <h5>{{ user.email }}</h5>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-wd btn-default" onclick="history.back()">
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
                user: {}
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
            }
        }
    }
</script>
