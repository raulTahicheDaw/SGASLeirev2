<template>
    <div>
        <p><code>query: {{ query }}</code></p>
        <datatable v-bind="$data">
            <button class="btn btn-default" @click="alertSelectedUids" :disabled="!selection.length">
                <i class="fa fa-commenting-o"></i>
                Alert selected uid(s)
            </button>
        </datatable>
    </div>
</template>
<script>
    import Vue from 'vue'
    import components from './comps/'
    import { datosReferencias } from '../datos';

    export default {
        components,
        name: 'ReferenciasTable', // `name` is required as a recursive component
        props: ['row'], // from the parent FriendsTable (if exists)
        data () {
            const amINestedComp = !!this.row
            return {
                supportBackup: true,
                supportNested: true,
                tblClass: 'table-bordered',
                tblStyle: 'color: #666',
                pageSizeOptions: [5, 10, 15, 20],
                columns: (() => {
                    const cols = [
                        { title: 'Nombre', field: 'nombre', thComp: 'FilterTh', tdStyle: { fontStyle: 'italic' } },
                        { title: 'Apellidos', field: 'apellidos', thComp: 'FilterTh', tdStyle: { fontStyle: 'italic' } },
                        { title: 'Dirección', field: 'direccion', thComp: 'FilterTh', thStyle: { fontWeight: 'normal' } },
                        { title: 'Localidad', field: 'localidad', thComp: 'FilterTh', thStyle: { fontWeight: 'normal' } },
                        { title: 'Teléfono', field: 'telefono', tdComp: 'IP' },
                        { title: 'Observaciones', field: 'observaciones', thStyle: { fontWeight: 'normal' } }
                    ]
                    const groupsDef = {
                        Normal: ['Nombre','Apellidos','Dirección','Localidad', 'Teléfono','Observaciones'],
                        Sortable: ['UID', 'Localidad', 'Apellidos', 'Nombre'],
                    }
                    return cols.map(col => {
                        Object.keys(groupsDef).forEach(groupName => {
                            if (groupsDef[groupName].includes(col.title)) {
                                col.group = groupName
                            }
                        })
                        return col
                    })
                })(),
                data: [],
                total: 0,
                selection: [],
                summary: {},
                // `query` will be initialized to `{ limit: 10, offset: 0, sort: '', order: '' }` by default
                // other query conditions should be either declared explicitly in the following or set with `Vue.set / $vm.$set` manually later
                // otherwise, the new added properties would not be reactive
                query: amINestedComp ? { uid: this.row.friends } : {},
                // any other staff that you want to pass to dynamic components (thComp / tdComp / nested components)
                xprops: {
                    eventbus: new Vue()
                }
            }
        },
        watch: {
            query: {
                handler () {
                    this.handleQueryChange()
                },
                deep: true
            }
        },
        methods: {
            handleQueryChange () {
                datosReferencias(this.query).then(({ rows, total, summary }) => {
                    this.data = rows
                    this.total = total
                    this.summary = summary
                })
            },
            alertSelectedUids () {
                alert(this.selection.map(({ uid }) => uid))
            }
        }
    }
</script>
<style>
    .w-240 {
        width: 220px;
    }

</style>
