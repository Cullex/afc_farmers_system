<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Update Individual Record</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" v-model="record.name"  class="form-control form-control-sm" placeholder="name" >
                        <p class="text-danger" v-text="errors.name"></p>
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" v-model="record.surname"  class="form-control form-control-sm" placeholder="surname" >
                        <p class="text-danger" v-text="errors.surname"></p>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" v-model="record.dob"  class="form-control form-control-sm" placeholder="Date Of Birth" >
                        <p class="text-danger" v-text="errors.dob"></p>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control form-control-sm"  v-model="record.gender" data-toggle="select2" >
                            <option>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <p class="text-danger" v-text="errors.gender"></p>
                    </div>
                    <div class="form-group">
                        <label>National ID</label>
                        <input type="text" v-model="record.NationalId"  class="form-control form-control-sm" placeholder="ID #" >
                        <p class="text-danger" v-text="errors.NationalId"></p>
                    </div>
                    <div class="form-group">
                        <label>Mobile #</label>
                        <input type="text" v-model="record.mobileNumber"  class="form-control form-control-sm" placeholder="mobileNumber" >
                        <p class="text-danger" v-text="errors.mobileNumber"></p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select class="form-control form-control-sm"  v-model="record.province" data-toggle="select2" >
                            <option>Select Province</option>
                            <option value="Masvingo">Masvingo</option>
                            <option value="Harare">Harare</option>
                            <option value="Bulawayo">Bulawayo</option>
                            <option value="Mashonaland East">Mashonaland East</option>
                            <option value="Mashonaland West">Mashonaland West</option>
                            <option value="Manicaland">Manicaland</option>
                            <option value="Matebeleland South">Matebeleland South</option>
                            <option value="Matebeleland North">Matebeleland North</option>
                        </select>
                        <p class="text-danger" v-text="errors.province"></p>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" v-model="record.district"  class="form-control form-control-sm" placeholder="district" >
                        <p class="text-danger" v-text="errors.district"></p>
                    </div>
                    <div class="form-group">
                        <label>Ward</label>
                        <input type="text" v-model="record.ward"  class="form-control form-control-sm" placeholder="ward" >
                        <p class="text-danger" v-text="errors.ward"></p>
                    </div>
                    <div class="form-group">
                        <label>Farm Size</label>
                        <input type="number" v-model="record.farmSize"  class="form-control form-control-sm" placeholder="farmSize" >
                        <p class="text-danger" v-text="errors.farmSize"></p>
                    </div>
                    <div class="form-group">
                        <label>Land Tenure Type</label>
                        <select class="form-control form-control-sm"  v-model="record.landType" data-toggle="select2" >
                            <option>Select Land Tenure Type</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Communal">Communal</option>
                            <option value="Resettlement">Resettlement</option>
                        </select>
                        <p class="text-danger" v-text="errors.landType"></p>
                    </div>
                    <div class="form-group">
                        <label>Natural Ecological Region</label>
                        <select class="form-control form-control-sm"  v-model="record.ecoRegion" data-toggle="select2" >
                            <option>Select Natural Ecological Region</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select>
                        <p class="text-danger" v-text="errors.ecoRegion"></p>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button @click.prevent="updateIndividual" :class="['btn btn-primary px-4']" type="submit">Update Individual Record</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "viewIndividual",
    data()
    {
        return {
            record : {},
            errors : {}
        };
    },
    methods : {
        updateIndividual() {
            window.Swal.fire({
                title: 'Edit Record?',
                text: "Are You Sure You Want To Edit Record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, edit record!'
            }).then((result) => {
                if (result.value) {
                    window.axios.post(`/updateIndividual/${this.record.id}`, this.record).then((response) => {
                        console.log("record updated");
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
                        'Updated!',
                        'Your record has been updated.',
                        'success'

                    )
                }
            })
        },
    },
    mounted(){
        window.axios.get('/viewIndividual/' + this.$route.params.id).then((response) =>(
            this.record = response.data.body.record
        )).catch((errors) =>{
            this.errors = errors.response.data.errors
        });
    }
}
</script>

