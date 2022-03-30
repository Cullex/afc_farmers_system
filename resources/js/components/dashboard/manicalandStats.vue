<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Manicalands Hectrage</label>
                        <input type="text" v-model="manicalandTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Manicaland Province Figures</h6>
            </div>
            <div class="table-responsive font-12">
                <table class="table table-centered">
                    <thead class="thead-light">
                    <tr>
                        <th />
                        <th />
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Province</th>
                        <th>Hectrage</th>
                        <th />
                        <th />
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="manicalandRecord in manicalandRecords" :key="manicalandRecord.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ manicalandRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ manicalandRecord.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ manicalandRecord.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ manicalandRecord.seasonHectrage }}
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</template>
<script>
export default {
    data() {
        return {
            manicalandRecords: [],
            manicalandTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return manicaland province figures from DB
        window.axios.get("/getManicalandStats").then((response) =>
            (this.manicalandRecords = response.data.body.manicalandRecords));

        //return manicaland total hectrage
        window.axios.get('/manicalandTotal').then((response) =>
            (this.manicalandTotal = response.data.body.manicalandTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

