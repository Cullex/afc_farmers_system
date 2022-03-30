import dashboard  from  "../components/dashboard/dashboard";
import addRecord from "../components/dashboard/addRecord";
import addIndividual from "../components/dashboard/addIndividual";
import addCompany from "../components/dashboard/addCompany";
import individualRecords from "../components/dashboard/individualRecords";
import companyRecords from "../components/dashboard/companyRecords";
import viewIndividual from "../components/dashboard/viewIndividual";
import viewCompany from "../components/dashboard/viewCompany";
import accessUsers from "../components/dashboard/accessUsers";
import getUserLevel from "../components/dashboard/getUserLevel";
import systemReports from "../components/dashboard/systemReports";
import addSeason from "../components/dashboard/addSeason";
import addCrop from "../components/dashboard/addCrop";
import attachCrop from "../components/dashboard/attachCrop";
import viewClient from "../components/dashboard/viewClient";
import bulawayoStats from "../components/dashboard/bulawayoStats";
import statsSelection from "../components/dashboard/statsSelection";
import harareStats from "../components/dashboard/harareStats";
import  midlandsStats from "../components/dashboard/midlandsStats";
import manicalandStats from "../components/dashboard/manicalandStats";
import masvingoStats from "../components/dashboard/masvingoStats";
import matNorth from "../components/dashboard/matNorth";
import matSouth from "../components/dashboard/matSouth";
import mashCentral from "../components/dashboard/mashCentral";
import mashEastStats from "../components/dashboard/mashEastStats";
import mashWestStats from "../components/dashboard/mashWestStats";
import seasonalStats from "../components/dashboard/seasonalStats";
import Summer21_22 from "../components/dashboard/Summer21_22";


const routes = [
    {
        path : '/',
        component : dashboard
    },
    {
        path : '/dashboard/addRecord',
        component: addRecord
    },
    {
        path : '/dashboard/addIndividual',
        component: addIndividual
    },
    {
        path : '/dashboard/addCompany',
        component: addCompany
    },
    {
        path : '/dashboard/individualRecords',
        component: individualRecords
    },
    {
        path : '/dashboard/companyRecords',
        component: companyRecords
    },
    {
        path : '/dashboard/viewIndividual/:id',
        component: viewIndividual
    },
    {
        path : '/dashboard/viewCompany/:id',
        component: viewCompany
    },
    {
        path : '/dashboard/accessUsers',
        component : accessUsers
    },
    {
        path : '/dashboard/getUserLevel/:id',
        component: getUserLevel
    },
    {
        path : '/dashboard/systemReports',
        component: systemReports

    },
    {
        path : '/dashboard/addSeason',
        component: addSeason

    },
    {
        path : '/dashboard/addCrop',
        component: addCrop

    },
    {
        path : '/dashboard/attachCrop',
        component: attachCrop
    },
    {
        path : '/dashboard/viewClient/:id',
        component: viewClient
    },
    {
        path : '/dashboard/bulawayoStats',
        component: bulawayoStats
    },
    {
        path : '/dashboard/statsSelection',
        component: statsSelection
    },
    {
        path: '/dashboard/harareStats',
        component: harareStats
    },
    {
        path: '/dashboard/midlandsStats',
        component: midlandsStats
    },
    {
        path: '/dashboard/manicalandStats',
        component: manicalandStats
    },
    {
        path: '/dashboard/masvingoStats',
        component: masvingoStats
    },
    {
        path: '/dashboard/matNorth',
        component: matNorth
    },
    {
        path: '/dashboard/matSouth',
        component: matSouth
    },
    {
        path: '/dashboard/mashCentral',
        component: mashCentral
    },
    {
        path: '/dashboard/mashEastStats',
        component: mashEastStats
    },
    {
        path: '/dashboard/mashWestStats',
        component: mashWestStats
    },
    {
        path: '/dashboard/seasonalStats',
        component: seasonalStats
    },
    {
        path: '/dashboard/Summer21_22',
        component: Summer21_22
    }

];


export default routes;
