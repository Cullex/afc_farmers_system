<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Masvingo Hectrage</label>
                        <input type="text" v-model="matNorthTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Masvingo Province Figures</h6>
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
                    <tr v-for="matNorthStat in matNorthStats" :key="matNorthStat.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ matNorthStat.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ matNorthStat.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ matNorthStat.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ matNorthStat.seasonHectrage }}
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
            matNorthStats: [],
            matNorthTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return matNorth province figures from DB
        window.axios.get("/matNorthStats").then((response) =>
            (this.matNorthStats = response.data.body.matNorthStats));

        //return matNorth total hectrage
        window.axios.get('/matNorthTotal').then((response) =>
            (this.matNorthTotal = response.data.body.matNorthTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

