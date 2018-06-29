import moment from 'moment'
import uniq from 'lodash/uniq'
import orderBy from 'lodash/orderBy'
import { clientes, ramos, referencias, productos, categoriasClientes } from './dataSource'
const typeOf = o => Object.prototype.toString.call(o).slice(8, -1).toLowerCase()
const purify = o => JSON.parse(JSON.stringify(o)) // purify data

/**
 * mockData - simulate Ajax request and respond
 * @param   {Object} query
 * @resolve {Object}
 */
function datosClientes(query) {
    query = purify(query)
    const { limit = 10, offset = 0, sort = '', order = '' } = query

    let rows = clientes;

    // custom query conditions
    ['uid', 'nombre','apellidos', 'email', 'country', 'lang', 'programLang'].forEach(field => {
        switch (typeOf(query[field])) {
            case 'array':
                rows = rows.filter(row => query[field].includes(row[field]))
                break
            case 'string':
                rows = rows.filter(row => row[field].toLowerCase().includes(query[field].toLowerCase()))
                break
            default:
                // nothing to do
                break
        }
    })

    if (sort) {
        rows = orderBy(rows, sort, order)
    }

    const res = {
        rows: rows.slice(offset, offset + limit),
        total: rows.length,
        summary: {
            uid: rows.length,
            age: rows.length && ~~(rows.map(({ age }) => age).reduce((sum, cur) => sum + cur) / rows.length), // average age
            country: uniq(rows.map(({ country }) => country)).length
        }
    }

    const consoleGroupName = 'Mock data - ' + moment().format('YYYY-MM-DD HH:mm:ss')
    setTimeout(() => {
        console.group(consoleGroupName)
        console.info('Receive:', query)
        console.info('Respond:', res)
        console.groupEnd(consoleGroupName)
    }, 0)
    return Promise.resolve(purify(res))
}

function datosReferencias(query) {
    query = purify(query)
    const { limit = 10, offset = 0, sort = '', order = '' } = query

    let rows = referencias;

    // custom query conditions
    ['uid', 'nombre','apellidos', 'telefono', 'direccion', 'localidad', 'observaciones'].forEach(field => {
        switch (typeOf(query[field])) {
            case 'array':
                rows = rows.filter(row => query[field].includes(row[field]))
                break
            case 'string':
                rows = rows.filter(row => row[field].toLowerCase().includes(query[field].toLowerCase()))
                break
            default:
                // nothing to do
                break
        }
    })

    if (sort) {
        rows = orderBy(rows, sort, order)
    }

    const res = {
        rows: rows.slice(offset, offset + limit),
        total: rows.length,
        summary: {
            uid: rows.length,
            nombre: uniq(rows.map(({ nombre }) => nombre)).length
        }
    }

    const consoleGroupName = 'Mock data - ' + moment().format('YYYY-MM-DD HH:mm:ss')
    setTimeout(() => {
        console.group(consoleGroupName)
        console.info('Receive:', query)
        console.info('Respond:', res)
        console.groupEnd(consoleGroupName)
    }, 0)
    return Promise.resolve(purify(res))
}

function datosRamos(query) {
    query = purify(query)
    const { limit = 10, offset = 0, sort = '', order = '' } = query

    let rows = ramos;

    // custom query conditions
    ['id','nombre','descripcion','estado'].forEach(field => {
        switch (typeOf(query[field])) {
            case 'array':
                rows = rows.filter(row => query[field].includes(row[field]))
                break
            case 'string':
                rows = rows.filter(row => row[field].toLowerCase().includes(query[field].toLowerCase()))
                break
            default:
                // nothing to do
                break
        }
    })

    if (sort) {
        rows = orderBy(rows, sort, order)
    }

    const res = {
        rows: rows.slice(offset, offset + limit),
        total: rows.length,
        summary: {
            id: rows.length,
            nombre: uniq(rows.map(({ nombre }) => nombre)).length
        }
    }

    const consoleGroupName = 'Mock data - ' + moment().format('YYYY-MM-DD HH:mm:ss')
    setTimeout(() => {
        console.group(consoleGroupName)
        console.info('Receive:', query)
        console.info('Respond:', res)
        console.groupEnd(consoleGroupName)
    }, 0)
    return Promise.resolve(purify(res))
}

function datosCategoriasClientes(query) {
    query = purify(query)
    const { limit = 10, offset = 0, sort = '', order = '' } = query

    let rows = categoriasClientes;

    // custom query conditions
    ['id','nombre','descripcion','estado'].forEach(field => {
        switch (typeOf(query[field])) {
            case 'array':
                rows = rows.filter(row => query[field].includes(row[field]))
                break
            case 'string':
                rows = rows.filter(row => row[field].toLowerCase().includes(query[field].toLowerCase()))
                break
            default:
                // nothing to do
                break
        }
    })

    if (sort) {
        rows = orderBy(rows, sort, order)
    }

    const res = {
        rows: rows.slice(offset, offset + limit),
        total: rows.length,
        summary: {
            id: rows.length,
            nombre: uniq(rows.map(({ nombre }) => nombre)).length
        }
    }

    const consoleGroupName = 'Mock data - ' + moment().format('YYYY-MM-DD HH:mm:ss')
    setTimeout(() => {
        console.group(consoleGroupName)
        console.info('Receive:', query)
        console.info('Respond:', res)
        console.groupEnd(consoleGroupName)
    }, 0)
    return Promise.resolve(purify(res))
}

function datosProductos(query) {
    query = purify(query)
    const { limit = 10, offset = 0, sort = '', order = '' } = query

    let rows = productos;

    // custom query conditions
    ['id', 'nombre', 'descripcion', 'ramo', 'estado'].forEach(field => {
        switch (typeOf(query[field])) {
            case 'array':
                rows = rows.filter(row => query[field].includes(row[field]))
                break
            case 'string':
                rows = rows.filter(row => row[field].toLowerCase().includes(query[field].toLowerCase()))
                break
            default:
                // nothing to do
                break
        }
    })

    if (sort) {
        rows = orderBy(rows, sort, order)
    }

    const res = {
        rows: rows.slice(offset, offset + limit),
        total: rows.length,
        summary: {
            id: rows.length,
            nombre: uniq(rows.map(({ nombre }) => nombre)).length
        }
    }

    const consoleGroupName = 'Mock data - ' + moment().format('YYYY-MM-DD HH:mm:ss')
    setTimeout(() => {
        console.group(consoleGroupName)
        console.info('Receive:', query)
        console.info('Respond:', res)
        console.groupEnd(consoleGroupName)
    }, 0)
    return Promise.resolve(purify(res))
}

export {datosClientes, datosRamos, datosReferencias, datosProductos, datosCategoriasClientes}
