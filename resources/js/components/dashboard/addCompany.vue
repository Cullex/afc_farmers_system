<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Add Company Record</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" v-model="formData.companyName"  class="form-control form-control-sm" placeholder="Company Name" >
                        <p class="text-danger" v-text="errors.companyName"></p>
                    </div>
                    <div class="form-group">
                        <label>Contact Person</label>
                        <input type="text" v-model="formData.contactPerson"  class="form-control form-control-sm" placeholder="Contact Person" >
                        <p class="text-danger" v-text="errors.contactPerson"></p>
                    </div>
                    <div class="form-group">
                        <label>Date Of Incoporation</label>
                        <input type="date" v-model="formData.dob"  class="form-control form-control-sm" placeholder="Date Of Incoporation" >
                        <p class="text-danger" v-text="errors.dob"></p>
                    </div>
                    <div class="form-group">
                        <label>Reg Number</label>
                        <input type="date" v-model="formData.regNumber"  class="form-control form-control-sm" placeholder="Registration Number" >
                        <p class="text-danger" v-text="errors.regNumber"></p>
                    </div>
                    <div class="form-group">
                        <label>National ID</label>
                        <input type="text" v-model="formData.NationalId"  class="form-control form-control-sm" placeholder="ID #" >
                        <p class="text-danger" v-text="errors.NationalId"></p>
                    </div>
                    <div class="form-group">
                        <label>Mobile #</label>
                        <input type="text" v-model="formData.mobileNumber"  class="form-control form-control-sm" placeholder="mobileNumber" >
                        <p class="text-danger" v-text="errors.mobileNumber"></p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select class="form-control form-control-sm"  v-model="formData.province" data-toggle="select2" >
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
                        <select class="form-control form-control-sm"  v-model="formData.district" data-toggle="select2" >
                            <option>Select District</option>
                            <option value="Harare">Harare</option>
                            <option value="Bulawayo">Bulawayo</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Guruve">Guruve</option>
                            <option value="Mazowe">Mazowe</option>
                            <option value="Mt Darwin">Mt Darwin</option>
                            <option value="Muzarabani">Muzarabani</option>
                            <option value="Rushinga">Rushinga</option>
                            <option value="Shamva">Shamva</option>
                            <option value="Centenary">Centenary</option>
                            <option value="Chikomba">Chikomba</option>
                            <option value="Goromonzi">Goromonzi</option>
                            <option value="Hwedza">Hwedza</option>
                            <option value="Mudzi">Mudzi</option>
                            <option value="Murehwa">Murehwa</option>
                            <option value="Mutoko">Mutoko</option>
                            <option value="Seke">Seke</option>
                            <option value="Uzumba MPF">Uzumba MPF</option>
                            <option value="Hurungwe">Hurungwe</option>
                            <option value="Kadoma">Kadoma</option>
                            <option value="Kariba">Kariba</option>
                            <option value="Makonde">Makonde</option>
                            <option value="Zvimba">Zvimba</option>
                            <option value="Binga">Binga</option>
                            <option value="Bubi">Bubi</option>
                            <option value="Hwange">Hwange</option>
                            <option value="Lupane">Lupane</option>
                            <option value="Nkayi">Marondera</option>
                            <option value="Tsholotsho">Tsholotsho</option>
                            <option value="Umguza">Umguza</option>
                            <option value="Beitbridge">Beitbridge</option>
                            <option value="Bulilima">Bulilima</option>
                            <option value="Insiza">Insiza</option>
                            <option value="Matobo">Matobo</option>
                            <option value="Umzingwane">Umzingwane</option>
                            <option value="Bikita">Bikita</option>
                            <option value="Chiredzi">Chiredzi</option>
                            <option value="Chivi">Chivi</option>
                            <option value="Masvingo">Masvingo</option>
                            <option value="Mwenezi">Mwenezi</option>
                            <option value="Zaka">Zaka</option>
                            <option value="Chirumanzu">Chirumanzu</option>
                            <option value="Gokwe North">Gokwe North</option>
                            <option value="Gokwe South">Gokwe South</option>
                            <option value="Kwekwe">Kwekwe</option>
                            <option value="Mberengwa">Mberengwa</option>
                            <option value="Shurugwi">Shurugwi</option>
                            <option value="Zvishavane">Zvishavane</option>
                            <option value="Buhera">Buhera</option>
                            <option value="Chimanimani">Chimanimani</option>
                            <option value="Makoni">Makoni</option>
                            <option value="Mutare">Mutare</option>
                            <option value="Mutasa">Mutasa</option>
                            <option value="Nyanga">Nyanga</option>
                        </select>
                        <p class="text-danger" v-text="errors.district"></p>
                    </div>
                    <div class="form-group">
                        <label>Ward</label>
                        <input type="text" v-model="formData.ward"  class="form-control form-control-sm" placeholder="ward" >
                        <p class="text-danger" v-text="errors.ward"></p>
                    </div>
                    <div class="form-group">
                        <label>Farm Size</label>
                        <input type="number" v-model="formData.farmSize"  class="form-control form-control-sm" placeholder="farmSize" >
                        <p class="text-danger" v-text="errors.farmSize"></p>
                    </div>
                    <div class="form-group">
                        <label>Land Tenure Type</label>
                        <select class="form-control form-control-sm"  v-model="formData.landType" data-toggle="select2" >
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
                        <select class="form-control form-control-sm"  v-model="formData.ecoRegion" data-toggle="select2" >
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
                    <div class="form-group">
                        <button @click.prevent="addCompany" class="btn btn-primary" type="submit">Add Company Record</button>
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
                companyName: '',
                contactPerson: '',
                dob: '',
                regNumber : '',
                ecoRegion: '',
                landType : '',
                farmSize : '',
                ward : '',
                district : '',
                province : '',
                mobileNumber : '',
                NationalId : '',
                gender : ''
            },
            errors:{},
        };
    },
    methods:{
        addCompany() {
            window.Swal.fire({
                title: 'Add Company Record?',
                text: "Are You Sure You Want To Add Company Record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Add Company Record!'
            }).then((result) => {
                if (result.value) {
                    window.axios.post('addCompany', this.formData).then((response) => {
                        console.log(response);
                        this.$router.push('/')
                    }).catch((errors) => {
                        Swal.fire(
                            'Missing Fields!',
                            'You have missing fields',
                            'error'

                        )
                        this.errors = errors.response.data.errors
                    })
                    Swal.fire(
                        'Added!',
                        'Company Record has been submitted.',
                        'success'

                    )
                }
            })
        }
    }
}
</script>



