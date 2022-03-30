<template>
    <page-index url="/getIndividualRecords" prefix="records" name="Registered Clients List">
        <template slot="actions">
            <a v-if="" target="_blank" href="/downloadIndividualRecords" class="btn btn-warning">Download List(Excel)</a>
        </template>
        <template slot-scope="data" slot="filters">

        </template>
        <template slot="sort-fields">
            <option value="created_at">Created</option>
            <option value="updated_at">Updated</option>
        </template>
        <template slot="table-header">
            <th></th>
            <th>Name</th>
            <th>National ID</th>
            <th>Province</th>
            <th>District</th>
            <th></th>
            <th class="text-center"></th>
        </template>
        <template slot="table-row" slot-scope="data">
            <td>
                <span class="text-primary">#{{ data.row.id }}</span>
            </td>
            <td>{{ data.row.name }}</td>
            <td>{{ data.row.NationalId }}</td>
            <td>{{ data.row.province }}</td>
            <td>{{ data.row.district }}</td>
            <td>
                <router-link :to="`/dashboard/viewClient/${data.row.id}`" class="action-icon text-primary">
                    <i class="mdi mdi-eye mdi-24px"/>
                </router-link>
            </td>
        </template>
    </page-index>
</template>
<script>
import PageIndex from "../core/page-index";
export default {
    name: "viewClient",
    components : {PageIndex},
    data (){
        return {
            user: window.user,
        }
    },
}
</script>
