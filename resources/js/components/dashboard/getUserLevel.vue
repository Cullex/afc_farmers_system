<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header bold">Edit Access Level</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" v-model="user.name" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" v-model="user.last_name" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="form-group">
                        <label>Edit Access Level</label>
                        <select class="form-control select2" v-model="user.accessLevel" data-toggle="select2" required>
                            <option>Select</option>
                            <option value="Admin">Administrator</option>
                            <option value="Ordinary">Ordinary User</option>
                        </select>
                        <p class="text-danger" v-text="errors.accessLevel"></p>
                    </div>
                    <div class="form-group">
                        <label>Can Edit</label>
                        <select class="form-control select2" v-model="user.canEdit" data-toggle="select2" required>
                            <option>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <p class="text-danger" v-text="errors.canEdit"></p>
                    </div>
                    <div class="form-group">
                        <button @click.prevent="updateUserLevel" class="btn btn-primary" type="submit">Update User Access Level</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            user: {},
            auth: window.user,
            errors:{}
        };
    },
    methods:{
            updateUserLevel(){
                window.Swal.fire({
                    title: 'Update Access level?',
                    text: "Are You Sure You Want To Update Access Level?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update access!'
                }).then((result) => {
                    if (result.value) {
                        window.axios.post(`/updateUserLevel/${this.user.id}`, this.user).then((response) => {
                            console.log(response);
                            this.$router.push('/')
                        }).catch((errors) => {
                        })
                        Swal.fire(
                            'Updated!',
                            'User Access Level has been updated.',
                            'success'

                        )
                    }
                })
            },
    },
    mounted() {
        window.axios.get('/getUserLevel/' + this.$route.params.id).then((response) =>{
            this.user = response.data.body.user
            console.log(response)
        }).then((errors) =>{
            this.errors = errors.response.data.errors
        });
    }
}
</script>
