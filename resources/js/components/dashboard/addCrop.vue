<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Add Crops</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Season</label>
                        <select class="form-control form-control-sm"  v-model="formData.season" data-toggle="select2" >
                            <option>Select Province</option>
                            <option value="Maize">Maize</option>
                            <option value="Wheat">Wheat</option>
                            <option value="Soyabeans">Soyabeans</option>
                            <option value="White Sorghum">White Sorghum</option>
                            <option value="Wheat">Wheat</option>


                        </select>
                        <p class="text-danger" v-text="errors.season"></p>
                    </div>
                    <div class="form-group">
                        <button @click.prevent="addSeason" class="btn btn-primary" type="submit">Add Season</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data () {
        return {
            formData: {
                season: '',
            },
            errors:{},
        };
    },
    methods:{
        addSeason() {
            window.Swal.fire({
                title: 'Add Individual Season?',
                text: "Are You Sure You Want To Add Season?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Add Season!'
            }).then((result) => {
                if (result.value) {
                    window.axios.post('addSeason', this.formData).then((response) => {
                        console.log(response);
                        this.$router.push('/')
                    }).catch((errors) => {
                        Swal.fire(
                            'Error In Fields!',
                            'Kindly Check Your Fields',
                            'error'

                        )
                        this.errors = errors.response.data.errors
                    })
                    Swal.fire(
                        'Added!',
                        'Season Has Been Added',
                        'success'

                    )
                }
            })
        }
    }
}
</script>



