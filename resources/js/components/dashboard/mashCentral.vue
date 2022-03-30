<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Masvingo Hectrage</label>
                        <input type="text" v-model="mashCentralTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Mash Central Province Figures</h6>
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
                    <tr v-for=" mashCentralStat in  mashCentralStats" :key=" mashCentralStat.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{  mashCentralStat.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{  mashCentralStat.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{  mashCentralStat.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{  mashCentralStat.seasonHectrage }}
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
            mashCentralStats: [],
            mashCentralTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return mashCentral province figures from DB
        window.axios.get("/mashCentralStats").then((response) =>
            (this.mashCentralStats = response.data.body.mashCentralStats));

        //return mashCentral total hectrage
        window.axios.get('/mashCentralTotal').then((response) =>
            (this.mashCentralTotal = response.data.body.mashCentralTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

