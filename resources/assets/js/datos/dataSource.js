const clientes = [
    {uid: 1, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[2,5,8,9], country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 2, email:'raul@gmail.com',nombre:'dailos',apellidos:'Gonzalez Moreno',friends:[3,1,9,4], country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 3, email:'raul@gmail.com',nombre:'leire',apellidos:'Gonzalez Rueda',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 5, email:'raul@gmail.com',nombre:'Encarnación',apellidos:'Moreno Mendoza',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 6, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 7, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 8, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 9, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 10, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 11, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 12, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 13, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 14, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 15, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 16, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 17, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 18, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 19, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 20, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 21, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''},
    {uid: 22, email:'raul@gmail.com',nombre:'raul',apellidos:'Gonzalez Moreno',friends:[],country:'Spain',ip:'192.168.10.10',age: 36, createTime:1472716886000,color:'red',lang:'esp',programLang:'php',Opt:''}
    ];

const referencias = [
    {uid: 0, nombre: 'Pepe', apellidos: 'López Martín', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 1, nombre: 'Manolo', apellidos: 'González Suarez', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 2, nombre: 'Yeudiel', apellidos: 'Suarez Rueda', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 3, nombre: 'Ariday', apellidos: 'González Rueda', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 4, nombre: 'Manuel', apellidos: 'Fuentes Martín', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 5, nombre: 'Juan', apellidos: 'Moya Martín', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},
    {uid: 6, nombre: 'Raul', apellidos: 'López Gonzalez', telefono: '600123456', direccion: 'Aquí 21', localidad: 'Arrecife', observaciones: 'Primera referencia'},

];

const ramos = [
    {uid: 0, nombre: 'Vida', descripcion: 'Seguros de vida, decesos, etc...', activo: 1},
    {uid: 1, nombre: 'Hogar', descripcion: 'Seguros de hogar', activo: 1},
    {uid: 2, nombre: 'Accidentes', descripcion: 'Seguros de Accidentes', activo: 1},
    {uid: 3, nombre: 'Decesos', descripcion: 'Seguros de Decesos', activo: 1}
    ];

export { clientes, ramos, referencias };

