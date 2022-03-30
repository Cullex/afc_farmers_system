<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Attach Crop/Season</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" v-model="record.name"  class="form-control form-control-sm" placeholder="name" disabled>
                        <p class="text-danger" v-text="errors.name"></p>
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" v-model="record.surname"  class="form-control form-control-sm" placeholder="surname" disabled>
                        <p class="text-danger" v-text="errors.surname"></p>
                    </div>
                    <div class="form-group">
                        <label>National ID</label>
                        <input type="text" v-model="record.NationalId"  class="form-control form-control-sm" placeholder="ID #" disabled>
                        <p class="text-danger" v-text="errors.NationalId"></p>
                    </div>
                    <div class="form-group">
                        <label>Attach Season</label>
                        <select class="form-control form-control-sm"  v-model="record.season" data-toggle="select2" >
                            <option value="2021/22 Summer">2021/22 Summer</option>
                            <option value="2021/22 Winter">2021/22 Winter</option>
                            <option value="2022/23 Summer">2022/23 Summer</option>
                            <option value="2022/23 Winter">2022/23 Winter</option>
                        </select>
                        <p class="text-danger" v-text="errors.season"></p>
                    </div>
                    <div class="form-group">
                        <label>Attach Total Available Hectrage</label>
                        <input type="number" v-model="record.seasonHectrage"  class="form-control form-control-sm" placeholder="Attach Hectrage Figure">
                        <p class="text-danger" v-text="errors.seasonHectrage"></p>
                    </div>

                    <div class="form-group">
                        <label>Attach Maize</label>
                        <select class="form-control form-control-sm"  v-model="record.maize" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="maize">maize</option>
                        </select>
                        <p class="text-danger" v-text="errors.maize"></p>
                    </div>
                    <div class="form-group">
                        <label>Maize Hectrage</label>
                        <input type="number" v-model="record.maizeHectrage"  class="form-control form-control-sm" placeholder="Attach Maize Hectrage Figure">
                        <p class="text-danger" v-text="errors.maizeHectrage"></p>
                    </div>


                    <div class="form-group">
                        <label>Attach Wheat</label>
                        <select class="form-control form-control-sm"  v-model="record.wheat" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="wheat">wheat</option>
                        </select>
                        <p class="text-danger" v-text="errors.wheat"></p>
                    </div>
                    <div class="form-group">
                        <label>Wheat Hectrage</label>
                        <input type="number" v-model="record.wheatHectrage"  class="form-control form-control-sm" placeholder="Enter Wheat Hectrage Figure">
                        <p class="text-danger" v-text="errors.wheatHectrage"></p>
                    </div>
                    <div class="form-group">
                        <label>Attach Sugar Beans</label>
                        <select class="form-control form-control-sm"  v-model="record.sugarBeans" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="sugar beans">sugar beans</option>
                        </select>
                        <p class="text-danger" v-text="errors.sugar_beans"></p>
                    </div>
                    <div class="form-group">
                        <label>Sugar Beans Hectrage</label>
                        <input type="number" v-model="record.sugar_beansHectrage"  class="form-control form-control-sm" placeholder="Enter Sugar Beans Hectrage Figure">
                        <p class="text-danger" v-text="errors.sugar_beansHectrage"></p>
                    </div>
                    <div class="form-group">
                        <label>Attach Sunflower</label>
                        <select class="form-control form-control-sm"  v-model="record.sunflower" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="sunflower">sunflower</option>
                        </select>
                        <p class="text-danger" v-text="errors.sunflower"></p>
                    </div>
                    <div class="form-group">
                        <label>Sunflower Hectrage</label>
                        <input type="number" v-model="record.sunflowerHectrage"  class="form-control form-control-sm" placeholder="Enter Sunflower Hectrage Figure">
                        <p class="text-danger" v-text="errors.sunflower"></p>
                    </div>


                    <div class="form-group">
                        <label>Attach Red Sorghum</label>
                        <select class="form-control form-control-sm"  v-model="record.red_sorghum" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="sunflower">red_sorghum</option>
                        </select>
                        <p class="text-danger" v-text="errors.red_sorghum"></p>
                    </div>
                    <div class="form-group">
                        <label>Red Sorghum Hectrage</label>
                        <input type="number" v-model="record.red_sorghumHectrage"  class="form-control form-control-sm" placeholder="Enter red_sorghum Hectrage Figure">
                        <p class="text-danger" v-text="errors.red_sorghum"></p>
                    </div>



                    <div class="form-group">
                        <label>Attach White Sorghum</label>
                        <select class="form-control form-control-sm"  v-model="record.white_sorghum" data-toggle="select2" >
                            <option value="N/A">N/A</option>
                            <option value="sunflower">white_sorghum</option>
                        </select>
                        <p class="text-danger" v-text="errors.white_sorghum"></p>
                    </div>
                    <div class="form-group">
                        <label>White Sorghum Hectrage</label>
                        <input type="number" v-model="record.white_sorghumHectrage"  class="form-control form-control-sm" placeholder="Enter white_sorghum Hectrage Figure">
                        <p class="text-danger" v-text="errors.white_sorghum"></p>
                    </div>


                    <div class="form-group">
                        <button @click.prevent="attachSeasonHectrage" class="btn btn-primary" type="submit">Attach Selected Season & Hectarage</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "viewClient",
    data()
    {
        return {
            record : {},
            errors : {}
        };
    },
    methods : {
        attachSeasonHectrage() {
            window.Swal.fire({
                title: 'Attach Season & Hectrage?',
                text: "Are You Sure You Want To Attach Season & Hectrage To Client?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Attach!'
            }).then((result) => {
                if (result.value) {
                    window.axios.post(`/attachSeasonHectrage/${this.record.id}`, this.record).then((response) => {
                        console.log(response);
                    }).catch((errors) => {
                        Swal.fire(
                            'Error In Fields!',
                            'Kindly Check Your Fields',
                            'error'
                        )
                        this.errors = errors.response.data.errors
                    })
                    Swal.fire(
                        'Season & Hectrage Attached!',
                        'Season & Hectrage Have Been Attached To Client',
                        'success'

                    )
                }
            })
        },
    },
    mounted(){
        window.axios.get('/viewIndividual/' + this.$route.params.id).then((response) =>
            (this.record = response.data.body.record))
            .catch((errors) =>{
            this.errors = errors.response.data.errors
        });
    }
}
</script>

