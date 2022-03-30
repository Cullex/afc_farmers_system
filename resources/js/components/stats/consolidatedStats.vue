<template>
    <div class="col-lg-12">
        <div style="height: 650px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>

                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Crop & Season Stats</h6>
            </div>
            <div class="table-responsive font-12">
                <table class="table table-centered">
                    <thead class="thead-light">
                    <tr>
                        <th />
                        <th />
                        <th>#</th>
                        <th>Crop</th>
                        <th>Season</th>
                        <th>Total</th>
                        <th />
                        <th />
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="maizeTotalRecord in maizeTotalRecords" :key="maizeTotalRecord.id">

                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ maizeTotalRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ maizeTotalRecord.crop1 }}
                        </td>
                        <td>
                        <span class="badge badge-light p-2">
                            {{ maizeTotalRecord.season}}
                        </span>
                        </td>

                        <td>
                            <input size="1" type="text" v-model= "maizeSeasonTotal"  class="form-control form-control-sm" disabled>
                        </td>
                    </tr>





                    <tr v-for="wheatTotalRecord in wheatTotalRecords" :key="wheatTotalRecord.id">

                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ wheatTotalRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ wheatTotalRecord.crop2 }}
                        </td>
                        <td>
                        <span class="badge badge-light p-2">
                            {{ wheatTotalRecord.season}}
                        </span>
                        </td>

                        <td>
                            <input size="1" type="text" v-model= "wheatSeasonTotal"  class="form-control form-control-sm" disabled>
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
            maizeTotalRecords: [],
            wheatTotalRecords: [],
            maizeSeasonTotal : {},
            wheatSeasonTotal: {},
            auth: window.user,
        };
    },
    mounted() {
        window.axios.get("/maizeTotalRecords").then((response) =>
            (this.maizeTotalRecords = response.data.body.maizeTotalRecords));

        //return total hectrage maize
        window.axios.get("/maizeSeasonTotal").then((response) =>
            (this.maizeSeasonTotal = response.data.body.maizeSeasonTotal));

        ///wheat records
        window.axios.get("/wheatTotalRecords").then((response) =>
            (this.wheatTotalRecords = response.data.body.wheatTotalRecords));

        //wheat season total
        window.axios.get("/wheatSeasonTotal").then((response) =>
            (this.wheatSeasonTotal = response.data.body.wheatSeasonTotal)  );
    },
};
</script>

