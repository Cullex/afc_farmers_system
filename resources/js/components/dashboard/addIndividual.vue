<template>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Add Record</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name/Company Name</label>
                        <input type="text" v-model="formData.name"  class="form-control form-control-sm" placeholder=" full name" >
                        <p class="text-danger" v-text="errors.name"></p>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth/Date of Incorporation</label>
                        <input type="date" v-model="formData.dob"  class="form-control form-control-sm" placeholder="Date Of Birth/Date of Incorporation" >
                        <p class="text-danger" v-text="errors.dob"></p>
                    </div>
                    <div class="form-group">
                        <label>Gender(Skip If Inapplicable)</label>
                        <select class="form-control form-control-sm"  v-model="formData.gender" data-toggle="select2" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <p class="text-danger" v-text="errors.gender"></p>
                    </div>
                    <div class="form-group">
                        <label>National ID/Company Registration Number</label>
                        <input type="text" v-model="formData.NationalId"  class="form-control form-control-sm" placeholder="ID #" >
                        <p class="text-danger" v-text="errors.NationalId"></p>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="number" v-model="formData.mobileNumber"  class="form-control form-control-sm" placeholder="mobileNumber" >
                        <p class="text-danger" v-text="errors.mobileNumber"></p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select class="form-control form-control-sm"  v-model="formData.province" data-toggle="select2" >
                            <option value="Masvingo-08">Masvingo</option>
                            <option value="Harare-01">Harare</option>
                            <option value="Bulawayo-02">Bulawayo</option>
                            <option value="Mashonaland East-04">Mashonaland East</option>
                            <option value="Midlands-09">Midlands</option>
                            <option value="Mashonaland Central-03">Mashonaland Central</option>
                            <option value="Mashonaland West-05">Mashonaland West</option>
                            <option value="Manicaland-10">Manicaland</option>
                            <option value="Matebeleland South-07">Matebeleland South</option>
                            <option value="Matebeleland North-06">Matebeleland North</option>
                            <option value="Manicaland-10">Manicaland</option>
                        </select>
                        <p class="text-danger" v-text="errors.province"></p>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select class="form-control form-control-sm"  v-model="formData.district" data-toggle="select2" >
                            <option value="Harare">Harare</option>
                            <option value="Bulawayo">Bulawayo</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Guruve">Guruve</option>
                            <option value="Mazowe">Mazowe</option>
                            <option value="Mt Darwin">Mt Darwin</option>
                            <option value="Muzarabani">Muzarabani</option>
                            <option value="Gutu">Gutu</option>
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
                            <option value="I">I</option>
                            <option value="2A">2A</option>
                            <option value="2B">2B</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p class="text-danger" v-text="errors.ecoRegion"></p>
                    </div>
                    <div class="form-group">
                        <button @click.prevent="addIndividual" class="btn btn-primary" type="submit">Add Individual Record</button>
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
                name: '',
                surname: '',
                dob: '',
                ecoRegion: '',
                landType : '',
                farmSize : '',
                ward : '',
                district : '',
                province : '',
                mobileNumber : '',
                NationalId : '',
                gender : '',
                season : '',
            },
            errors:{},
        };
    },
    methods:{
        addIndividual() {
            window.Swal.fire({
                title: 'Add Individual Record?',
                text: "Are You Sure You Want To Add Individual Record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Add Individual Record!'
            }).then((result) => {
                if (result.value) {
                    window.axios.post('addIndividual', this.formData).then((response) => {
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
                        'Individual Record has been submitted.',
                        'success'

                    )
                }
            })
        }
    }
}
</script>


